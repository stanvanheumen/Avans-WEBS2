<?php

class Home extends Controller {

	public function index() {
		// Initialize Smarty
		$this->smart('Home');
		
		// Check for authenication
		if(isset($_GET['authenticated'])) {
			$this->smarty->assign('authenticated', $_GET['authenticated']);
		}

		// Execute database requests
		$products = $this->db->queryArray('SELECT * FROM product WHERE zichtbaar = 1 LIMIT 9', 'Product');
		$product_ids = $this->implodeObjectArray($products, 'getId');
		$product_images = [];
		if (strlen($product_ids) != 0) {
			$product_images = $this->db->queryArray("SELECT * FROM productafbeelding WHERE afbeeldingtype_type = 'thumbnail' AND product_id IN ($product_ids)", 'ProductAfbeelding');
		}

		// Assign variables to Smarty
		$this->smarty->assign('products', $products);
		$this->smarty->assign('product_images', $product_images);

		// Render the view
		$this->view('home/index');
	}

	public function about() {
		// Initialize Smarty
		$this->smart('Over ons');

		// Render the view
		$this->view('home/about');
	}
	
	public function compareproduct() {
		// Initialize Smarty
		$this->smart('Productvergelijker');
		
		// Render the view
		$this->view('home/compareproduct');
	}
	
	public function search() {
		// Initialize Smarty
		$this->smart('Zoeken');
		
		// Check for GET variable
		if(!isset($_GET['search-query'])) {
			$this->redirect('/home/search?search-query=');
			return;
		}

		// Execute database requests
		$products = $this->db->queryArray("SELECT * FROM product WHERE productnaam LIKE '%" . $this->db->escape($_GET['search-query']) . "%' AND zichtbaar = 1", 'Product');
		$product_ids = $this->implodeObjectArray($products, 'getId');
		$product_images = [];
		if (strlen($product_ids) != 0) {
			$product_images = $this->db->queryArray("SELECT * FROM productafbeelding WHERE afbeeldingtype_type = 'thumbnail' AND product_id IN ($product_ids)", 'ProductAfbeelding');
		}

		// Assign variables to Smarty
		$this->smarty->assign('products', $products);
		$this->smarty->assign('product_images', $product_images);
		$this->smarty->assign('amount', count($products));
		$this->smarty->assign('searchquery', $_GET['search-query']);

		// Render view
		$this->view('home/search');
	}

	public function addtocart() {
		$id = $this->db->escape($_POST['value']);

		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		if (!in_array($id, $_SESSION['shoppingcart'])) {
			array_push($_SESSION['shoppingcart'], $id);
		}

		$this->redirect('/home/account');
	}

	public function removefromcart() {
		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		if(isset($_GET['id'])) {
			$id = $_GET['id'];
			$_SESSION['shoppingcart'] = array_diff($_SESSION['shoppingcart'], array($id));
		}

		$this->redirect('/home/account');
	}

	public function pay() {
		if (!isset($_SESSION['shoppingcart']) || !isset($_SESSION['user_id']) || count($_SESSION['shoppingcart']) == 0) {
			$this->redirect('/home/account');
			return;
		}

		$user_id = $_SESSION['user_id'];
		$this->db->query("INSERT INTO bestelling VALUES (NULL, '$user_id', '1', '1')");

		$bestelling = $this->db->queryObject("SELECT * FROM bestelling ORDER BY id DESC LIMIT 1", 'Bestelling');

		$bestelling_id = $bestelling->getId();

		foreach($_SESSION['shoppingcart'] as $result) {
			if (isset($_POST[$result])) {
				$product = $this->db->queryObject("SELECT * FROM product WHERE id = '$result'", 'Product');
				$product_id = $product->getId();
				$product_prijs = $product->getPrijs();
				$this->db->query("INSERT INTO bestelproduct VALUES ('$bestelling_id', '$product_id', '$product_prijs', '0', '$_POST[$result]')");
			}
		}
		$_SESSION['shoppingcart'] = [];
		$this->redirect('/home/account');
	}
	
