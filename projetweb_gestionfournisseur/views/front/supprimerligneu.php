<?PHP
session_start();
include "../../core/lignec.php";
$lignec=new lignec();
if (isset($_SESSION["l"])){
	$lignec->supprimerligneu($_SESSION["l"]);
	header('Location: afficherligne.php');

}

?>
