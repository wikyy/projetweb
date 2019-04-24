<?php
include "../entities/credit.php";
include "../core/creditC.php";
if (isset($_POST['nom']) and isset($_POST['marque']) and isset($_POST['montant'])){

$recla=new credit($_POST['nom'],$_POST['marque'],$_POST['montant']);

$r=new credits();
$r->ajoutcredit($recla);
header('Location:blank.php');
	echo " sauvgarder";
}else{
	echo "vérifier les champss";
}
?>