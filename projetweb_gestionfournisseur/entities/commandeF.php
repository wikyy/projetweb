<?PHP
class commandeF{
	private $nom_commandeF;
	private $id_produit;
	private $id_fournisseur;

	function __construct($nom_commandeF,$id_produit,$id_fournisseur)
	{
		$this->nom_commandeF=$nom_commandeF;
		$this->id_produit=$id_produit;
		$this->id_fournisseur=$id_fournisseur;

	}
	function getnom_commandeF(){
		return $this->nom_commandeF;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	function getid_fournisseur(){
		return $this->id_fournisseur;
	}

	function setnom_commandeF($nom_commandeF){
		 $this->nom_commandeF=$nom_commandeF;
	}
	function setid_produit($id_produit){
		 $this->id_produit=$id_produit;
	}
	function setid_fournisseur($id_fournisseur){
		 $this->id_fournisseur=$id_fournisseur;
	}


	
}




?>