<?php 
include "dbconfig.php";

class User{
	private $login;
    private $pwd;
	private $role;
	private $mail;
    public $conn;	

	public function __construct($login,$pwd,$conn,$mail)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$this->mail=$mail;

		   $c =new Database();
		$this->conn=$c->connexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$login,$pwd)
	{
		$req="select * from users where user_name='$login' && user_pass='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>