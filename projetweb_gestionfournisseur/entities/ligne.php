<?PHP
class ligne{
	private $id_commande;
	private $id_produit;
	private $quantite;
	private $prix;
	
	function __construct($id_commande,$id_produit,$quantite,$prix){
		$this->id_commande=$id_commande;
		$this->id_produit=$id_produit;
		$this->quantite=$quantite;
		$this->prix=$prix;
		
	}
	
	function getIdc(){
		return $this->id_commande;
	}
	function getIdp(){
		return $this->id_produit;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getPrix(){
		return $this->prix;
	}
	

	function setNom($quantite){
		$this->quantite=$quantite;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setIdc($id_commande){
		$this->id_commande=$id_commande;
	}
	function setIdp($id_produit){
		$this->id_produit=$id_produit;
	}
	
}

?>