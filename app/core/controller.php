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

	public function redirect($page) {
		header("Location: $page");
	}
	
	public function getHash($input) {
		return password_hash($input, PASSWORD_DEFAULT);
	}
	
	public function error() {
		// Require models
		$this->smart('Error');

		// Render view
		$this->view('home/error');
	}

	public function implodeObjectArray($array, $method) {
		$tempArray = [];
		foreach ($array as $value) {
			if ($method != null) {
				array_push($tempArray, $value->$method());
			} else {
				array_push($tempArray, $value);
			}
		}
		return implode(',', $tempArray);
	}
	
}