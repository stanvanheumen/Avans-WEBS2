<?php

class Bestelling {
	
	private $id;
	private $account_id;
	private $betaalmethode_id;
	private $zichtbaar;
	
	public function getId() {
		return $this->id;
	}

	public function getAccountId() {
		return $this->account_id;
	}

	public function getBetaalMethodeId() {
		return $this->betaalmethode_id;
	}

	public function getZichtbaar() {
		return $this->zichtbaar;
	}

}