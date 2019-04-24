<?php
class reclamation{
	private $nom;
	private $sujet;
	private $num;
	private $message;
	function __construct($nom,$sujet,$num,$message){
		$this->nom=$nom;
		$this->sujet=$sujet;
		$this->num=$num;
		$this->message=$message;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getSujet(){
		return $this->sujet;
	}
	function getNum(){
		return $this->num;
	}
	function getMsg(){
		return $this->message;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setNum($num){
		$this->num;
	}
	function setSujet($sujet){
		$this->sujet=$sujet;
	}
	function setMsg($message){
		$this->message=$message;
	}
	
}

?>