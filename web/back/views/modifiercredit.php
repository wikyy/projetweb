<HTML>
<head>
</head>
<body>

<form action="../core/modifierC.php" method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>CIN</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="marque" value="<?PHP echo $marque ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="number" name="montant" value="<?PHP echo $montant ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>

</body>
</HTMl>