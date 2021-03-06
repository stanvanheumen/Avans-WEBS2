<?php

class CMS extends Controller {
	
	public function view($view, $data = array()) {
		$this->smarty->display('app/view/cms/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/cms/partial/footer.tpl');
	}

	public function index() {
		// Require models
		$this->smart('CMS');

		if(isset($_SESSION['cms_authenticated']) && $_SESSION['cms_authenticated'] == 1) {
			$this->redirect('/cms/dashboard');
			return;
		}

		if (isset($_POST['email']) && isset($_POST['password'])) {
			// requirement
			if($_POST['email'] == 'admin' && $_POST['password'] = 'admin') {
				// let the user authenticate....
				$_SESSION['cms_authenticated'] = 1;
				$this->redirect('/cms/dashboard');
				return;
			}
			$username = $this->db->escape($_POST['email']);
			$user = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$username'", 'Account');
			if ($user != null && $user->getRankNaam() == 'admin') {
				if(password_verify($this->db->escape($_POST['password']), $user->getHash())) {
					$_SESSION['cms_authenticated'] = 1;
					$this->redirect('/cms/dashboard');
					return;
				}
			}
		}

		// Render view
		$this->view('cms/index');
	}

	public function dashboard() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Dashboard');
		
		$result = $this->db->query("SELECT COUNT(*) FROM product WHERE zichtbaar = 1");
		$row = $result->fetch_row();
		$products = $row[0];
		
		$result = $this->db->query("SELECT COUNT(*) FROM account WHERE zichtbaar = 1");
		$row = $result->fetch_row();
		$users = $row[0];
		
		$result = $this->db->query("SELECT COUNT(*) FROM bestelling WHERE zichtbaar = 1");
		$row = $result->fetch_row();
		$orders = $row[0];

		$result = $this->db->query("SELECT COUNT(*) FROM categorie WHERE zichtbaar = 1");
		$row = $result->fetch_row();
		$categories = $row[0];
		
		$this->smarty->assign('products', $products);
		$this->smarty->assign('users', $users);
		$this->smarty->assign('orders', $orders);
		$this->smarty->assign('categories', $categories);

