<?PHP
class panier {
	private $id_client;
	
	private $id_commande;
	private $prix ;
	private $etat;
	function __construct($id_commande,$id_client){
		$this->id_commande=$id_commande;
		$this->id_client=$id_client;
	
		
	}
	
	function getIdc(){
		return $this->id_commande;
	}
	function getId(){
		return $this->id_client;
	}
	function getprix(){
		return $this->prix;
	}
	function getetat(){
		return $this->etat;
	}

		function setIdc($id_commande){
		$this->id_commande=$id_commande;
	}
	function setprix($peix){
		$this->prix=$prix;
	}
	function setetat($etat){
		$this->etat=$etat;
	}
	function setId($id_client){
		$this->id_produi=$id_client;
	
	
	
}
}
?>