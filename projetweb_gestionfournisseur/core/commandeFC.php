<?PHP
require_once "config2.php";
class commandeFC {
	function ajoutercommandeF($commandeF){
		$sql="insert into commandeF (nom,id_produit,id_fournisseur) values ( :nom_commandeF,:id_produit,:id_fournisseur)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_commandeF=$commandeF->getNom_commandeF();
        $id_produit=$commandeF->getid_produit();
        $id_fournisseur=$commandeF->getid_fournisseur();


		$req->bindValue(':nom_commandeF',$nom_commandeF);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':id_fournisseur',$id_fournisseur);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandeFs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From commandeF";

		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimercommandeF($id_commandeF){
		$sql="DELETE FROM commandeF where id= :id_commandeF";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commandeF',$id_commandeF);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommandeF($commandeF,$id_commandeF){
		$sql="UPDATE commandeF SET  nom=:nom_commandeF,id_produit=:id_produit,id_fournisseur=:id_fournisseur WHERE id=:id_commandeF";
		
		$db = config2::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom_commandeF=$commandeF->getNom_commandeF();
        $id_produit=$commandeF->getid_produit();
        $id_fournisseur=$commandeF->getid_fournisseur();



		$datas = array( ':nom_commandeF'=>$nom_commandeF,':id_produit'=>$id_produit,':id_fournisseur'=>$id_fournisseur);
		$req->bindValue(':id_commandeF',$id_commandeF);
		$req->bindValue(':nom_commandeF',$nom_commandeF);
		$req->bindValue(':id_produit',$id_produit);
		$req->bindValue(':id_fournisseur',$id_fournisseur);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommandeF($id_commandeF){
		$sql="SELECT * from commandeF where id=$id_commandeF";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommandeF($nom_commandeF){
		$sql="SELECT * from commandeF where nom_commandeF=$nom_commandeF";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>