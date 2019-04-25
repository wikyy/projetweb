<?PHP
include "../config.php";
class EmployeC 
{
function afficherEmploye ($employe){
		echo "num: ".$employe->getNum()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "address: ".$employe->getAddress()."<br>";
		echo "Prénom: ".$employe->getMsg()."<br>";
	
	
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.num= a.num";
		$sql="SElECT * From commentaire";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($num){
		$sql="DELETE FROM commentaire where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($employe,$numn){
		$sql="UPDATE commentaire SET  num=:num, nom=:nom, address=:address,msg=:msg WHERE num=:numn";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
	 $req=$db->prepare($sql);
	 		$num=$employe['num'];
			$nom=$employe['nom'];
	        $address=$employe['address'];
	        $msg=$employe['msg'];
	        
       
		
        
		$datas = array(':numn'=>$numn, ':num'=>$num, ':nom'=>$nom, ':address'=>$address,':msg'=>$msg);
		$req->bindValue(':numn',$numn);
		$req->bindValue(':num',$num);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':address',$address);
		$req->bindValue(':msg',$msg);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($num){
		$sql="SELECT * from commentaire where num=$num";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($nom){
		$sql="SELECT * from commentaire where nomm=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
} ?>