	public function assortment() {
		// Initialize Smarty
		$this->smart('Assortiment');

		// Execute database requests
		$search_category = false;
		
		// pagination
		$page = 1;
		
		if(isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0) {
			$page = $_GET['page'];
		}
		
		$limit = (double)6;
		$page--;
		$start = $page * $limit;
		
		// fetching category
	
		if (isset($_GET['categorie']) && is_numeric($_GET['categorie'])) {
			$search_category = $this->db->queryObject("SELECT * FROM categorie WHERE id = '" . $this->db->escape($_GET['categorie']) . "'", 'Categorie');
		}
		
		$assort_categories = $this->db->queryArray("SELECT * FROM categorie WHERE categorie_parent IS NULL AND zichtbaar = 1 ORDER BY naam", 'Categorie');
		
		$category = ($search_category ? $search_category->getNaam () : "Producten");
		
		$producten = null;
		$productCount = -1;
		if($search_category) {
			$id = $this->db->escape($search_category->getId());
			if($search_category->getCategorieParent() == null) {
				// include all products in all subcategories and current category
				$producten = $this->db->queryArray("SELECT * FROM product WHERE categorie_id IN (SELECT id FROM categorie WHERE id='$id' OR categorie_parent='$id') LIMIT $start,$limit", 'Product');
				
				$result = $this->db->query("SELECT COUNT(*) FROM product WHERE categorie_id IN (SELECT id FROM categorie WHERE id='$id' OR categorie_parent='$id')");
				$productCount = $result->fetch_row()[0];
				$result->close();
				
			} else {
				// include all products in current category
				$producten = $this->db->queryArray("SELECT * FROM product WHERE categorie_id = '$id' LIMIT $start,$limit", 'Product');
				
				$result = $this->db->query("SELECT COUNT(*) FROM product WHERE categorie_id = '$id'");
				$productCount = $result->fetch_row()[0];
				$result->close();
			}
		} else {
			$producten = $this->db->queryArray("SELECT * FROM product WHERE zichtbaar = 1 LIMIT $start,$limit", 'Product');
			
			$result = $this->db->query("SELECT COUNT(*) FROM product WHERE zichtbaar = 1");
			$productCount = $result->fetch_row()[0];
			$result->close();
		}
		
		$pages = ceil( (double)$productCount / $limit);
		
		$this->smarty->assign('products', $producten);
		$this->smarty->assign('last_product', end($producten));
		
		$this->smarty->assign('pages', $pages);
		$this->smarty->assign('current_page', $page + 1);
		
		$this->smarty->assign('category', $category);
		if(isset($_GET['categorie'])) {
			$this->smarty->assign('currcategory', $_GET['categorie']);
			
			if($search_category) {
				$parent_id = 0;
				if($search_category->getCategorieParent() != null) {
					// get all subcategories from parent
					$parent_id = $search_category->getCategorieParent();
				} else {
					// get all subcategories from this one
					$parent_id = $search_category->getId();
				}
				
				$sub_categories = $this->db->queryArray("SELECT * FROM categorie WHERE categorie_parent='$parent_id' AND zichtbaar = 1 ORDER BY naam", 'Categorie');
				
				if(!empty($sub_categories)) {
					$this->smarty->assign('sub_categories', $sub_categories);
				}
			}
		}
		$this->smarty->assign('assort_categories', $assort_categories);
		
		// Render the view
		$this->view('home/assortment');
	}
	
