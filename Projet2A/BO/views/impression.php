<?php

include "../core/Event.php";


$e=new Event();
$liste=$e->afficherEvents();

?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<!--//skycons-icons-->
</head>
<body onload="window.print()">	

							
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2>Liste des event</h2>
    	<div class="liste-main">
 			<table class="table table-sm">
 				<thead>
				<tr>
					<th>ID_event</th> 
					<th>Nom</th>
					<th>Description</th>
					<th>Photo</th>
					<th>Nbr_participant</th>
					<th>Nbr_participantMax</th>
					<th>date debut</th>
					<th>date fin</th>
					
					
				</tr>
				</thead>
				<tbody id="target" >
				<?php
					foreach ($liste as $row) {
						echo '<tr>';
							echo '<td>'.$row['ID_event'].'</td>';
							echo '<td>'.$row['Nom'].'</td>';
							echo '<td>'.$row['Description'].'</td>';
							echo '<td>'.$row['Photo'].'</td>';
							echo '<td>'.$row['Nbr_participant'].'</td>';
							echo '<td>'.$row['Nbr_participantMax'].'</td>';
							echo '<td>'.$row['Date_debut'].'</td>';
							echo '<td>'.$row['Date_fin'].'</td>';
							
							echo '<td>';
				?>
				
					
						</tr>;
				<?php
					}
				?>
				</tbody>
			</table>
 		</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

		 
		