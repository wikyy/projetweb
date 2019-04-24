<?php
include '../config.php';
include '../entities/credit.php'
if(isset($_POST['nom']) && isset($_POST['marque']) && isset($_POST['montant'])&& isset($_POST['id']))
{
	$db=config::getconnexion();
	$nom=$_POST['nom'];
	$marque=$_POST['marque'];
	$montant=$_POST['montant'];
	
	$id=$_POST['id'];
	$req="UPDATE credit SET nom = '$nom', marque = '$marque', montant = '$montant' WHERE credit.`id` = $id";
	$db->exec($req);
	
	header('Location: http://localhost/Projet2A/BO/views/grids.php');
}