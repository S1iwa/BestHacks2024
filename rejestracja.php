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
</head>

<body>
	<div id="container">
		<form action="zarejestruj.php" method="post" autocomplete="off">

            <div class="title">Zarejestruj się</div>

			<label><input name="login" type="text" placeholder="email" onfocus="this.placeholder=''" onblur="this.placeholder='email'"/></label>

			<label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

			<label><input name="imie" type="text" placeholder="Imie" onfocus="this.placeholder=''" onblur="this.placeholder='Imie'"/></label>

            <label><input name="nazwisko" type="text" placeholder="Nazwisko" onfocus="this.placeholder=''" onblur="this.placeholder='Nazwisko'"/></label>

            <label><input name="PESEL" type="number" placeholder="PESEL" onfocus="this.placeholder=''" onblur="this.placeholder='PESEL'"/></label>

            <label><input name="uczelnia" type="text" placeholder="Uczelnia" onfocus="this.placeholder=''" onblur="this.placeholder='Uczelnia'"/></label>

            <label><input name="kierunek" type="text" placeholder="Kierunek" onfocus="this.placeholder=''" onblur="this.placeholder='Kierunek'"/></label>

            <!-- <label><input name="CV" type="file"/></label> -->

			<input type="submit" value="Zarejestruj się" />

			<div class="bladLogowania">Błędny login lub hasło!</div>
		</form>
	</div>
</body>
</html>