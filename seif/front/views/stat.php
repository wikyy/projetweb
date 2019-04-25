<?php
include '../config.php';
$db=config::getConnexion();
$sql=$db->prepare("SELECT * FROM commentaire ");
$sql->execute();
$json=[];
$json2=[];
while ($row=$sql->fetch(PDO::FETCH_ASSOC))
{
    extract($row);
    $json[]=$nom;
    $json2[]=(float)$count;
}
//echo json_encode($json);
//echo json_encode($json2);

?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<div style= "width: 75%">
<canvas width="20%" id="myChart" ></canvas></div>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: <?php echo json_encode($json); ?>,
        datasets: [{
            label: 'jaime par commentaire',
            backgroundColor: 'yellow',
            borderColor: 'black',
            data:<?php echo json_encode($json2); ?>,
        }]
    },

    // Configuration options go here
    options: {}
});</script>