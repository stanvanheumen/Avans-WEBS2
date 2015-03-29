<?php

class db {
	private $db;
	
	public function connect() {
		$this->db = new mysqli('databases.aii.avans.nl', 'bcfbroek', 'Ab12345', 'bcfbroek_db');
		//$this->db = new mysqli('mysql.hostfree.nl', 'u213949021_bol', '123.123', 'u213949021_bol');
		if($this->db->connect_errno > 0){
			die('Unable to connect to database [' . $this->db->connect_error . ']');
		}
	}
	
	public function query($sql) {
		if(!$result = $this->db->query($sql)){
			die('There was an error running the query [' . $this->db->error . ']' . "<br/>" . $sql);
		}
		return $result;
	}
	
	public function queryObject($sql, $class) {
		require_once ('app/model/' . strtolower($class) . '.inc.php');
		$result = $this->query($sql);
		$item = $result->fetch_object($class);
		
		$result->close();
		
		return $item;		
	}
	
	public function queryArray($sql, $class) {
		require_once ('app/model/' . strtolower($class) . '.inc.php');
		$result = $this->query($sql);
		$items = array();
	
		while($item = $result->fetch_object($class)) {
			$items[] = $item;
		}
	
		$result->close();
	
		return $items;
	}
	
	public function escape($str) {
		return $this->db->real_escape_string($str);
	}
	

}