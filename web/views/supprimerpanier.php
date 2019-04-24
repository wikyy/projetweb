<?PHP
include "../core/panierc.php";
$panierc=new panierc();
if (isset($_POST["id_commande"])){
	$panierc->supprimerpanier($_POST["id_commande"]);
	header('Location: afficherpanier.php');
}

?>