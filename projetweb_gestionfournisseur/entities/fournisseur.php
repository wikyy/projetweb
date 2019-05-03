<?PHP
class fournisseur{
	private $nom_fournisseur;
	private $adresse;
	private $mail;
	private $numtel;
	private $image;
	function __construct($nom_fournisseur,$adresse,$mail,$numtel,$image)
	{
		$this->nom_fournisseur=$nom_fournisseur;
		$this->adresse=$adresse;
		$this->mail=$mail;
		$this->numtel=$numtel;
		$this->image=$image;
	}
	function getNom_fournisseur(){
		return $this->nom_fournisseur;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getmail(){
		return $this->mail;
	}
	function getnumtel(){
		return $this->numtel;
	}
	function getimage(){
		return $this->image;
	}
	function setNom_fournisseur($nom_fournisseur){
		 $this->nom_fournisseur=$nom_fournisseur;
	}
	function setadresse($adresse){
		 $this->adresse=$adresse;
	}
	function setmail($mail){
		 $this->mail=$mail;
	}
	function setnumtel($numtel){
		 $this->numtel=$numtel;
	}
	function setimage($image){
		 $this->image=$image;
	}

	
}




?>