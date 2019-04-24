<?php
class credit{
	private $nom;
	private $marque;
	private $montant;
	function __construct($nom,$marque,$montant){
		$this->nom=$nom;
		$this->marque=$marque;
		$this->montant=$montant;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getmarque(){
		return $this->marque;
	}
	function getmontant(){
		return $this->montant;
	}


	function setNom($nom){
		$this->nom=$nom;
	}
	function setmarque($marque){
		$this->marque;
	}
	function setmontant($montant){
		$this->montant=$montant;
	}

	
}

?>