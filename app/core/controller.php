<?php

class Controller {
	
	public function model($model) {
		require_once 'app/model/' . $model . '.php';
		return new $model();
	}
	
	public function view($title, $view, $data = []) {
		require_once 'app/libs/Smarty.class.php';
		
		$smarty = new Smarty();
		$smarty->assign('title', $title);
		$smarty->display('app/view/partial/header.tpl');
		
		//require_once 'app/view/partial/header.php'; 
		require_once 'app/view/' . $view . '.php';
		require_once 'app/view/partial/footer.php';
	}
	
}