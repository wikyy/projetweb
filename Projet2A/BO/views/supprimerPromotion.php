<?PHP
include "../core/Promotion.php";
$promotion=new Promotion();
if (isset($_POST["Nom"])){
	
	$promotion->supprimerPromotion($_POST["Nom"]);
	header('Location: afficherPromotion.php');
}

?>