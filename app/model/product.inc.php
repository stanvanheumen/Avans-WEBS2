<?php

class Product {
	private $id;
	private $categorie_id;
	private $productnaam;
	private $prijs;
	private $beschrijving;
	private $kortingsprijs;
	private $aanmaak_datum;
	private $update_datum;
	private $voorraad;
	
	public function getId() {
		return $this->id;
	}
	
	public function getCategorieId() {
		return $this->categorie_id;
	}
	
	public function getProductNaam() {
		return $this->productnaam;
	}
	
	public function getBeschrijving() {
		return $this->beschrijving;
	}
	
	public function getPrijs() {
		return $this->prijs;
	}
	
	public function getAanmaakDatum() {
		return $this->aanmaak_datum;
	}
	
	public function getUpdateDatum() {
		return $this->update_datum;
	}
	
	public function getVoorraad() {
		return $this->voorraad;
	}
	
}

?>