<?php

class Home extends Controller {

	public function index() {
		// Require models
		require_once ('app/model/product.inc.php');
		require_once ('app/model/productafbeelding.inc.php');
		$this->smart('Home');
		
		if(isset($_GET['authenticated'])) {
			$this->smarty->assign('authenticated', $_GET['authenticated']);
		}

		// Database requests
		$products = $this->db->queryArray('SELECT * FROM product LIMIT 9', 'Product');

		$temp = '';
		foreach ($products as $product) {
			if (end($products) == $product) {
				$temp .= $product->getId();
			} else {
				$temp .= $product->getId() . ' OR ';
			}
		}
		
		$product_images = [];

		if (sizeof($products) != 0)
			$product_images = $this->db->queryArray("SELECT * FROM productafbeelding WHERE afbeeldingtype_type = 'thumbnail' AND (product_id = $temp)", 'ProductAfbeelding');

		$this->smarty->assign('products', $products);
		$this->smarty->assign('product_images', $product_images);

		// Render view
		$this->view('home/index');
	}
	
	public function compareproduct() {
		// Require models
		$this->smart('Product vergelijker');
		
		// Render view
		$this->view('home/compareproduct');
	}
	
	public function about() {
		// Require models
		$this->smart('Over ons');

		// Render view
		$this->view('home/about');
	}
	
	public function search() {
		// Require models
		require_once ('app/model/product.inc.php');
		require_once ('app/model/productafbeelding.inc.php');
		$this->smart('Zoeken');
		
		if(!isset($_GET['search-query'])) {
			$this->redirect('/home');
			return;
		}

		// Database requests
		$products = $this->db->queryArray("SELECT * FROM product WHERE productnaam LIKE '%" . $this->db->escape($_GET['search-query']) . "%'", 'Product');
		$product_images = [];

		$temp = '';
		foreach ($products as $product) {
			if (end($products) == $product) {
				$temp .= $product->getId();
			} else {
				$temp .= $product->getId() . ' OR ';
			}
		}

		if (sizeof($products) != 0)
			$product_images = $this->db->queryArray("SELECT * FROM productafbeelding WHERE afbeeldingtype_type = 'thumbnail' AND (product_id = $temp)", 'ProductAfbeelding');
	
		
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
		require_once ('app/model/bestelling.inc.php');
		require_once ('app/model/product.inc.php');

		if (!isset($_SESSION['shoppingcart']) || !isset($_SESSION['user_id'])) {
			$this->redirect('/home/account');
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
		// Require models
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
		$this->smart('Assortiment');

		// Database requests
		$search_category = false;
	
		if (isset($_GET['categorie']) && is_numeric($_GET['categorie'])) {
			$search_category = $this->db->queryObject("SELECT * FROM categorie WHERE id = '" . $this->db->escape($_GET['categorie']) . "'", 'Categorie');
		}
		
		$assort_categories = $this->db->queryArray("SELECT * FROM categorie WHERE categorie_parent IS NULL ORDER BY naam", 'Categorie');
		
		$category = ($search_category ? $search_category->getNaam () : "Producten");
		
		if($search_category) {
			$producten = null;
			$id = $this->db->escape($search_category->getId());
			if($search_category->getCategorieParent() == null) {
				// include all products in all subcategories and current category
				$producten = $this->db->queryArray("SELECT * FROM product WHERE categorie_id IN (SELECT id FROM categorie WHERE id='$id' OR categorie_parent='$id')", 'Product');
			} else {
				// include all products in current category
				$producten = $this->db->queryArray("SELECT * FROM product WHERE categorie_id = '$id'", 'Product');
			}
			$this->smarty->assign('products', $producten);
			$this->smarty->assign('last_product', end($producten));
		}
		
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
				
				$sub_categories = $this->db->queryArray("SELECT * FROM categorie WHERE categorie_parent='$parent_id' ORDER BY naam", 'Categorie');
				
				if(!empty($sub_categories)) {
					$this->smarty->assign('sub_categories', $sub_categories);
				}
			}
		}
		$this->smarty->assign('assort_categories', $assort_categories);
		
