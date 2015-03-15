<?php

class CMS extends Controller {
	
	public function index() {
		// Require models
		$this->smart('CMS');
		// Render view
		$this->view('cms/index');
	}

	public function dashboard() {
		// Require models
		$this->smart('Dashboard');

		if (!isset($_POST['username']) || !isset($_POST['password']) || $_POST['username'] != 'admin' || $_POST['password'] != 'admin')
			header('Location: /cms/index');

		require_once ('app/model/product.inc.php');
		$products = $this->db->queryArray("SELECT * FROM product", 'Product');

		$this->smarty->assign('products', $products);

		// Render view
		$this->view('cms/dashboard');
	}

	public function view($view, $data = []) {
		$this->smarty->display('app/view/cms/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/cms/partial/footer.tpl');
	}

}