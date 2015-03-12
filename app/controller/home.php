<?php

class Home extends Controller {
	
	public function index() {
		$this->view('Home', 'home/index');
	}
	
	public function about() {
		$this->view('Over', 'home/about');
	}
	
	public function search($search_query = '') {
		$this->view('Zoeken', 'home/search', ['search_query' => $search_query]);
	}
	
	public function assortment() {
		$this->view('Assortiment', 'home/assortment');
	}
	
	public function register() {
		$this->view('Registreren', 'home/register');
	}
	
	public function login() {
		$this->view('Inloggen', 'home/login');
	}
	
}