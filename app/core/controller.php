<?php
require_once 'app/libs/Smarty.class.php';

class Controller {
	
	protected $smarty;
	protected $db;
	
	public function __construct() {
		$this->db = $this->model('database', 'db');
		$this->db->connect();
	}
	
	public function model($model, $name) {
		require_once 'app/model/' . $model . '.php';
		return new $name();
	}
	
	public function view($view, $data = []) {
		require_once ('app/model/categorie.inc.php');
		require_once ('app/model/product.inc.php');
		
		$categories = $this->db->queryArray('SELECT * FROM categorie ORDER BY naam', 'Categorie');
		$games = $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 6 LIMIT 8', 'Product');
		$computers = $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 2 LIMIT 8', 'Product');
		$toys = $this->db->queryArray('SELECT * FROM product WHERE categorie_id = 7 LIMIT 8', 'Product');
		
		$this->smarty->assign('categories', $categories);
		$this->smarty->assign('games', $games);
		$this->smarty->assign('computers', $computers);
		$this->smarty->assign('toys', $toys);
		$this->smarty->display('app/view/partial/header.tpl');
		
		$this->smarty->display('app/view/' . $view . '.tpl');
		
		$this->smarty->display('app/view/partial/footer.tpl');
	}
	
	public function smart($title) {
		$this->smarty = new Smarty();
		$this->smarty->assign('title', $title);
		$this->smarty->assign('year', date('Y'));
	}
	
}