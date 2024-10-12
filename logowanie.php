<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>praktykuj.edu.pl</title>

	<link rel="stylesheet" type="text/css" href="logowanieStyle.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>


	<div id="container">
        <header id="logo">
            <a href="index.php">Praktykuj.edu.pl</a>
        </header>
		<form action="zaloguj.php" method="post" autocomplete="off">
			<label><input name="login" type="text" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'"/></label>
			<label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>
			<input type="submit" value="Zaloguj się" />
		</form>
		<input type="button" value="Zarejestruj się" onclick="location.href='rejestracja.php'"/>
	</div>
</body>
</html>
