<?php

include "../config.php";
$db=config::getConnexion();
	function rechercherclient($nom){
		$sql="SELECT * from reclamation where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
	?>