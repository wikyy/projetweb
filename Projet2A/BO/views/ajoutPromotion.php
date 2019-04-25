<?PHP
include "../entities/promotionE.php";
include "../core/promotion.php";
//include "../config.php";


if (isset($_POST['Nom']) && isset($_POST['ID_produit']) && isset($_POST['Pourcentage']) && isset($_POST['Date_debut']) && isset($_POST['Date_fin'])){


	if(($_POST['Date_fin'])<($_POST['Date_debut'])){
		$alert = "La date de fin de la promotion doit être supérieure à la date son début";
		header('location:blank.php?alert='.$alert);
		return;
	}
	$promotion = new Promotion();
	$promotion->ajouterPromotion($_POST);
	$mailto ="mohamedjihed.kammoun@esprit.tn";
    $mailSub = "nouvelle promotion";
    $mailMsg = "vous avez une nouvelle promotion";
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
       echo "Mail Sent";
   }
	 


	//$p=new Promotion($_POST['Nom'],$_POST['ID_produit'],$_POST['Pourcentage'],$_POST['Date_debut'],$_POST['Date_fin']);
	//$promotion1=new Promotion();
	//$promotion1->ajouterPromotion($p);

header('location:afficherPromotion.php');
	
}else{
	echo "vérifier les champs";
}


?>