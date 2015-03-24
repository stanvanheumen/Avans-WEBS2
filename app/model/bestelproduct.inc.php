<?php

class BestelProduct {
	
	private $bestelling_id;
	private $product_id;
	private $prijs;
	private $korting;
	private $aantal;

	public function getPrijs() {
		return $this->prijs;
	}

	public function getProductId() {
		return $this->product_id;
	}

	public function getAantal() {
		return $this->aantal;
	}
	
}

?>