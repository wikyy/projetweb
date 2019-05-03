<?PHP
include "../../entities/fournisseur.php";
include "../../core/fournisseurC.php";

if (isset($_FILES['image']))
{
$file_name =$_FILES['image']['name'];
$file_tem_loc= $_FILES['image']['tmp_name'];
if ($file_tem_loc=='')
{
   $file_store="upload/unknown.png";
}
else
{
   $file_store ="upload/".$file_name;
   move_uploaded_file($file_tem_loc,$file_store); 
} 
}
else
{
    $file_store="upload/unknown.png";
}
if(isset($_POST["mail"]) && !empty($_POST["nom_fournisseur"]))
{
   echo "ajouter";
   $fournisseur1=new fournisseur($_POST['nom_fournisseur'],$_POST['adresse'],$_POST['mail'],$_POST['numtel'],$file_store);
   $fournisseur1C=new fournisseurC();
   $fournisseur1C->ajouterfournisseur($fournisseur1);
   header('Location: afficherfournisseur.php');
}
else
{
   echo 'erreur';
}
?>