	public function productdetails() {
		// Initialize Smarty
		$this->smart('Product Details');
		
		if(!isset($_GET['product_id']) || !is_numeric($_GET['product_id'])) {
			$this->redirect('/home/assortment');
			return;
		}
		
		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		// Execute database requests
		$product_id = $this->db->escape($_GET['product_id']);
		$product = $this->db->queryObject("SELECT * FROM product WHERE id = '$product_id' AND zichtbaar = 1", 'Product');

		if ($product == null) {
			$this->redirect('/home/assortment');
			return;
		}

		$product_thumbnail = $this->db->queryObject("SELECT * FROM productafbeelding WHERE product_id = '$product_id' AND afbeeldingtype_type = 'thumbnail'", 'ProductAfbeelding');
		$product_afbeeldingen = $this->db->queryArray("SELECT * FROM productafbeelding WHERE product_id = '$product_id' AND afbeeldingtype_type = 'afbeelding'", 'ProductAfbeelding');
		
		if ($product_afbeeldingen == null) {
			$product_afbeeldingen = [];
		}

		foreach ($_SESSION['shoppingcart'] as $id) {
			if($product_id == $id) {
				$this->smarty->assign('in_shopping_cart', '1');
				break;
			}
		}

		//$reviews = $this->db->queryArray("SELECT * FROM review WHERE product_id = '$product_id'", 'Review');
		$reviews = $this->db->queryArray("SELECT r.*, a.voornaam FROM review AS r INNER JOIN account AS a ON r.account_id = a.id WHERE r.product_id = '$product_id' ORDER BY r.datum DESC", 'Review');
		
		$this->smarty->assign('product', $product);
		$this->smarty->assign('reviews', $reviews);
		$this->smarty->assign('thumbnail', $product_thumbnail);
		$this->smarty->assign('product_afbeeldingen', $product_afbeeldingen);
		
		// Render the view
		$this->view('home/productdetails');
	}
	
	public function register() {
		// Initialize Smarty
		$this->smart('Registreren'); 

		// Render the view
		$this->view('home/register');
	}

	public function register_post() {
		$first_name 	= $this->db->escape($_POST['first_name']);
		$infix_name 	= $this->db->escape($_POST['infix_name']);
		$last_name 		= $this->db->escape($_POST['last_name']);
		$street 		= $this->db->escape($_POST['street']);
		$postal_code 	= $this->db->escape($_POST['postal_code']);
		$place 			= $this->db->escape($_POST['place']);
		$gender			= $this->db->escape($_POST['gender']);
		$number 		= $this->db->escape($_POST['number']);
		$email 			= $this->db->escape($_POST['email']);
		$password 		= $this->getHash($this->db->escape($_POST['password']));
		$repeat_pass	= $this->getHash($this->db->escape($_POST['repeat_password']));

		if ($password != $repeat_pass) {
			$this->redirect('/home/register?err=1');
			return;
		}

		$acc = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$email' AND zichtbaar = 1", 'Account');
		if($acc != null) {
			$this->redirect('/home/register?err=1');
			return;
		}
		$this->db->query("INSERT INTO account VALUES (NULL, 'member', '$email', '$password', '$first_name', '$infix_name', '$last_name', '$street', '$postal_code', '$place', '$number', '$gender', '1')");
		$_SESSION['home_authenticated'] = 1;
		$_SESSION['user_id'] = $user->getId();
		$this->redirect('/home/index?authenticated=3');
		return;
	}
	
	public function login() {
		// Initialize Smarty
		$this->smart('Login');
		
		if(isset($_GET['err']) && $_GET['err'] == 1) {
			$this->smarty->assign('authenticate_error', '1');
		}

		// Render the view
		$this->view('home/login');
	}

	public function account() {
		if(!$this->authenticate_check()) {
			$this->redirect('/home/login');
			return;
		}

		// Initialize Smarty
		$this->smart('Mijn Account');

		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		$product_ids = $this->implodeObjectArray($_SESSION['shoppingcart'], null);
		$products = [];
		if (strlen($product_ids) != 0) {
			$products = $this->db->queryArray("SELECT * FROM product WHERE id IN ($product_ids) AND zichtbaar = 1", 'Product');
		}
		
		// Assign variables to Smarty
		$this->smarty->assign('products', $products);

		// Render view
		$this->view('home/account');
	}

