<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>praktykuj.edu.pl</title>
</head>

<body>
	<form action="zaloguj.php" method="post">
		<label>Login:<input name="login" type="text"/></label>
		<label>Haslo:<input name="haslo" type="password"/></label>
		<input type="submit" value="Zaloguj się" />
	</form>
</body>
</html>