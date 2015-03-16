<?php

class Account {
	
	private $id;
	private $gebruikersnaam;
	private $hash;
	private $voornaam;
	private $tussenvoegsel;
	private $achternaam;
	private $straat;
	private $postcode;
	private $woonplaats;
	private $telefoonnummer;
	private $geslacht;

	public function getGebruikersnaam() {
		return $this->gebruikersnaam;
	}

	public function getHash() {
		return $this->hash;
	}
	
}

?>