		// Render view
		$this->view('home/assortment');
	}
	
	public function productdetails() {
		// Require models
		require_once ('app/model/product.inc.php');
		require_once ('app/model/productafbeelding.inc.php');
		$this->smart('Product Details');
		
		if(!isset($_GET['product_id']) || !is_numeric($_GET['product_id'])) {
			$this->redirect('/home/assortment');
			return;
		}
		
		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		// Database requests
		$product_id = $this->db->escape($_GET['product_id']);
		$product = $this->db->queryObject("SELECT * FROM product WHERE id = '" . $product_id . "'", 'Product');
		if ($product == null) {
			$this->redirect('/home/assortment');
			return;
		}
		$product_thumbnail = $this->db->queryObject("SELECT * FROM productafbeelding WHERE product_id = '" . $product_id . "' AND afbeeldingtype_type = 'thumbnail'", 'ProductAfbeelding');
		$product_afbeeldingen = $this->db->queryArray("SELECT * FROM productafbeelding WHERE product_id = '" . $product_id . "' AND afbeeldingtype_type = 'afbeelding'", 'ProductAfbeelding');
		
		if ($product_afbeeldingen == null) {
			$product_afbeeldingen = [];
		}

		foreach ($_SESSION['shoppingcart'] as $id) {
			if($product_id == $id) {
				$this->smarty->assign('in_shopping_cart', '1');
				break;
			}
		}
		
		$this->smarty->assign('product', $product);
		$this->smarty->assign('thumbnail', $product_thumbnail);
		$this->smarty->assign('product_afbeeldingen', $product_afbeeldingen);
		
		// Render view
		$this->view('home/productdetails');
	}
	
	public function register() {
		// Require models
		$this->smart('Registreren'); 

		// Render view
		$this->view('home/register');
	}

	public function register_post() {
		require_once ('app/model/account.inc.php');
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
		$acc = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$email'", 'Account');
		if($acc != null) {
			$this->redirect('/home/register');
			return;
		}
		$this->db->query("INSERT INTO account VALUES (NULL, 'member', '$email', '$password', '$first_name', '$infix_name', '$last_name', '$street', '$postal_code', '$place', '$number', '$gender', '1')");
		$this->redirect('/home/index');
	}
	
	public function login() {
		// Require models
		$this->smart('Login');
		
		if(isset($_GET['err']) && $_GET['err'] == 1) {
			$this->smarty->assign('authenticate_error', '1');
		}

		// Render view
		$this->view('home/login');
	}

	public function account() {
		if(!$this->authenticate_check()) {
			$this->redirect('/home/login');
			return;
		}

		// Require models
		require_once ('app/model/product.inc.php');
		require_once ('app/model/bestelling.inc.php');
		require_once ('app/model/bestelproduct.inc.php');
		$this->smart('Mijn Account');

		if (!isset($_SESSION['shoppingcart'])) {
			$_SESSION['shoppingcart'] = [];
		}

		$temp = '';
		
		if(!empty($_SESSION['shoppingcart'])) {
			$temp = "('" . implode("','", $_SESSION['shoppingcart']) . "')";
		}		
		
		$products = [];
		if (strlen($temp) != 0) {
			$products = $this->db->queryArray("SELECT * FROM product WHERE id IN $temp", 'Product');
		}

		$user_id = $_SESSION['user_id'];

		$orders = $this->db->query("SELECT id FROM bestelling WHERE account_id = '$user_id'");

		$allProductFromOrders = [];

		while ($row = $orders->fetch_array()) {
			$b_id = $row['id'];
			$allProducts = $this->db->queryArray("SELECT * FROM bestelproduct WHERE bestelling_id = '$b_id'", 'bestelproduct');
			foreach($allProducts as $temp) {
				array_push($allProductFromOrders, $temp);
			}
		}

		$this->smarty->assign('products', $products);
		$this->smarty->assign('orderedProducts', $allProductFromOrders);

		// Render view
		$this->view('home/account');
	}
	
	public function login_post() {
		require_once ('app/model/account.inc.php');

		if (isset($_POST['email']) && isset($_POST['password'])) {
			$username = $this->db->escape($_POST['email']);
			$user = $this->db->queryObject("SELECT * FROM account WHERE gebruikersnaam = '$username'", 'Account');
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

	public function view($view, $data = []) {
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
		require_once ('app/model/account.inc.php');

		$categories = $this->db->queryArray('SELECT * FROM categorie WHERE categorie_parent IS NULL ORDER BY naam', 'Categorie');
		$games 		= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 6 LIMIT 8', 'Product');
		$computers 	= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 2 LIMIT 8', 'Product');
		$toys 		= $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 7 LIMIT 8', 'Product');
		
		$this->smarty->assign('categories', $categories);
		$this->smarty->assign('games', $games);
		$this->smarty->assign('computers', $computers);
		$this->smarty->assign('toys', $toys);

		if (isset($_SESSION['user_id'])) {	
			$id = $_SESSION["user_id"];
			$user = $this->db->queryObject("SELECT * FROM account WHERE id = '$id'", 'Account');
			if ($user != null)
				$this->smarty->assign('user_name', $user->getVoornaam());
		}

		$this->smarty->display('app/view/home/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/home/partial/footer.tpl');
	}

	public function authenticate_check() {
		return isset($_SESSION['home_authenticated']) && $_SESSION['home_authenticated'] == 1;
		/*if(!isset($_SESSION['home_authenticated']) || $_SESSION['home_authenticated'] != 1)
			return false;
		else
			return true;*/
	}

	public function logout() {
		unset($_SESSION['home_authenticated']);
		$this->redirect('/home/index?authenticated=2');
	}

	
}