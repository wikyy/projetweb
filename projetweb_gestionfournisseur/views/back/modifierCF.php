<?PHP
include "../../entities/commandeF.php";
include "../../core/commandeFC.php";


if(isset($_POST["produit"]) && !empty($_POST["fournisseur"]))
{
    $commandeF1=new commandeF($_POST['nom_commandeF'],$_POST['produit'],$_POST['fournisseur']);
    $commandeF1C=new commandeFC();
   $commandeF1C->modifiercommandeF($commandeF1,$_POST['id_init']);
  header('Location: affichercommandeF.php');
}
else
{
   echo 'erreur';
}
?>