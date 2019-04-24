<?php 
 session_start();
echo "utilisateur qui a confirmer la commande " . $_SESSION["user"] . ".<br>";

 ?>
<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--checkout-->
      <link rel="stylesheet" type="text/css" href="css/checkout.css">
      <!--//checkout-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body onload="window.print()">
      <!--headder-->
     
<?PHP
include "../core/lignec.php";

$ligne1c=new lignec();
$listelignes=$ligne1c->afficherlignes();
//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id commande</td>
<td>id produit</td>
<td>prix</td>
<td>quantite</td>

</tr>

<?PHP
foreach($listelignes as $row){
   ?>
   <tr>
   <td><?PHP echo $row['id_commande']; ?></td>
   <td><?PHP echo $row['id_produit']; ?></td>
   <td><?PHP echo $row['quantite']; ?></td>
   <td><?PHP echo $row['prix']; ?></td>
   
  
   
   </td>
   
   </tr>
   <?PHP
}
?>
</table>

</tbody>
<b>
   echo le nombre de produit est: </h>
   <?php  
   $ligne1c=new lignec();
$ligne1c->calculenbproduit();
?>



                        




                     
</html>
