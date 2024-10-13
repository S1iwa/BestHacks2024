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
        <div class="tytul">Profil użytkownika</div>

        <?php

        $mysqli = new mysqli("localhost", "root", "", "main_database");

        $id = $_SESSION["user_id"];
        $sql = "SELECT * FROM pracodawca WHERE ID = $id"; // Use double quotes
        
        $result = $mysqli->query($sql);

        $sth = $mysqli->query($sql);
        $re = mysqli_fetch_array($sth);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "
                    <div class=items style='margin-bottom: 40px'>
                        
                        <div class=imagePracodawca>
                            <img class='pic' src=\"data:image/jpeg;base64," . base64_encode(string: $re['Logo']) . "\"/>
                        </div>
                        <div class='dane-uzytkownik'>
                            <h1 style='color: #ffffff; font-size: 50px; margin-top:0; margin-bottom:0'>{$row['Nazwa']}</h1>
                            <h2 style='color: #bbbbbb '>email: {$row['Email']}</h2>
                            <h2 style='color: #bbbbbb '>NIP: {$row['NIP']}</h2>
                            <h3 style='color: #bbbbbb; font-size: 20px'>{$row['Opis']}</h3>
                        </div>
                    </div>
                    ";
        }
        
        
        if ($mysqli->connect_error) {
            echo "Blad polaczenia";
        } else {
            $query = "SELECT * FROM ogloszenie o JOIN pracodawca p ON o.ID_Pracodawca = p.ID WHERE p.ID = $id";
            $resultZapytania = $mysqli->query($query);
    
            if ($resultZapytania->num_rows > 0) {
                for ($i = 0; $i < $resultZapytania->num_rows; $i++) {
                    $rowOgloszenie = $resultZapytania->fetch_assoc();
                    echo "
                        <div class=items>
                            <div class=imageOgloszenia>
                                <img class='picOgloszenia'/>
                            </div>
                            <div class='dane-uzytkownik'>
                                <h2 style='color: #bbbbbb '>{$rowOgloszenie['Stanowisko']}</h2>
                                <h2 style='color: #bbbbbb '>{$rowOgloszenie['Pensja']} zł/mies.</h2>
                                <h3 style='color: #bbbbbb; font-size: 16px'>{$rowOgloszenie['Opis']}</h3>
                            </div>
                        </div>
                        ";
                }
            }

        }
    
        $result->close();
        $mysqli->close();
        ?>


    </div>
    </div>
</body>

</html>