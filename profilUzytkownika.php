<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_type'])) {
    header("Location: /h/logowanie.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>praktykuj.edu.pl</title>

    <link rel="stylesheet" type="text/css" href="profilStyle.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="css/animation.css">
</head>

<body>
    <header class="sticky-header" style="top: 0;">
        <a href="index.php">
            <h1 class="header-title">Praktykuj.edu.pl</h1>
        </a>
        <div style="margin-right: 40px" class="header-buttons">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])): ?>
                <a href="logowanie.php?logout=true" class="cta-button login-button">Wyloguj się</a>
            <?php else: ?>
                <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <?php endif; ?>
            <a href="ogloszenia.php" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

    <div id="container">
        <div class="tytul" style="color: white">Profil użytkownika</div>

        <?php

        $mysqli = new mysqli("localhost", "root", "", "main_database");

        $id = $_SESSION["user_id"];
        $sql = "SELECT * FROM student WHERE ID = $id"; // Use double quotes
        
        $result = $mysqli->query($sql);

        $sth = $mysqli->query($sql);
        $re = mysqli_fetch_array($sth);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "
                    <div class=items style='margin-bottom: 40px'>
                        
                        <div class=imagePracodawca>
                            <img class=image src=\"data:image/jpeg;base64," . base64_encode(string: $re['Zdjecie']) . "\"/>
                        </div>
                        <div class='dane-uzytkownik'>
                            <h1 style='color: #ffffff; font-size: 50px; margin-top:0; margin-bottom:0'>{$row['Imie']} {$row['Nazwisko']}</h1>
                            <h2 style='color: #bbbbbb '>{$row['Email']}</h2>
                            <h3 style='color: #bbbbbb; font-size: 20px'>{$row['Opis']}</h3>
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