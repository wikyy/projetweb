<?PHP
session_start();
include "../core/panierc.php";
$panierc=new panierc();
if (isset($_SESSION["l"])){
	$panierc->supprimerpanieru($_SESSION["l"]);
	header('Location: supprimerligneu.php');
	//header('Location: afficherligne.php');

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="supprimerligneu.php" method="post"
	class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
</body>
</html>
