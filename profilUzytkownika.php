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
        <div class="tytul">Profil użytkownika</div>

        <?php

        $mysqli = new mysqli( "localhost", "root", "", "main_database");

        $id = 1; //$_SESSION["user_id"]
        $sql = "SELECT * FROM student WHERE ID = $id"; // Use double quotes

        $result = $mysqli->query($sql);
            
        $sth = $mysqli->query($sql);
        $re=mysqli_fetch_array($sth);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo    "
                    <div class=items>
                        
                        <div class=image>                        
                            <img class=image src=\"data:image/jpeg;base64," . base64_encode(string: $re['Zdjecie']) . "\"/>
                        </div>
                        <div class='dane-uzytkownik'>                        
                            <h1>{$row['Imie']} {$row['Nazwisko']}</h1>
                            <h2>{$row['Email']}</h2>
                            <h3>{$row['Opis']}</h3>
                        </div>

                    </div>
                    ";
        }
        
        $mysqli->close();
        ?>
        </div>
	</div>
</body>
</html>
