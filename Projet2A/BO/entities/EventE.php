<?PHP
class EventE{

	
	private $ID_event;
	private $Nom;
	private $Date_debut;
	private $Date_fin;
	private $Description;
	private $Photo;
	private $Nbr_participant;
	private $Nbr_participantMax;


	function __construct($ID_event,$Nom,$Date_debut,$Date_fin,$Description,$Photo,$Nbr_participant,$Nbr_participantMax){
	
		$this->ID_event=$ID_event;
		$this->Nom=$Nom;
		$this->Date_debut=$Date_debut;
		$this->Date_fin=$Date_fin;
		$this->Description=$Description;
		$this->Photo=$Photo;
		$this->Nbr_participant=$Nbr_participant;
		$this->Nbr_participantMax=$Nbr_participantMax;


	}
	
	function getID_event(){
		return $this->ID_event;
	}
	function getNom(){
		return $this->Nom;
	}
	function getDate_debut(){
		return $this->Date_debut;
	}
	function getDate_fin(){
		return $this->Date_fin;
	}
	function getDescription(){
		return $this->Description;
	}
	function getPhoto(){
		return $this->Photo;
	}
	function getNbr_participant(){
		return $this->Nbr_participant;
	}
	function getNbr_participantMax(){
		return $this->Nbr_participantMax;
	}





	
	/*
	function setID_event($ID_event){
		$this->ID_event=$ID_event;
	}
	*/
	function setNom($Nom){
		$this->Nom=$Nom;
	}
	function setDate_debut($Date_debut){
		$this->Date_debut=$Date_debut;
	}
	function setDate_fin($Date_fin){
		$this->Date_fin=$Date_fin;
	}
	function setDescription($Description){
		$this->Description=$Description;
	}
	function setPhoto($Photo){
		$this->Photo=$Photo;
	}
	function setNbr_participant($Nbr_participant){
		$this->Nbr_participant=$Nbr_participant;
	}
	function setNbr_participantMax($Nbr_participantMax){
		$this->Nbr_participantMax=$Nbr_participantMax;
	}
	
}

?>