<?PHP
include "../entities/ligne.php";
include "../core/lignec.php";

//if (isset($_POST['id_produit']) and isset($_POST['id_commande']) and isset($_POST['prix']) and isset($_POST['quantite']) ){
$ligne1=new ligne($_POST['id_commande'],$_POST['id_produit'],$_POST['quantite'],$_POST['prix']) ;
//Partie2k=1;
$id_produit=$_POST['id_produit'];
$lignec1=new lignec();
$lignec=new lignec();
    $resulta=$lignec1->recupererligne($_POST['id_produit']);
   $s=0;
if(!$lignec1->exist($_POST['id_produit'])){


//Partie3
$ligne1c=new lignec();
$ligne1c->ajouterligne($ligne1);

}
else {
	
	$lignec1->modifierquantite($_POST['id_produit']) ;
}
header('Location: shop.php');
	
//}//else{
//	echo "vérifier les champs";
//}
//*/

?>