		// Render view
		$this->view('cms/dashboard');
	}

	/* <PRODUCTS> */
	
	public function products() {
		if(!$this->authenticate_check()) {
			return;
		}
			
		$page = 1;
		
		if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0) {
			$page = $_GET['page'];
		}
		
		$limit = (double)5;
		$page--;
		$start = $page * $limit;
		
		// Require models
		$this->smart('Producten');

		$products = $this->db->queryArray("SELECT * FROM product WHERE zichtbaar = 1 LIMIT $start,$limit", 'Product');
		
		$result = $this->db->query("SELECT COUNT(*) FROM product");
		$row = $result->fetch_row();
		$count = (double) $row[0];
		$result->close();
		
		$pages = ceil($count / $limit);
		
		$this->smarty->assign('products', $products);
		$this->smarty->assign('pages', $pages);
		$this->smarty->assign('current_page', $page + 1);

		// Render view
		$this->view('cms/products');
	}

	public function create_product() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Toevoegen');

		// Database requests
		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');

		$this->smarty->assign('categorie', $categorie);

		// Render view
		$this->view('cms/create_product');
	}

	public function create_product_post() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		$categorie_id 		= $this->db->escape($_POST['categorie_id']);
		$productnaam 		= $this->db->escape($_POST['productnaam']);
		$prijs 				= $this->db->escape($_POST['prijs']);
		$beschrijving_kort 	= $this->db->escape($_POST['beschrijving_kort']);
		$beschrijving_lang 	= $this->db->escape($_POST['beschrijving_lang']);
		$voorraad 			= $this->db->escape($_POST['voorraad']);

		if (!is_numeric($prijs) || !is_numeric($voorraad)) {
			$this->redirect('/cms/create_product');
			return;
		}
		
		$thumbnail = $_FILES['image'];
		$images = $_FILES['images'];

		$this->db->query("INSERT INTO product VALUES (NULL, '$categorie_id', '$productnaam', '$prijs', '$beschrijving_lang', '$beschrijving_kort', '$voorraad', NULL, CURRENT_TIMESTAMP, NULL, '1')");
		$curr_product = $this->db->queryObject('SELECT * FROM product ORDER BY id DESC LIMIT 1', 'Product');
		
		$p_id = $curr_product->getId();

		move_uploaded_file($thumbnail['tmp_name'], 'uploads/' . $curr_product->getId() . '_1.png');
		$filename = 'uploads/' . $curr_product->getId() . '_1.png';
		$this->db->query("INSERT INTO productafbeelding VALUES (NULL, '$p_id', 'thumbnail', '$filename')");

		$counter = 2;
		foreach ($images['tmp_name'] as $value) {
			if ($value == '') 
				break;
			$location = 'uploads/' . $curr_product->getId() . '_' . $counter . '.png';
			move_uploaded_file($value, $location);
			$this->db->query("INSERT INTO productafbeelding VALUES (NULL, '$p_id', 'afbeelding', '$location')");
			$counter++;
		}
		
		// Render view
		$this->redirect('/cms/products');
	}

	public function edit_product() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/products');
			return;
		}
	
		// Require models
		$this->smart('Wijzigen');

		// Database requests
		$id = $this->db->escape($_GET['id']);

		$product = $this->db->queryObject("SELECT * FROM PRODUCT WHERE id='$id'", 'Product');

		if ($product == null) {
			$this->redirect('/cms/products');
			return;
		}

		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');
		$image = $this->db->queryArray("SELECT * FROM productafbeelding WHERE product_id = '$id'", 'ProductAfbeelding');

		$this->smarty->assign('categorie', $categorie);
		$this->smarty->assign('product', $product);
		$this->smarty->assign('images', $image);
		
		// Render view
		$this->view('cms/edit_product');
	}

	public function edit_product_post() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		$id 				= $this->db->escape($_GET['id']);
		$categorie_id 		= $this->db->escape($_POST['categorie_id']);
		$productnaam 		= $this->db->escape($_POST['productnaam']);
		$prijs 				= $this->db->escape($_POST['prijs']);
		$beschrijving_kort 	= $this->db->escape($_POST['beschrijving_kort']);
		$beschrijving_lang 	= $this->db->escape($_POST['beschrijving_lang']);
		$voorraad 			= $this->db->escape($_POST['voorraad']);

		$thumbnail 			= $_FILES['afbeelding'];
		$images 			= $_FILES['afbeeldingen'];

		

		if ($thumbnail['size'] != 0) {
			move_uploaded_file($thumbnail['tmp_name'], 'uploads/' . $id . '_1.png');
			$filename = 'uploads/' . $id . '_1.png';
			$obj = $this->db->queryObject("SELECT * FROM productafbeelding WHERE product_id = '$id' AND afbeeldingtype_type = 'thumbnail'", 'ProductAfbeelding');
			if ($obj == null) {
				$this->db->query("INSERT INTO productafbeelding VALUES (NULL, '$id', 'thumbnail', '$filename')");
			}			
		}
		
		$counter = 2;
		foreach ($images['tmp_name'] as $value) {
			if ($value == '') {
				break;
			}
			$location = 'uploads/' . $id . '_' . $counter . '.png';
			move_uploaded_file($value, $location);
			$obj = $this->db->queryObject("SELECT * FROM productafbeelding WHERE product_id = '$id' AND afbeeldingtype_type = 'afbeelding' AND link = '$location'", 'ProductAfbeelding');
			if ($obj == null) {
				$this->db->query("INSERT INTO productafbeelding VALUES (NULL, '$id', 'afbeelding', '$location')");
			}
			$counter++;
		}

		

		if (!is_numeric($prijs) || $prijs < 0 || !is_numeric($voorraad) || $voorraad < 0) {
			$this->redirect('/cms/edit_product?id=' . $id);
			return;
		}

		$this->db->query("UPDATE product SET categorie_id='$categorie_id', productnaam='$productnaam', prijs='$prijs', beschrijving='$beschrijving_lang', beschrijving_kort='$beschrijving_kort', voorraad='$voorraad' WHERE id='$id'");
		$this->redirect('/cms/products');
	}

	public function delete_product() {
		// Authentication checks
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/products');
			return;
		}
	
		$id = $this->db->escape($_GET['id']);

		$this->db->query("UPDATE product SET zichtbaar='0' WHERE id='$id'");

		$this->redirect('/cms/products');
	}

	/* </PRODUCTS> */
	
	/* <CATEGORIES> */

	public function categories() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Categorie&#235;n');

		$categories = $this->db->queryArray('SELECT * FROM categorie WHERE categorie_parent IS NULL AND zichtbaar = 1 ORDER BY naam ASC', 'Categorie');
		$subcategories = $this->db->queryArray('SELECT * FROM categorie WHERE categorie_parent IS NOT NULL AND zichtbaar = 1 ORDER BY naam ASC', 'Categorie');

		$this->smarty->assign('categories', $categories);
		$this->smarty->assign('sub_categories', $subcategories);

		// Render view
		$this->view('cms/categories');
		
	}

	public function create_category() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Categorie aanmaken');

		// Database requests
		$categorie = $this->db->queryArray('SELECT * FROM categorie WHERE categorie_parent IS NULL', 'Categorie');

		$this->smarty->assign('categorie', $categorie);
		
		// Render view
		$this->view('cms/create_category');
	}

	public function create_category_post() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Database requests
		$naam = $this->db->escape($_POST['naam']);
		$category = $this->db->escape($_POST['categorie_id']);
		
		if($category == -1) {
			$this->db->query("INSERT INTO categorie (naam) VALUES ('$naam')");
		} else {
			$this->db->query("INSERT INTO categorie (naam, categorie_parent, zichtbaar) VALUES ('$naam', '$category', '1')");
		}
		
		
		// Redirecting
		$this->redirect('/cms/categories');
	}

	public function edit_category() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/categories');
			return;
		}
	
		// Require models
		$this->smart('Categorie wijzigen');

		// Database requests
		$id = $this->db->escape($_GET['id']);
		
		$categorie = $this->db->queryObject("SELECT * FROM categorie WHERE id = '$id'", 'Categorie');
		
		if ($categorie == null) {
			$this->redirect('/cms/categories');
			return;
		}

		// IMPORTANT: we cannot change a parent category into a subparent category since the parent category can contain subcategories...
		// however, we can change a subcategory into a parent category, or move the subcategory to another category
		if($categorie->getCategorieParent() != null) {
			$parent_category = new Categorie();
			$parent_category->setId(-1);
			$parent_category->setNaam('Geen');
			
			$categories = $this->db->queryArray("SELECT * FROM categorie WHERE categorie_parent IS NULL", 'Categorie');
			/// disabled for now since changes cant be undone //array_unshift($categories, $parent_category); // prepend empty category
			$this->smarty->assign('parent_categories', $categories);
		}

		$this->smarty->assign('categorie', $categorie);
		
		// Render view
		$this->view('cms/edit_category');
	}
	
	public function edit_category_post() {
		if(!$this->authenticate_check()) {
			return;
		}
			
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/categories');
			return;
		}
		
		// Database requests
		$id = $this->db->escape($_GET['id']);
		$naam = $this->db->escape($_POST['naam']);
		
		if(isset($_POST['categorie_id'])) {
			$category = $this->db->escape($_POST['categorie_id']);
			$this->db->query("UPDATE categorie SET naam='$naam', categorie_parent='$category' WHERE id='$id'");
		} else {
			$this->db->query("UPDATE categorie SET naam='$naam' WHERE id='$id'");
		}
		
		// Redirecting
		$this->redirect('/cms/categories');
	}

	public function delete_category() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/categories');
			return;
		}
	
		$id = $this->db->escape($_GET['id']);

		$this->db->query("UPDATE categorie SET zichtbaar='0' WHERE id='$id'");

		$this->redirect('/cms/categories');
	}

	/* </CATEGORIES> */

	/* <ORDERS> */

	public function orders() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Bestellingen');

		$orders = $this->db->queryArray('SELECT * FROM bestelling WHERE zichtbaar = 1', 'Bestelling');
		$accounts = $this->db->queryArray('SELECT * FROM account', 'Account');

		$this->smarty->assign('accounts', $accounts);
		$this->smarty->assign('orders', $orders);

		// Render view
		$this->view('cms/orders');
	}

	public function read_bestelling() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id'])) {
			$this->redirect('/cms/orders');
			return;
		}

		// Require models
		$this->smart('Bestelling bekijken');

		$b_id = $this->db->escape($_GET['id']);

		$orderedproducts = $this->db->queryArray("SELECT * FROM bestelproduct WHERE bestelling_id = '$b_id'", 'bestelproduct');

		if ($orderedproducts == array()) {
			$this->redirect('/cms/orders');
			return;
		}

		$products = $this->db->queryArray('SELECT * FROM product', 'Product');

		$this->smarty->assign('orderedproducts', $orderedproducts);
		$this->smarty->assign('products', $products);

		// Render view
		$this->view('cms/read_order');
	}

	public function delete_bestelling() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id'])) {
			$this->redirect('/cms/orders');
			return;
		}

		// Require models
		$this->smart('Bestelling verwijderen');

		$id = $this->db->escape($_GET['id']);

		$this->db->query("UPDATE bestelling SET zichtbaar='0' WHERE id='$id'");

		$this->redirect('/cms/orders');
	}

	/* </ORDERS> */

	/* <USERS> */

	public function users() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Gebruikers');

		// Database requests
		$users = $this->db->queryArray('SELECT * FROM account WHERE zichtbaar = 1', 'Account');
		
		$this->smarty->assign('users', $users);
		
		// Render view
		$this->view('cms/users');
	}

	public function read_user() {
		if(!$this->authenticate_check()) {
			return;
		}

		$this->smart('Gebruiker bekijken');
		$id = $this->db->escape($_GET['id']);
		$user = $this->db->queryObject("SELECT * FROM account WHERE id='$id'", 'Account');

		if ($user == null) {
			$this->redirect('/cms/users');
			return;
		}

		$this->smarty->assign('user', $user);

		// Render view
		$this->view('cms/read_user');
	}

	public function edit_user() {
		if(!$this->authenticate_check()) {
			return;
		}

		// Require models
		$this->smart('Gebruiker wijzigen');

		// Database requests
		$id = $this->db->escape($_GET['id']);

		$user = $this->db->queryObject("SELECT * FROM account WHERE id='$id'", 'Account');

		if ($user == null) {
			$this->redirect('/cms/users');
			return;
		}

		$this->smarty->assign('user', $user);
		
		$genders = array(
							array("gender" => "Man", "id" => "0"),
							array("gender" => "Vrouw", "id" => "1"),
							array("gender" => "Ik weet het niet/beide", "id" => "2")
						);

		$ranks = $this->db->queryArray('SELECT * FROM rank', 'Rank');
						
		$this->smarty->assign('genders', $genders);
		$this->smarty->assign('ranks', $ranks);
		
		// Render view
		$this->view('cms/edit_user');
	}

	public function edit_user_post() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/users');
			return;
		}
		
		$id 			= $this->db->escape($_GET['id']);
		$first_name 	= $this->db->escape($_POST['first_name']);
		$infix_name 	= $this->db->escape($_POST['infix_name']);
		$last_name 		= $this->db->escape($_POST['last_name']);
		$street 		= $this->db->escape($_POST['street']);
		$postal_code 	= $this->db->escape($_POST['postal_code']);
		$place 			= $this->db->escape($_POST['place']);
		$gender			= $this->db->escape($_POST['gender']);
		$number 		= $this->db->escape($_POST['number']);
		$rank			= $this->db->escape($_POST['rank']);
		
		$this->db->query("UPDATE account SET rank_naam='$rank', voornaam='$first_name', tussenvoegsel='$infix_name', achternaam='$last_name', straat='$street', postcode='$postal_code', woonplaats='$place', geslacht='$gender', telefoonnummer='$number' WHERE id='$id'");
		$this->redirect('/cms/users');
	}

	public function delete_user() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/users');
			return;
		}
	
		$id = $this->db->escape($_GET['id']);
		$this->db->query("UPDATE account SET zichtbaar='0' WHERE id='$id'");
		
		$this->redirect('/cms/users');
	}

	/* </USERS> */
	
	/* <EXTRA_FUNCTIONS> */

	public function logout() {
		unset($_SESSION['cms_authenticated']);
		
		$this->redirect('/cms/index');
	}
	
	public function authenticate_check() {
		if(!isset($_SESSION['cms_authenticated']) || $_SESSION['cms_authenticated'] != 1) {
			$this->redirect('/cms/index');
			return false;
		}
		
		return true;
	}

	/* </EXTRA_FUNCTIONS> */

}