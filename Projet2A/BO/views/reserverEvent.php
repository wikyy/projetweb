<?php 

include "../entities/EventE.php";
include "../core/Event.php";
    $id=$_GET['id'];
	$eventCore = new Event();
	$eventCore->reserverEvent($id);

	header('Location: products.php');
	

?>