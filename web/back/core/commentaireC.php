<?PHP
include "../config.php";
class EmployeC 
{
	function afficherEmployes()
		{
			$sql="SELECT * FROM commentaire	order by count desc";
			$db=config::getConnexion();
			$liste=$db->query($sql);
			return $liste;
        }	
	function ajouterEmploye($employe)
		{
			$sql="INSERT INTO commentaire (num,nom,address,msg) 
			value(:num,:nom,:address,:msg)";
			$bd=config::getConnexion();
			$query=$bd->prepare($sql);
			$query->bindvalue(':num',$employe->getNum());
			$query->bindvalue(':nom',$employe->getNom());
			$query->bindvalue(':address',$employe->getAddress());
			$query->bindvalue(':msg',$employe->getMsg());
			
			$query->execute();
		}	
function likeEmploye($num){
		$sql="UPDATE commentaire SET count = count + 1 where num= :num";
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
}

?>