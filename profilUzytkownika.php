<img?php
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
    <link rel="stylesheet" href="css/animation.css">

</head>

<body>
    <header class="sticky-header" style="top: 0;">
        <h1 class="header-title">Praktykuj.edu.pl</h1>
        <div class="header-buttons">
            <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

	<div id="container">
        <div class="title">Profil użytkownika</div>

        <div class="dane">
            <div class="dane-uzytkownika">
                <div class="pliki">
                    <div class="zdjecie">
                    </div>
                    <div class="CV">
                    </div>    
                </div>
                <div class="dane-osobowe">
                    <div class="imie"></div>
                    <div class="nazwisko"></div>    
                    <div class="email"></div>    
                </div>
                <div class="opis"></div>

                <div class="zdjecie"></div>
            </div>
            <div class="dane-uczelni"></div>
        </div>
	</div>
</body>
</html>
