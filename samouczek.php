<?php
session_start();
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
            <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

    <div id="container">
        <header>
            <div class="tytul" style="color: #DCF763; font-size: 50px; margin-bottom: 40px" >Praktyki studenckie — obowiązki pracodawcy</div>
        </header>
        <article>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quod impedit, aut est minus magnam deleniti deserunt doloribus labore architecto animi laudantium libero nemo ratione aspernatur? Autem aut nisi provident.
                    Nihil inventore quis itaque magni sint corrupti velit! Quae voluptatem optio modi voluptas sed a, necessitatibus facere quo architecto explicabo consequatur distinctio fugiat fuga maiores? Illum quam magni quibusdam necessitatibus.
                </div>
            </section>
            <section>
                <div style="text-align: center">
                    <img src="zdjTest.jpg" style="width: 80%; border-radius: 30px; border: 4px solid white; margin-bottom: 60px">
                </div>
            </section>
            <section>
                <div style="color: white; font-size: 26px; text-indent: 60px; margin-bottom: 60px">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum quod impedit, aut est minus magnam deleniti deserunt doloribus labore architecto animi laudantium libero nemo ratione aspernatur? Autem aut nisi provident.
                    Nihil inventore quis itaque magni sint corrupti velit! Quae voluptatem optio modi voluptas sed a, necessitatibus facere quo architecto explicabo consequatur distinctio fugiat fuga maiores? Illum quam magni quibusdam necessitatibus.
                </div>
            </section>
        </article>
    </div>
    </div>
</body>

</html>