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

	<link rel="stylesheet" type="text/css" href="profilStyle.css">	
    <link rel="stylesheet" type="text/css" href="header.css">	

</head>

<body>
    <!-- Nagłówek, który pojawia się po przewinięciu -->
    <header class="sticky-header">
        <h1 class="header-title">Praktykuj.edu.pl</h1>
        <div class="header-buttons">
            <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
            <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

	<div id="container">
        <div class="title">Profil użytkownika</div>

        <div class="dane">
            
        </div>
	</div>
</body>
</html>
