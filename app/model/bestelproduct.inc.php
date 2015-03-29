<?php

class BestelProduct {
	
	private $bestelling_id;
	private $product_id;
	private $prijs;
	private $korting;
	private $aantal;

	public function getBestellingId() {
		return $this->bestelling_id;
	}

	public function getProductId() {
		return $this->product_id;
	}

	public function getPrijs() {
		return $this->prijs;
	}

	public function getKorting() {
		return $this->korting;
	}

	public function getAantal() {
		return $this->aantal;
	}

	public function getEuros() {
		return explode('.', $this->prijs)[0];
	}

	public function getCents() {
		return explode('.', $this->prijs)[1];
	}
	
}