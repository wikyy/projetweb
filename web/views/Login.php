<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="font-awesome.min.css">
</head>
<body>
	<div class="container">
	<img src="image/login.png"/>
		<form method="post" action="process.php">
			<div class="form-input">
				<input type="text" name="User" placeholder="Enter the User Name"/>	
			</div>
			<div class="form-input">
				<input type="password" name="Pass" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>