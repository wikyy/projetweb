<?php  
session_start();
    include "../../core/lignec.php";
include "../../entities/ligne.php";
    echo "usrname " . $_SESSION["l"] . ".<br>";
 $a=$_SESSION["l"] ;
 $t=0;

$db=config::getConnexion();
 $q = $db->query("SElECT * From ligne where id_commande=$a ");
$v= $q->rowCount();

$ligne1c=new lignec();
$listelignes=$ligne1c->afficherlignes($a);
//var_dump($listeEmployes->fetchAll());



foreach($listelignes as $row){
   ?>
   <tr>
      
  <td>le prix unitaire *quantite = </td>
   <td><?PHP echo $row['quantite']*$row['prix']; ?></td><br>
  
 <?php  
   $t= $row['prix']*$row['quantite']+$t;
 ?>
  
   </form>
   </td>
  
   <?PHP

}

  

$mailto = $_SESSION["m"] ;
    $mailSub = "ajout du commande valider";
    $mailMsg =  " a confirmer une commande le total de la commande est de ".$t." le nombre de produit est de ".$v;
    
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "ahmed.yahyaoui.1@esprit.tn";
   $mail ->Password = "nagato6p";
   $mail ->SetFrom("ahmed.yahyaoui.1@esprit.tn");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";


   }
   else
   {
       header('Location: supprimerpanieu.php');
   }
?>