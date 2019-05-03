<?PHP
session_start();
include "../../entities/panier.php";
include "../../core/panierc.php";


//Partie2


$panier1=new panier( $_SESSION["l"],$_SESSION["l"])  ;
//$panier1=new panier($_POST['id_client'],$_POST['id_commande']) ;
var_dump($panier1);
$panier1c=new panierc();

   $panier1c->recupererpanierid($_SESSION["l"]);
if(!$panier1c->existi($_SESSION["l"]))
{



$panier1c=new panierc();


$panier1c->ajouterpanier($panier1);



}

else{
echo "vous avez une commande encore";
}
header('Location: shop.php');
	


//*/

?>