<?PHP
include "../config.php";
class 	Event {

	
	function ajouterEvent($Event){
		$sql="INSERT INTO event (Nom,Date_debut,Date_fin,Description,Photo,Nbr_participantMax) 
			values ( :Nom, :Date_debut, :Date_fin, :Description, :Photo, :Nbr_participantMax)";
		
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
		//$req->bindValue(':ID_event',$Event['ID_event']);
		$req->bindValue(':Nom',$Event['Nom']);
		$req->bindValue(':Date_debut',$Event['Date_debut']);
		$req->bindValue(':Date_fin',$Event['Date_fin']);
		$req->bindValue(':Description',$Event['Description']);
		$req->bindValue(':Photo',$Event['Photo']);
		//$req->bindValue(':Nbr_participant',$Event['Nbr_participant']);
		$req->bindValue(':Nbr_participantMax',$Event['Nbr_participantMax']);
        $req->execute();

	}


function afficherEvent ($Event){
		
		echo "Nom: ".$Event->getNom()."<br>";
		echo "Date_debut: ".$Event->getDate_debut()."<br>";
		echo "Date_debut: ".$Event->getDate_fin()."<br>";
		echo "Description: ".$Event->getDescription()."<br>";
		echo "Photo: ".$Event->getPhoto()."<br>";
		echo "Nbr_participant: ".$Event->getNbr_participant()."<br>";
		echo "Nbr_participantMax: ".$Event->getNbr_participantMax()."<br>";
	}
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From event ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerEvent($Nom){
		$sql="DELETE FROM event where Nom= :Nom";
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
	function modifierEvent($event, $nomInitial){
		$sql="UPDATE event SET Nom=:Nom, Date_debut=:Date_debut , Date_fin=:Date_fin, Description=:Description , Photo=:Photo , Nbr_participant=:Nbr_participant, Nbr_participantMax=:Nbr_participantMax WHERE Nom=:nom_initial";
		
		var_dump($event);
		echo $nomInitial;
		//exit;

		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
	        $req=$db->prepare($sql);
			//$ID_promo=$promotion->getID_promo();
	        $Nom=$event['Nom'];
	        $Date_debut=$event['Date_debut'];
	        $Date_fin=$event['Date_fin'];
	        $Description=$event['Description'];
	        $Photo=$event['Photo'];
	        $Nbr_participant=$event['Nbr_participant'];
	        $Nbr_participantMax=$event['Nbr_participantMax'];
       
	        
	        /*
			$datas = array(':Nomm'=>$Nomm, ':Nom'=>$Nom, ':ID_promo'=>$ID_promo,':ID_produit'=>$ID_produit,':Pourentage'=>$Pourentage,':Date_debut'=>$Date_debut,
							':Date_fin'=>$Date_fin);
							*/
			$req->bindValue(':Nom',$Nom);
			$req->bindValue(':nom_initial',$nomInitial);
			$req->bindValue(':Date_debut',$Date_debut);
			$req->bindValue(':Date_fin',$Date_fin);
			$req->bindValue(':Description',$Description);
			$req->bindValue(':Photo',$Photo);
			$req->bindValue(':Nbr_participant',$Nbr_participant);
			$req->bindValue(':Nbr_participantMax',$Nbr_participantMax);	
			
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
	
	function recupererEvent($Nom){
		$sql="SELECT * from event where Nom=$Nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function reserverEvent($event){
		$sql="UPDATE event SET  Nbr_participant=Nbr_participant+1 WHERE ID_event=:nom_initial";
		
		//exit;

		$db = config::getConnexion();
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
	        $req=$db->prepare($sql);
			//$ID_promo=$promotion->getID_promo();
	      
       
	        
	        /*
			$datas = array(':Nomm'=>$Nomm, ':Nom'=>$Nom, ':ID_promo'=>$ID_promo,':ID_produit'=>$ID_produit,':Pourentage'=>$Pourentage,':Date_debut'=>$Date_debut,
							':Date_fin'=>$Date_fin);
							*/
			$req->bindValue(':nom_initial',$event);
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










}
?>

	