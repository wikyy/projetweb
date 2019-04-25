<?PHP
include "../entities/EventE.php";
include "../core/Event.php";
//include "../config.php";


if ( isset($_POST['Nom']) && isset($_POST['Description']) && isset($_POST['Photo']) && isset($_POST['Date_debut']) && isset($_POST['Date_fin']) 
	&& isset($_POST['Nbr_participantMax'])){


	if(($_POST['Date_fin'])<($_POST['Date_debut'])){
		$alert = "La date de fin d evenement doit être supérieure à la date son début";
		header('location:blank2.html?alert='.$alert);
		return;
	}

	$event = new Event();
	$event->ajouterEvent($_POST);

	//$p=new Promotion($_POST['Nom'],$_POST['ID_produit'],$_POST['Pourcentage'],$_POST['Date_debut'],$_POST['Date_fin']);
	//$promotion1=new Promotion();
	//$promotion1->ajouterPromotion($p);

header('location:afficherEvent.php');
	
}else{
	echo "vérifier les champs";
}


?>