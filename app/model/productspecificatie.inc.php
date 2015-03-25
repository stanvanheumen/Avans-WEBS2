<?php

class ProductSpecificatie {
	
	private $id;
	private $product_id;
	private $specificatie;
	private $waarde;

	public function getId() {
		return $this->id;
	}

	public function getProductId() {
		return $this->product_id;
	}

	public function getSpecificatie() {
		return $this->specificatie;
	}

	public function getWaarde() {
		return $this->waarde;
	}
	
}