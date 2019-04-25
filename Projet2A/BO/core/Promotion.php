<?PHP
include "../config.php";
class 	Promotion {

	
	function ajouterPromotion($Promotion){
		$sql="INSERT INTO promotion (Nom,ID_produit,Pourcentage,Date_debut,Date_fin) values (:Nom, :ID_produit, :Pourcentage, :Date_debut, :Date_fin)";
		
/*
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':Nom',$Promotion->getNom());
		$req->bindValue(':ID_produit',$Promotion->getID_produit());
		$req->bindValue(':Pourcentage',$Promotion->getPourcentage());
		$req->bindValue(':Date_debut',$Promotion->getDate_debut());
		$req->bindValue(':Date_fin',$Promotion->getDate_fin());
            $req->execute();
*/
        $db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':Nom',$Promotion['Nom']);
		$req->bindValue(':ID_produit',$Promotion['ID_produit']);
		$req->bindValue(':Pourcentage',$Promotion['Pourcentage']);
		$req->bindValue(':Date_debut',$Promotion['Date_debut']);
		$req->bindValue(':Date_fin',$Promotion['Date_fin']);
        $req->execute();

	}


function afficherPromotion ($Promotion){
		
		echo "Nom: ".$Promotion->getNom()."<br>";
		echo "Pourcentage: ".$Promotion->getPourcentage()."<br>";
		echo "ID_produit: ".$Promotion->getID_produit()."<br>";
		echo "Date_debut: ".$Promotion->getDate_debut()."<br>";
		echo "Date_debut: ".$Promotion->getDate_fin()."<br>";
	}
	function afficherPromotions(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From promotion ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


function supprimerPromotion($Nom){
		$sql="DELETE FROM promotion where Nom= :Nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Nom',$Nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($promotion, $nomInitial){
		$sql="UPDATE promotion SET Nom=:Nom, ID_produit=:ID_produit, Pourcentage=:Pourcentage, Date_debut=:Date_debut,Date_fin=:Date_fin WHERE Nom=:nom_initial";
		
		var_dump($promotion);
		echo $nomInitial;
		//exit;

		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
	        $req=$db->prepare($sql);
			//$ID_promo=$promotion->getID_promo();
	        $Nom=$promotion['Nom'];
	        $ID_produit=$promotion['ID_produit'];
	        $Pourcentage=$promotion['Pourcentage'];
	        $Date_debut=$promotion['Date_debut'];
	        $Date_fin=$promotion['Date_fin'];
	        /*
			$datas = array(':Nomm'=>$Nomm, ':Nom'=>$Nom, ':ID_promo'=>$ID_promo,':ID_produit'=>$ID_produit,':Pourentage'=>$Pourentage,':Date_debut'=>$Date_debut,
							':Date_fin'=>$Date_fin);
							*/
			$req->bindValue(':Nom',$Nom);
			$req->bindValue(':nom_initial',$nomInitial);
			$req->bindValue(':ID_produit',$ID_produit);
			$req->bindValue(':Pourcentage',$Pourcentage);
			$req->bindValue(':Date_debut',$Date_debut);
			$req->bindValue(':Date_fin',$Date_fin);		
			
	        $s=$req->execute();
	        echo "executed";
	        //exit;
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   			echo " Les datas : " ;
  			print_r($datas);
  			exit;
        }
	

	}



	function recupererPromotion($Nom){
		$sql="SELECT * from promotion where Nom=$Nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}



	function calculerNouveauPrix($ID_produit){
		$reduction = 0;


		$sql= 'SELECT * From promotion WHERE ID_produit='.$ID_produit;
		$db = config::getConnexion();
		$result=$db->query($sql);
		foreach ($result as $row) {
			if(($row['Date_debut'] <= date('Y-m-d')) && ($row['Date_fin'] >= date('Y-m-d'))){
				$reduction = $row['Pourcentage'];
			}
		}
		
		$sql1='SElECT * From produit WHERE ID_produit='.$ID_produit;
		$db1 = config::getConnexion();
		$result1=$db->query($sql1);
		foreach ($result1 as $row1) {
			$prixOrigin = $row1['prix'];
			$prixFinal = $prixOrigin * (100-$reduction)/100;
		}
		
		return $prixFinal;	 

	}


}
?>


	