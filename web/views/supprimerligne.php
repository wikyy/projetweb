<?PHP
include "../core/lignec.php";
$lignec=new lignec();
if (isset($_POST["id_produit"])){
	$lignec->supprimerligne($_POST["id_produit"]);
	header('Location: afficherligne.php');
}

?>