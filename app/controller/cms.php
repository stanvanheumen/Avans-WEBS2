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
		$products = $this->db->queryArray("SELECT * FROM product", 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('cms/dashboard');
	}

	public function create() {
		// Require models
		$this->smart('Toevoegen');

		require_once ('app/model/categorie.inc.php');
		$categorie = $this->db->queryArray("SELECT * FROM categorie", 'Categorie');

		$this->smarty->assign('categorie', $categorie);

		// Render view
		$this->view('cms/create');
	}

	public function edit() {
		// Require models
		$this->smart('Wijzigen');

		require_once ('app/model/categorie.inc.php');
		$categorie = $this->db->queryArray("SELECT * FROM categorie", 'Categorie');

		$this->smarty->assign('categorie', $categorie);

		// Render view
		$this->view('cms/edit');
	}

	public function view($view, $data = []) {
		$this->smarty->display('app/view/cms/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/cms/partial/footer.tpl');
	}

}