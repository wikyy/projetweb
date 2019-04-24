<?php
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_POST['nom']) and isset($_POST['sujet']) and isset($_POST['num']) and isset($_POST['message']) and (!preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# " , $_POST['num'] )) and ( !preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['sujet'] ) ))
{

$recla=new reclamation($_POST['nom'],$_POST['sujet'],$_POST['num'],$_POST['message']);

$r=new reclamationss();
$r->ajoutreclamation($recla);
header('Location:contact.php');
echo " demande envoye";
}else{
	echo "vérifier les champss";
}
?>