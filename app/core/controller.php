<?php
require_once 'app/libs/Smarty.class.php';

class Controller {
	protected $smarty;
	
	public function model($model, $name) {
		require_once 'app/model/' . $model . '.php';
		return new $name();
	}
	
	public function view($view, $data = []) {
		
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