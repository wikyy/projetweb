<?PHP
class Employe{
	private $num;
	private $nom;
	private $address;
	private $msg;
	function __construct($num,$nom,$address,$msg){
		$this->num=$num;
		$this->nom=$nom;
		$this->address=$address;
		$this->msg=$msg;
	}
	
	function getNum(){
		return $this->num;
	}
	function getNom(){
		return $this->nom;
	}
	function getAddress(){
		return $this->address;
	}
	function getMsg(){
		return $this->msg;
	}
	function getCount(){
		return $this->count;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($address){
		$this->address;
	}
	function setMsg($msg){
		$this->msg=$msg;
	}
	
}

?>