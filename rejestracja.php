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

            <div class="title">Zarejestruj się</div>

            <form action="zarejestruj.php" method="post" autocomplete="off">
                <label><input name="login" type="text" placeholder="e-mail" onfocus="this.placeholder=''" onblur="this.placeholder='e-mail'"/></label>

                <label><input name="haslo" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder='hasło'"/></label>

                <label><input name="haslo2" type="password" placeholder="powtórz hasło" onfocus="this.placeholder=''" onblur="this.placeholder='powtórz hasło'"/></label>

                <label><input name="nr" type="number" placeholder="PESEL/NIP" onfocus="this.placeholder=''" onblur="this.placeholder='PESEL/NIP'"></label>

                <input type="submit" value="Zarejestruj się"/>
            </form>

        <style>
            .none {
                display: none;
            }
        </style>
    </div>
</body>
</html>
