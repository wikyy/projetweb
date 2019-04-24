<?php
include '../entities/reaction.php';
include '../core/reactionC.php';




		//traitement des donnees	
		//1_instance

		$e=new Reaction ($_POST['id'],$_POST['react'],$_POST['user']);
		//2_inserer DB
		$ecore=new ReactionC();
		$ecore->ajouterReaction($e);
		header('location:single.php');
	


?>
