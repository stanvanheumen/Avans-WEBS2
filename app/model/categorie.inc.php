<?php

class Categorie {

	private $id;
	private $categorie_parent;
	private $naam;
	private $zichtbaar;
	
	public function getId() {
		return $this->id;
	}

	public function getCategorieParent() {
		return $this->categorie_parent;
	}
	
	public function getNaam() {
		return $this->naam;
	}

	public function getZichtbaar() {
		return $this->zichtbaar;
	}
	
	public function setId($id) {
		$this->id = $id;
	}
	
	public function setNaam($naam) {
		$this->naam = $naam;
	}
	
	public function setCategorieParent($categorie_parent) {
		$this->categorie_parent = $categorie_parent;
	}
	
}