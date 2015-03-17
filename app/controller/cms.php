<?php

class CMS extends Controller {
	
	public function index() {
		// Require models
		$this->smart('CMS');
		
		if(isset($_SESSION['cms_authenticated']) && $_SESSION['cms_authenticated'] == 1) {
			$this->redirect('/cms/dashboard');
			return;
		}

		if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
			$_SESSION['cms_authenticated'] = 1;
			$this->redirect('/cms/dashboard');
			return;
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
		
		$result = $this->db->query("SELECT COUNT(*) FROM product");
		$row = $result->fetch_row();
		$products = $row[0];
		
		$result = $this->db->query("SELECT COUNT(*) FROM account");
		$row = $result->fetch_row();
		$users = $row[0];
		
		$result = $this->db->query("SELECT COUNT(*) FROM bestelling");
		$row = $result->fetch_row();
		$orders = $row[0];
		
		$this->smarty->assign('products', $products);
		$this->smarty->assign('users', $users);
		$this->smarty->assign('orders', $orders);
		$this->smarty->assign('visitors', '0');

		// Render view
		$this->view('cms/dashboard');
	}
	
	public function products() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Producten');

		require_once ('app/model/product.inc.php');
		$products = $this->db->queryArray('SELECT * FROM product', 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('cms/products');
	}
	
	public function users() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Gebruikers');
		
		require_once ('app/model/account.inc.php');
		$users = $this->db->queryArray('SELECT * FROM account', 'Account');
		
		$this->smarty->assign('users', $users);
		
		// Render view
		$this->view('cms/users');
	}

	public function create_product() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		// Require models
		$this->smart('Toevoegen');

		require_once ('app/model/categorie.inc.php');
		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');

		$this->smarty->assign('categorie', $categorie);

		// Render view
		$this->view('cms/create_product');
	}

	public function create_post() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		$categorie_id 	= $this->db->escape($_POST['categorie_id']);
		$productnaam 	= $this->db->escape($_POST['productnaam']);
		$prijs 			= $this->db->escape($_POST['prijs']);
		$beschrijving 	= $this->db->escape($_POST['beschrijving']);
		$voorraad 		= $this->db->escape($_POST['voorraad']);
		$this->db->query("INSERT INTO product VALUES (NULL, '$categorie_id', '$productnaam', '$prijs', '$beschrijving', '$voorraad', NULL, CURRENT_TIMESTAMP, NULL)");
		
		// Render view
		$this->redirect('/cms/products');
	}

	public function edit_product() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		// Require models
		$this->smart('Wijzigen');
		require_once ('app/model/product.inc.php');
		require_once ('app/model/categorie.inc.php');

		// Database requests
		$id = $this->db->escape($_GET['id']);

		$product = $this->db->queryObject("SELECT * FROM PRODUCT WHERE id='$id'", 'Product');
		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');

		$this->smarty->assign('categorie', $categorie);
		$this->smarty->assign('product', $product);
		
		// Render view
		$this->view('cms/edit_product');
	}

	public function edit_product_post() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		$id 			= $this->db->escape($_GET['id']);
		$categorie_id 	= $this->db->escape($_POST['categorie_id']);
		$productnaam 	= $this->db->escape($_POST['productnaam']);
		$prijs 			= $this->db->escape($_POST['prijs']);
		$beschrijving 	= $this->db->escape($_POST['beschrijving']);
		$voorraad 		= $this->db->escape($_POST['voorraad']);
		$this->db->query("UPDATE product SET categorie_id='$categorie_id', productnaam='$productnaam', prijs='$prijs', beschrijving='$beschrijving', voorraad='$voorraad' WHERE id='$id'");
		$this->redirect('/cms/products');
	}
	
	public function edit_user_post() {
		if(!$this->authenticate_check()) {
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
		
		$this->db->query("UPDATE account SET voornaam='$first_name', tussenvoegsel='$infix_name', achternaam='$last_name', straat='$street', postcode='$postal_code', woonplaats='$place', geslacht='$gender', telefoonnummer='$number' WHERE id='$id'");
		$this->redirect('/cms/users');
	}

	public function view($view, $data = []) {
		$this->smarty->display('app/view/cms/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/cms/partial/footer.tpl');
	}

	public function delete_product() {
		if(!$this->authenticate_check()) {
			return;
		}
		
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/products');
			return;
		}
	
		$id = $this->db->escape($_GET['id']);
		$this->db->query("DELETE FROM product WHERE id='$id'");
		
		$this->redirect('/cms/products');
	}
	
	public function edit_user() {
		if(!$this->authenticate_check()) {
			return;
		}
	
		if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
			$this->redirect('/cms/users');
			return;
		}
		
		// Require models
		$this->smart('Gebruiker wijzigen');
		require_once ('app/model/account.inc.php');
		
		// Database requests
		$id = $this->db->escape($_GET['id']);

		$user = $this->db->queryObject("SELECT * FROM account WHERE id='$id'", 'Account');

		$this->smarty->assign('user', $user);
		
		// Render view
		$this->view('cms/edit_user');
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
		$this->db->query("DELETE FROM account WHERE id='$id'");
		
		$this->redirect('/cms/users');
	}
	
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

}