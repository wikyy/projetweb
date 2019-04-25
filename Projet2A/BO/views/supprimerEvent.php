<?PHP
include "../core/Event.php";
$promotion=new Event();
if (isset($_POST["Nom"])){
	$promotion->supprimerEvent($_POST["Nom"]);
	header('Location: afficherEvent.php');
}

?>