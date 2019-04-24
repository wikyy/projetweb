<?php 
session_start();


if(isset($_POST['User'])){
    
    $uname=$_POST['User'];
    $password=$_POST['Pass'];
     
   $_SESSION["user"] = " $uname";
$_SESSION["pass"] = " $password";

   // $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
    if($uname="amin")
  header('location:shop.php');
else
	 header('location:index.php');
        
}

?>