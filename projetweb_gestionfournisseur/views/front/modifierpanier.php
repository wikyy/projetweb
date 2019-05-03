<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/panier.php";
include "../core/panierc.php";
if (isset($_GET['id_commande'])){
	$panier1c=new panierc();
    $result=$panier1c->recupererpanier($_GET['id_commande']);
	foreach($result as $row){
		$id_commande=$row['id_commande'];
		$id_client=$row['id_client'];
		

?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="id_client" value="<?PHP echo $id_client ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>




<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="number" name="id_commande" value="<?PHP echo $_GET['id_commande'];?>"></td>
</tr>s
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['id_client'],$_POST['id_commande']);
	$panier1c->modifierpanier($panier,$_POST['id_commande']);
	echo $_POST['id_commande'];
	header('Location: afficherpanier.php');
}
?>
</body>
</HTMl>