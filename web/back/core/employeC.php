<?php
include '../config.php';
class reclamationss {
	function afficherreclamation($reclamation)
	   {
		echo "nom: ".$reclamation->getNom()."<br>";
		echo "sujet: ".$reclamation->getSujet()."<br>";
		echo "num: ".$reclamation->getNum()."<br>";
		echo "message: ".$reclamation->getMsg()."<br>";
	}
function ajoutreclamation($reclamation)
{
$sql="insert into reclamations (nom,sujet,num,message) values (:nom,:sujet,:num,:message)";
$db=config::getConnexion();
/*$query=$db->prepare($sql);
$query->bindValue(':nom',$reclamations->getNom());
$query->bindValue(':sujet',$reclamations->getSujet());
$query->bindValue(':num',$reclamations->getNum());
$query->bindValue(':message',$reclamations->getMsg());	
$query->execute();*/
		try{
        $req=$db->prepare($sql);
		
        $nom=$reclamation->getNom();
        $sujet=$reclamation->getSujet();
        $num=$reclamation->getNum();
		$message=$reclamation->getMsg();			
		$req->bindValue(':nom',$nom);
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':num',$num);
		$req->bindValue(':message',$message);		
            $req->execute();
           
}
        
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
}}
		function afficherreclamations(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}	
	function supprimerreclamations(){
		$sql="DELETE FROM reclamations ";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>