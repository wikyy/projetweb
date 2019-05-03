<?PHP
session_start();
include "../../entities/ligne.php";
include "../../core/lignec.php";
 var_dump($_GET['id_produit']) ;


//if (isset($_POST['id_produit']) and isset($_POST['id_commande']) and isset($_POST['prix']) and isset($_POST['quantite']) ){
if(isset($_SESSION["l"])){
$ligne1=new ligne( $_SESSION["l"],$_GET['id_produit'],$_GET['quantite'],$_GET['prix']) ;
//Partie2k=1;
$id_produit=$_GET['id_produit'];
var_dump($ligne1);
$lignec1=new lignec();
$lignec=new lignec();
$ligne1c=new lignec();
$lignec2=new lignec();
    $resulta=$lignec1->recupererligne($_GET['id_produit']);
   
   if(!$lignec1->exists($_SESSION["l"],$_GET['id_produit'])){

$lignec1->ajouterligne($ligne1);}
else
{




if(!$lignec1->exist($_GET['id_produit'])){



$ligne1c->ajouterligne($ligne1);

}
else {
	
	$lignec1->modifierquantite($_GET['id_produit'],$_SESSION["l"]) ;
}
}
header('Location: shop.php');}

	
else{
echo " vous devez vous connecter pour pouvoir commander";}
//*/

?>