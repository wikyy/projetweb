<?php
include "../config.php";
class panierc {









function ajouterpanier($panier){
      $sql="insert into panier(id_client) values ( :id_client)";
      $db = config::getConnexion();
      try{
        $req=$db->prepare($sql);
      
       
        $id_client=$panier->getId();
     
       
     
      $req->bindValue(':id_client',$id_client);
   
      
      
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
      
   }

  





function supprimerpanier($id_commande){
      $sql="DELETE FROM panier   where id_commande= :id_commande";
      $db = config::getConnexion();
        $req=$db->prepare($sql);
      $req->bindValue(':id_commande',$id_commande);
      try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
   }




function modifierpanier($panier,$id_commande){
    $sql="UPDATE panier SET id_client=:id_client, id_commande=:id_commande ";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{    
     
       $req=$db->prepare($sql);
      $id_commande=$panier->getIdc();
        $id_client=$panier->getId();
     
      
    $datas = array(':id_commande'=>$id_commande, ':id_client'=>$id_client,);
    $req->bindValue(':id_commande',$id_commande);
    $req->bindValue(':id_client',$id_client);
    
   
    
    
            $s=$req->execute();
    
    
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }








function afficherpanier($panier){
    echo "id_client: ".$panier->getId()."<br>";
    echo "id_commande: ".$panier->getIdc()."<br>";
    
  
    
  }


function afficherpaniers(){
      //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
      $sql="SElECT * From panier";
      $db = config::getConnexion();
      try{
      $liste=$db->query($sql);
      return $liste;
      }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   }

function recupererpanier($id_commande){
    $sql="SELECT * from panier where id_commande=$id_commande";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }

function recupererpanierid($id_client){
    $sql="SELECT * from panier where id_client=$id_client";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }








public function modifieretat($numero,$etatActuel)
  {
    $db=config::getConnexion();
    if ($etatActuel==1)
      $query=$db->prepare('UPDATE commande SET etat=0 WHERE numero=:id_commande');
    else
      $query=$db->prepare('UPDATE commande SET etat=1 WHERE numero=:id_commande');
    $query->bindValue(':id_commande',$_GET['n']);
    $query->execute();
  }


 function existi($id_client)
    {
        $db=config::getConnexion();
        $req=$db->prepare('SELECT * FROM panier WHERE id_client=:id_client');
        $req->bindValue(':id_client',$id_client);
        $req->execute();
        return $req->rowCount()!=0;
    }


function supprimerpanieru($id_client){
      $sql="DELETE FROM panier   where id_client= :id_client";
      $db = config::getConnexion();
        $req=$db->prepare($sql);
      $req->bindValue(':id_client',$id_client);
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