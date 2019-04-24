<?php
include "../config.php";
$db=config::getConnexion();
$req='DELETE FROM credit WHERE `id`=:id';
$pdo=$db->prepare($req);
$pdo->bindvalue(':id', $_GET['id'], PDO::PARAM_INT);
$exe=$pdo->execute();
if($exe)
{
	header('Location: http://localhost/Projet2A/BO/views/blank.php');
}
else echo "essaie encore";
?>