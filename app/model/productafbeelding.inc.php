<?php

class ProductAfbeelding {
	
	private $id;
	private $product_id;
	private $afbeeldingtype_type;
	private $link;

	public function getId() {
		return $this->id;
	}

	public function getProductId() {
		return $this->product_id;
	}

	public function getAfbeeldingType() {
		return $this->afbeeldingtype_type;
	}

	public function getLink() {
		return $this->link;
	}
	
}