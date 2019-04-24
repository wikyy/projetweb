<?PHP
session_start();
include "../core/panierc.php";
$panierc=new panierc();
if (isset($_SESSION["user"])){
	$panierc->supprimerpanieru($_SESSION["user"]);
	header('Location: afficherligne.php');
}

?>