<?PHP
include "../../entities/fournisseur.php";
include "../../core/fournisseurC.php";

$fournisseur1C=new fournisseurC();
   $fournisseur1C->supprimerfournisseur($_GET['ID']);
   header('Location: afficherfournisseur.php');

?>