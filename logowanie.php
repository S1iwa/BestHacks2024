<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="logowanieStyle.css">
	<title>praktykuj.edu.pl</title>
</head>

<body>
	<div id="container">
		<form action="zaloguj.php" method="post">
			<label><input name="login" type="text" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'"/></label>
			<label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>
			<input type="submit" value="Zaloguj się" />
		</form>
	</div>
</body>
</html>