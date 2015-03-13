<?php

class db {
	private $db;
	
	public function connect() {
		$this->db = new mysqli('databases.aii.avans.nl', 'bcfbroek', 'Ab12345', 'bcfbroek_db');
		if($this->db->connect_errno > 0){
			die('Unable to connect to database [' . $this->db->connect_error . ']');
		}
	}
	
	public function query($sql) {
		if(!$result = $this->db->query($sql)){
			die('There was an error running the query [' . $this->db->error . ']');
		}
		return $result;
	}
	
	public function queryObject($sql, $class) {
		$result = $this->query($sql);
		$item = $result->fetch_object($class);
		
		$result->close();
		
		return $item;		
	}
	
	public function queryArray($sql, $class) {
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