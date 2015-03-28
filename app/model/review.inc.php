<?php

class Review {
	
	private $id;
	private $account_id;
	private $product_id;
	private $bericht;
	private $datum;
	private $voornaam;

	public function getId() {
		return $this->id;
	}

	public function getAccountId() {
		return $this->account_id;
	}

	public function getProductId() {
		return $this->product_id;
	}

	public function getBericht() {
		return $this->bericht;
	}

	public function getDatum() {
		return $this->datum;
	}
	
	public function getVoornaam() {
		return $this->voornaam;
	}
	
}