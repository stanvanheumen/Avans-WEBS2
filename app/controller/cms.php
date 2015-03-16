<?php

class CMS extends Controller {
	
	public function index() {
		// Require models
		$this->smart('CMS');

		if (isset($_POST['username']) && isset($_POST['password']) && $_POST['username'] == 'admin' && $_POST['password'] == 'admin')
			header('Location: /cms/dashboard');

		// Render view
		$this->view('cms/index');
	}

	public function dashboard() {
		// Require models
		$this->smart('Dashboard');

		require_once ('app/model/product.inc.php');
		$products = $this->db->queryArray('SELECT * FROM product', 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('cms/dashboard');
	}

	public function create() {
		// Require models
		$this->smart('Toevoegen');

		require_once ('app/model/categorie.inc.php');
		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');

		$this->smarty->assign('categorie', $categorie);

		// Render view
		$this->view('cms/create');
	}

	public function create_post() {
		$categorie_id 	= $this->db->escape($_POST['categorie_id']);
		$productnaam 	= $this->db->escape($_POST['productnaam']);
		$prijs 			= $this->db->escape($_POST['prijs']);
		$beschrijving 	= $this->db->escape($_POST['beschrijving']);
		$voorraad 		= $this->db->escape($_POST['voorraad']);
		$this->db->query("INSERT INTO product VALUES (NULL, '$categorie_id', '$productnaam', '$prijs', '$beschrijving', '$voorraad', NULL, CURRENT_TIMESTAMP, NULL)");
		header("Location: /cms/dashboard");
	}

	public function edit() {
		// Require models
		$this->smart('Wijzigen');
		require_once ('app/model/product.inc.php');
		require_once ('app/model/categorie.inc.php');

		// Database requests
		$id = $this->db->escape($_GET['id']);

		$product = $this->db->queryObject('SELECT * FROM PRODUCT WHERE id = ' . $id, 'Product');
		$categorie = $this->db->queryArray('SELECT * FROM categorie', 'Categorie');

		$this->smarty->assign('categorie', $categorie);
		$this->smarty->assign('product', $product);
		// Render view
		$this->view('cms/edit');
	}

	public function edit_post() {
		$id 			= $this->db->escape($_GET['id']);
		$categorie_id 	= $this->db->escape($_POST['categorie_id']);
		$productnaam 	= $this->db->escape($_POST['productnaam']);
		$prijs 			= $this->db->escape($_POST['prijs']);
		$beschrijving 	= $this->db->escape($_POST['beschrijving']);
		$voorraad 		= $this->db->escape($_POST['voorraad']);
		$this->db->query("UPDATE product SET categorie_id='$categorie_id', productnaam='$productnaam', prijs='$prijs', beschrijving='$beschrijving', voorraad='$voorraad' WHERE id='$id'");
		header("Location: /cms/dashboard");
	}

	public function view($view, $data = []) {
		$this->smarty->display('app/view/cms/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/cms/partial/footer.tpl');
	}

	public function delete() {
		$id = $this->db->escape($_GET['id']);
		$this->db->query("DELETE FROM product WHERE id='$id'");
		header("Location: /cms/dashboard");
	}

}