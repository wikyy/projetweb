<?PHP
include "../../entities/commandeF.php";
include "../../core/commandeFC.php";


$commandeF1C=new commandeFC();
   $commandeF1C->supprimercommandeF($_GET['ID']);
  header('Location: affichercommandeF.php');

?>