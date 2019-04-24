 <html>
 <header></header>
 <body>
 <form action='' method='POST' class='form'> 
        calcul de credit: 
          <input type='text' placeholder='montant depose' name='nmontant' id='nmontant' value=''/>
          <input type='text' placeholder='prix' name='prix' id='prix' value=''/>
          <input type='text' placeholder='nom' name='nom' id='nom' value=''/>
          <input type='text' name='montant' id='montant' value='' size='10' maxlength='10'/>
         <button type='submit' id='envoyer' name='envoyer' title='' value='Envoyer'> <span>Calculer</span> </button>
           
     </form>


<?php
include "../core/creditC.php";
include "../entities/credit.php";
if (isset($_POST['envoyer'])){
  $s=0;
  $e=new credits();
    $r=($_POST['montant']);
    $s=$r+$_POST['nmontant'];
    echo $s;
}
?>
 
 


</body>
</html>