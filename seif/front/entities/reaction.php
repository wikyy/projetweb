<?PHP
class Reaction{
	private $id;
	private $react;
	private $user;
	function __construct($id,$react,$user){
		$this->id=$id;
		$this->react=$react;
		$this->user=$user;
	}
	
	function getId(){
		return $this->id;
	}
	function getReact(){
		return $this->react;
	}
	function getUser(){
		return $this->user;
	}
	
	

	function setReact($react){
		$this->react=$react;
	}
	function setUser($user){
		$this->user;
	}
	
	
}

?>