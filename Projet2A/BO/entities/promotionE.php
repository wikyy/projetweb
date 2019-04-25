<?PHP
class PromotionE{

	private $Nom;
	private $ID_produit;
	private $Pourcentage;
	private $Date_debut;
	private $Date_fin;
	function __construct($Nom,$ID_produit,$Pourcentage,$Date_debut,$Date_fin){
	
		$this->Nom=$Nom;
		$this->ID_produit=$ID_produit;
		$this->Pourcentage=$Pourcentage;
		$this->Date_debut=$Date_debut;
		$this->Date_fin=$Date_fin;
	}
	
	
	function getNom(){
		return $this->Nom;
	}
	function getID_produit(){
		return $this->ID_produit;
	}
	function getPourcentage(){
		return $this->Pourcentage;
	}
	function getDate_debut(){
		return $this->Date_debut;
	}
	function getDate_fin(){
		return $this->Date_fin;
	}

	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setID_produit($ID_produit){
		$this->ID_produit=$ID_produit;
	}
	function setPourcentage($Pourcentage){
		$this->Pourcentage;
	}
	function setDate_debut($Date_debut){
		$this->Date_debut=$Date_debut;
	}
	function setDate_fin($Date_fin){
		$this->Date_fin=$Date_fin;
	}
	
}

?>