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
		$this->smarty->display('app/view/' . $view . '.tpl');
	}
	
	public function smart($title) {
		$this->smarty = new Smarty();
		$this->smarty->assign('title', $title);
		$this->smarty->assign('year', date('Y'));
	}
	
}