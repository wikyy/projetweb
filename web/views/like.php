
<?PHP
include "../core/commentaireC.php";
$employeC=new EmployeC();
if (isset($_POST["num"])){
	$employeC->likeEmploye($_POST["num"]);
	header('Location: single.php');
}

?>