<?php
include '../config.php';
class credits {
	function affichercredit($credit)
	   {
		echo "nom: ".$credit->getNom()."<br>";
		echo "marque: ".$credit->getmarque()."<br>";
		echo "montant: ".$credit->getmontant()."<br>";
	}
function ajoutcredit($credit)
{
$sql="insert into credit (nom,marque,montant) values (:nom,:marque,:montant)";
$db=config::getConnexion();
/*$query=$db->prepare($sql);
$query->bindValue(':nom',$reclamations->getNom());
$query->bindValue(':sujet',$reclamations->getSujet());
$query->bindValue(':num',$reclamations->getNum());
$query->bindValue(':message',$reclamations->getMsg());	
$query->execute();*/
		try{
        $req=$db->prepare($sql);
		
        $nom=$credit->getNom();
        $marque=$credit->getmarque();
        $montant=$credit->getmontant();			
		$req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':montant',$montant);		
            $req->execute();
           
}
        
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
}}
		function affichercredits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From credit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}	
	function supprimercredits(){
		$sql="DELETE FROM credit ";
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

	
function modifiercredit($credit,$nom){
		$sql="UPDATE `credit` SET  `nom`=:nom,`marque`=:marque,`montant`=:montant WHERE `nom`=:nom" ;
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nom=$credit->getNom();
        $marque=$credit->getmarque();
        $montant=$credit->getmontant();
		$datas = array(':nom'=>$nom,':marque'=>$marque,':montant'=>$montant);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':marque',$marque);
		$req->bindValue(':montant',$montant);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	/*function calcul($credit,$nom)
{
  $a=$_POST['nmontant'];
  $sql="update credit set montant+$a where nom=$nom";
  $db = config::getConnexion();
  try{
    $req=$db->prepare($sql);
    $req->execute();
    $montant=$credit->getmontant();
    $req->bindValue(':montant',$montant); 
    
    header('Location: blank.php');
  }
  catch (exeption $e){
  die('erruer:'.$e->getMessage());
 }
}*/
		function recuperercredit($nom){
		$sql="SELECT * from credit where nom=$nom";
		}
       /* catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }*/
	//}

function calcul($montant){
   //$a=$_POST['nmontant'];


    $sql= 'SELECT * From credit WHERE montant=$montant';   

  }
	
/*function calcul($montant)
  {
  $montant +=$_POST['nmontant'];
  //$sous = $a-$b;
  //return array($add, $sous, $multi, $div);
  //}
//list($add, $sous, $multi, $div) = calcul(30, 6);
// affiche le resultat
//echo $add . '<br />';
//echo $sous . '<br />';
//echo $multi . '<br />';
//echo $div . '<br> /';
}*/
}
?>