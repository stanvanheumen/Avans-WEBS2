<?php

class Home extends Controller {
	
	public function index() {
		$this->smart('Home');
		
		$this->view('home/index');
	}
	
	public function about() {
		$this->view('home/about');
	}
	
	public function search($search_query = '') {
		$this->view('home/search', ['search_query' => $search_query]);
	}
	
	public function assortment() {
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
	
		$db = $this->model('database', 'db');
		$db->connect();
		
		$this->smart('Assortiment');
		
		$search_category = false;
	
		if (isset($_GET['categorie']) && is_numeric($_GET['categorie'])) {
			$search_category = $db->queryObject("SELECT * FROM categorie WHERE id='" . $db->escape($_GET['categorie']) . "'", 'Categorie');
		}
		
		$categories = $db->queryArray("SELECT * FROM categorie ORDER BY naam", 'Categorie');
		
		$category = ($search_category ? $search_category->getNaam () : "Producten");
		
		if($search_category) {
			$producten = $db->queryArray("SELECT * FROM product WHERE categorie_id='" . $db->escape ( $search_category->getId () ) . "'", 'Product');
			$this->smarty->assign('products', $producten);
			$this->smarty->assign('last_product', end($producten));
		}
		
		$this->smarty->assign('category', $category);
		$this->smarty->assign('categories', $categories);
		
		$this->view('home/assortment');
	}
	
	public function register() {
		$this->view('home/register');
	}
	
	public function login() {
		$this->view('home/login');
	}
	
}