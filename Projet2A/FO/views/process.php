<?php 

include "../config.php";

session_start();
if(isset($_POST['User'])){

	$db=config::getConnexion();
	$uname=$_POST['User'];
	$password=$_POST['Pass'];	
	$_SESSION["User"]="$uname";
	$_SESSION["Pass"]="$password";	 
	//$result=("SELECT * FROM `users` WHERE `users`.`uname`='$uname' AND `users`.`password`='$password'");
	//$ss=$db->query($result);
	//foreach ($ss as $row) {
	//	$a=$row['uname'];
	//	$b=$row['password'];
		/*$c=$row['role'];
		$d=$row['id'];*/
    
  header('location: index.php');
        
}
?>