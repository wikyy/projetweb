<?PHP
require_once "config2.php";
class fournisseurC {
	function ajouterfournisseur($fournisseur){
		$sql="insert into fournisseur (nom_fournisseur,adresse,mail,numtel,image) values ( :nom_fournisseur,:adresse,:mail,:numtel,:image)";
		$db = config2::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom_fournisseur=$fournisseur->getNom_fournisseur();
        $adresse=$fournisseur->getadresse();
        $mail=$fournisseur->getmail();
        $numtel=$fournisseur->getnumtel();
        $image=$fournisseur->getimage();

		$req->bindValue(':nom_fournisseur',$nom_fournisseur);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':numtel',$numtel);
		$req->bindValue(':image',$image);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherfournisseurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fournisseur";

		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerfournisseur($id_fournisseur){
		$sql="DELETE FROM fournisseur where id_fournisseur= :id_fournisseur";
		$db = config2::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_fournisseur',$id_fournisseur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierfournisseur($fournisseur,$id_fournisseur){
		$sql="UPDATE fournisseur SET  nom_fournisseur=:nom_fournisseur,adresse=:adresse,mail=:mail,numtel=:numtel,image=:image WHERE id_fournisseur=:id_fournisseur";
		
		$db = config2::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom_fournisseur=$fournisseur->getNom_fournisseur();
        $adresse=$fournisseur->getadresse();
        $mail=$fournisseur->getmail();
        $numtel=$fournisseur->getnumtel();
        $image=$fournisseur->getimage();


		$datas = array( ':id_fournisseur'=>$id_fournisseur, ':nom_fournisseur'=>$nom_fournisseur,':adresse'=>$adresse,':mail'=>$mail,':numtel'=>$numtel,':image'=>$image);
		$req->bindValue(':id_fournisseur',$id_fournisseur);
		$req->bindValue(':nom_fournisseur',$nom_fournisseur);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':numtel',$numtel);
		$req->bindValue(':image',$image);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfournisseur($id_fournisseur){
		$sql="SELECT * from fournisseur where id_fournisseur=$id_fournisseur";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListefournisseur($nom_fournisseur){
		$sql="SELECT * from fournisseur where nom_fournisseur=$nom_fournisseur";
		$db = config2::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherProduits(){
		$sql="SElECT * From produit";
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