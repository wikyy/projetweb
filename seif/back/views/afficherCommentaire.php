<?php
	include '../core/commentaireC.php';
	$e=new EmployeC();
	$liste=$e->afficherEmployes();
?>
<html>
<head>

</head>
<body>
	<center>
		<br>
		<table border="1">
			<tr>
				<th>num</th>
				<th>nom</th>
				<th>address</th>
				<th>msg</th>
				
			</tr>
			<?php
				foreach ($liste as $row)
					{
						echo '<tr>';
							echo '<td>'.$row['num'].'</td>';
							echo '<td>'.$row['nom'].'</td>';
							echo '<td>'.$row['address'].'</td>';
							echo '<td>'.$row['msg'].'</td>';
							
						echo'<tr>';
					}
			?>
		</table>
		<br>
			<input type="submit" value="Ajouter un Employe">	
	</center>
</body>
</html>