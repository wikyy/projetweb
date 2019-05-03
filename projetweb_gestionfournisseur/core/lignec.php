<?php
include "../../config.php";

class lignec {






function ajouterligne($ligne){
      $sql="insert into ligne(id_commande,id_produit,quantite,prix) values (:id_commande, :id_produit,:quantite,:prix)";
      $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
      
        $id_commande=$ligne->getIdc();
        $id_produit=$ligne->getIdp();
        $prix=$ligne->getPrix();
        $quantite=$ligne->getQuantite();
       
      $req->bindValue(':id_commande',$id_commande);
      $req->bindValue(':id_produit',$id_produit);
    
      $req->bindValue(':quantite',$quantite);
        $req->bindValue(':prix',$prix);
      
      
            $req->execute();
                 
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
        }


function afficherligne($ligne){
		echo "id: ".$ligne->getIdp()."<br>";
		echo "id: ".$ligne->getIdc()."<br>";
		
		echo "quantite: ".$ligne->getQuantite()."<br>";
		echo "prix: ".$ligne->getPrix()."<br>";
		
	}

     
    function afficherlignes($a){
    //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
    $sql="SElECT * From ligne where id_commande=$a  ";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        } 
  }


function supprimerligne($id_produit){
    $sql="DELETE FROM ligne where id_produit= :id_produit";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':id_produit',$id_produit);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

function modifierligne($ligne,$id_produit){
    $sql="UPDATE ligne SET id_commande=:id_commande, id_produit=:id_produit,prix=:prix,quantite=:quantite WHERE id_produit=:id_produit";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{    
        $req=$db->prepare($sql);
         $id_commande=$ligne->getIdc();
    $id_produit=$ligne->getIdp();
       
        $prix=$ligne->getPrix();
    $quantite=$ligne->getQuantite();
        
    $datas = array( ':id_commande'=>$id_commande,':id_produit'=>$id_produit, ':prix'=>$prix,':quantite'=>$quantite);
   $req->bindValue(':id_commande',$id_commande);
 
    $req->bindValue(':id_produit',$id_produit);
    
    $req->bindValue(':prix',$prix);
    $req->bindValue(':quantite',$quantite);
  
    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }}
    
  
function modifierquantite($id_produit){
    $sql="UPDATE ligne SET quantite = quantite + 1 where id_produit= :id_produit";
    $db = config::getConnexion();
        $req=$db->prepare($sql);

    $req->bindValue(':id_produit',$id_produit);
   
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  










function recupererligne1($id_produit,$a){
    $sql="SELECT * from ligne where id_produit=$id_produit and id_commande=$a";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }






function recupererligne($id_produit){
    $sql="SELECT * from ligne where id_produit=$id_produit";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
   

 function exist($id_produit)
    {
        $db=config::getConnexion();
        $req=$db->prepare('SELECT * FROM ligne WHERE id_produit=:id_produit');
        $req->bindValue(':id_produit',$id_produit);
        $req->execute();
        return $req->rowCount()!=0;
    }

 function exists($id_commande)
    {
        $db=config::getConnexion();
        $req=$db->prepare('SELECT * FROM ligne WHERE id_commande=:id_commande');
        $req->bindValue(':id_commande',$id_commande);
        $req->execute();
        return $req->rowCount()!=0;
    }




function calculenbproduit()

 { $db=config::getConnexion();
 $q = $db->query("SELECT * FROM ligne");
echo $q->rowCount();




}







function participer($id_commande)
{
   //0sql_connect("localhost","root","") or die("Impossible de se connecter");;
//mysql_select_db("projetweb") or die("pas possible de trouver la base");

//$result = mysql_query("SELECT SUM(prix) FROM ligne");
//$nblignes = mysql_numrows($result);
return $m ;
//for($i=0;$i<$nblignes;$i=$i+1){
 //$m =  mysql_result($result,$i,"user_email");
//echo "bonjourr";


}


   }







?>