<?php

class App {
	
	protected $controller = 'home';
	protected $method = 'error';
	protected $params = array();
	
	public function __construct() {
		$url = $this->parseUrl();
		
		session_start();

		if (!isset($url[0]) && !isset($url[1])) {
			header('Location: /home/index');
		}

		if (file_exists('app/controller/' . $url[0] . '.php')) {
			$this->controller = $url[0];
			unset($url[0]);
		} else {
			header('Location: /home/index');
		}
		
		require_once 'app/libs/password.php';

		require_once 'app/controller/' . $this->controller . '.php';
		
		$this->controller = new $this->controller;
		
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		} else {
			$this->method = 'index';
		}
		
		$this->params = $url ? array_values($url) : array();
		
		$call = array($this->controller, $this->method);

		call_user_func_array($call, $this->params);
	}
	
	protected function parseUrl() {
		if (isset($_GET['url'])) {
			return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
	
}