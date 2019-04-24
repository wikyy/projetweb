<?PHP
include "../core/employeC.php";
$r=new reclamations();
$listereclamations=$r->afficherreclamations();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>nom</td>
<td>sujet</td>
<td>num</td>
<td>message</td>
</tr>

<?PHP
foreach($listereclamations as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['sujet']; ?></td>
	<td><?PHP echo $row['num']; ?></td>
	<td><?PHP echo $row['message']; ?></td>
	</tr>
	<?PHP
}
?>
</table>

