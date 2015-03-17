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
	
	public function getId() {
		return $this->id;
	}

	public function getGebruikersnaam() {
		return $this->gebruikersnaam;
	}

	public function getHash() {
		return $this->hash;
	}
	
	public function getVoornaam() {
		return $this->voornaam;
	}
	
	public function getTussenvoegsel() {
		return $this->tussenvoegsel;
	}
	
	public function getAchternaam() {
		return $this->achternaam;
	}
	
	public function getStraat() {
		return $this->straat;
	}
	
	public function getPostcode() {
		return $this->postcode;
	}
	
	public function getWoonplaats() {
		return $this->woonplaats;
	}
	
	public function getTelefoonnummer() {
		return $this->telefoonnummer;
	}
	
	public function getGeslacht() {
		return $this->geslacht;
	}
	
	public function getNaam() {
		$naam = $this->voornaam;
		$naam .= ' ';
		if($this->tussenvoegsel != null && $this->tussenvoegsel != "") {
			$naam .= $this->tussenvoegsel;
			$naam .= ' ';
		}
		$naam .= $this->achternaam;
		return $naam;
	}
	
	public function getAdres() {
		$adres = $this->straat;
		$adres .= ', ';
		$adres .= $this->postcode;
		$adres .= ', ';
		$adres .= $this->woonplaats;
		return $adres;
	}
	
}

?>