	public function orders() {
		if(!$this->authenticate_check()) {
			$this->redirect('/home/login');
			return;
		}

		// Set Smarty
		$this->smart('Bestellingen');

		$user_id = $_SESSION['user_id'];
		$orders = $this->db->queryArray("SELECT * FROM bestelling WHERE account_id = '$user_id' AND zichtbaar = 1", 'Bestelling');

		$orderproducts = [];

		foreach ($orders as $order) {
			$b_id = $order->getId();
			$bestelproductarray = [];
			$bestelproducts = $this->db->queryArray("SELECT * FROM bestelproduct WHERE bestelling_id = '$b_id'", 'BestelProduct');
			foreach ($bestelproducts as $bproduct) {
				$order_and_product = [];
				$p_id = $bproduct->getProductId();
				$normal_product = $this->db->queryObject("SELECT * FROM product WHERE id = '$p_id'", 'Product');
				array_push($order_and_product, $bproduct);
				array_push($order_and_product, $normal_product);
				array_push($bestelproductarray, $order_and_product);
			}
			array_push($orderproducts, $bestelproductarray);
		}

		$this->smarty->assign('orderproducts', $orderproducts);

		// Render view
		$this->view('home/orders');
	}
	
	public function login_post() {
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$username = $this->db->escape($_POST['email']);
			$user = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$username' AND zichtbaar = 1", 'Account');
			if ($user != null && $user->getRankNaam() == 'member') {
				if(password_verify($this->db->escape($_POST['password']), $user->getHash())) {
					$_SESSION['home_authenticated'] = 1;
					$_SESSION['user_id'] = $user->getId();
					$this->redirect('/home/index?authenticated=1');
					return;
				}
			}
		}
		$this->redirect('/home/login?err=1');
	}
	
	public function postreview() {
		if(!isset($_GET['id']) || !is_numeric($_GET['id']) || $_GET['id'] < 0 || !isset($_POST['review']) || !isset($_SESSION['user_id'])) {
			$this->redirect('/home/assortment');
			return;
		}
		
		$product_id = $_GET['id'];
		$user_id = $_SESSION['user_id'];
		$review = htmlspecialchars($_POST['review'], ENT_QUOTES, 'UTF-8');
		
		$this->db->query("INSERT INTO review (account_id, product_id, bericht) VALUES ('$user_id', '$product_id', '$review')");
		
		$this->redirect("/home/productdetails?product_id=$product_id");
	}

	public function view($view, $data = []) {
		$categories = $this->db->queryArray('SELECT * FROM categorie WHERE categorie_parent IS NULL AND zichtbaar = 1 ORDER BY naam', 'Categorie');

		$productsarray = [];
		for ($index = 0; $index < 3; $index++) {
			$curr_cat = $categories[$index]->getId();
			array_push($productsarray, $this->db->queryArray("SELECT * FROM product WHERE categorie_id = $curr_cat AND zichtbaar = 1 LIMIT 8", 'Product'));
		}

		$this->smarty->assign('categories', $categories);
		$this->smarty->assign('productsarray', $productsarray);

		if (isset($_SESSION['user_id'])) {	
			$id = $_SESSION["user_id"];
			$user = $this->db->queryObject("SELECT * FROM account WHERE id = '$id' AND zichtbaar = 1", 'Account');
			if ($user != null)
				$this->smarty->assign('user_name', $user->getVoornaam());
		}

		$this->smarty->display('app/view/home/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/home/partial/footer.tpl');
	}

	public function authenticate_check() {
		return isset($_SESSION['home_authenticated']) && $_SESSION['home_authenticated'] == 1;
	}

	public function logout() {
		unset($_SESSION['home_authenticated']);
		$this->redirect('/home/index?authenticated=2');
	}

	public function sitemap() {
		$this->smart('Sitemap');

		$this->view('/home/sitemap');
	}

	
}