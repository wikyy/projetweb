<?PHP
session_start();
include "../entities/panier.php";
include "../core/panierc.php";


//Partie2
echo "5";

$panier1=new panier( $_SESSION["pass"],$_SESSION["user"])  ;
//$panier1=new panier($_POST['id_client'],$_POST['id_commande']) ;
var_dump($panier1);
$panier1c=new panierc();

   $panier1c->recupererpanierid($_SESSION["user"]);
if(!$panier1c->existi($_SESSION["user"]))
{



$panier1c=new panierc();


$panier1c->ajouterpanier($panier1);



}

else{
echo "ok";
}
//header('Location: afficherligne.php');
	


//*/

?>