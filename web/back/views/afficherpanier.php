<?PHP
include "../core/panierc.php";
$panier1c=new panierc();
$listepanier=$panier1c->afficherpanier();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>nb heures</td>
<td>tarif horaire</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepanier as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['id_client']; ?></td>
	
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="id_commande">
	</form>
	</td>
	<td><a href="modifierpanier.php?cin=<?PHP echo $row['id_commande']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>

