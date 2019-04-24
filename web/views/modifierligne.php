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
<body>

<?PHP
include "../entities/ligne.php";
include "../core/lignec.php";
if (isset($_GET['id_produit'])){
	$lignec=new lignec();
    $result=$lignec->recupererligne($_GET['id_produit']);
	foreach($result as $row){
		$id_produit=$row['id_produit'];
		$id_commande=$row['id_commande'];
		$prix=$row['prix'];
		$quantite=$row['quantite'];
	
?>
<form method="POST">
<table>
<caption>Modifier la quantite</caption>
<tr>
<td><input type="number" hidden=""name="id_produit" value="<?PHP echo $id_produit ?>"></td>
</tr>
<tr>

<td><input type="text" hidden="" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>

<td><input type="text" hidden="" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>quantité</td>
<td><input type="number" name="quantite" value="<?PHP echo $quantite ?>"></td>
</tr>


<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="number"  hidden=""name="id_produit_ini" value="<?PHP echo $_GET['id_produit'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$ligne=new ligne($_POST['id_commande'],$_POST['id_produit'],$_POST['quantite'],$_POST['prix']);
	$lignec->modifierligne($ligne,$_POST['id_produit_ini']);
	echo $_POST['id_produit_ini'];
	header('Location: afficherligne.php');
}
?>
</body>
</HTMl>