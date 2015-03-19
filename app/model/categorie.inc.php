<?php

class Categorie {
	private $id;
	private $naam;
	private $categorie_parent;
	
	public function getId() {
		return $this->id;
	}
	
	public function getNaam() {
		return $this->naam;
	}
	
	public function getCategorieParent() {
		return $this->categorie_parent;
	}
	
}

?>