<?php
include '../entities/commentaire.php';
include '../core/commentaireC.php';
if(isset($_POST['nom']) and isset($_POST['address']) and isset($_POST['msg']))
	{
		//traitement des donnees	
		//1_instance
		$e=new Employe ($_POST['num'],$_POST['nom'],$_POST['address'],$_POST['msg']);
		//2_inserer DB
		$ecore=new EmployeC();
		$ecore->ajouterEmploye($e);
		header('location:single.php');
	}
else
	{
		echo "verifier les champs";
	}

?>
