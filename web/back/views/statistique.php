<?php
include '../config.php';
$stmt=$dbcon->prepare("SELECT * FROM credit");
$stmt->execute();
$json=[];
$json2=[];
while ($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	extract($row);
	$json[]=$nom;
	$json2[]=$montant;
}
echo json_encode($json);
ech json_encode($json2);

?>