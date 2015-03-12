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
		$this->smart('Assortiment');
		
		$this->view('home/assortment');
	}
	
	public function register() {
		$this->view('home/register');
	}
	
	public function login() {
		$this->view('home/login');
	}
	
}