<!DOCTYPE html>
<html lang="pl">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="description" content="Opis strony"/>
    <meta name="keywords" content="słowa kluczowe oddzielone przecinkiem"/>
    <title>Praktykuj.edu.pl</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- Nagłówek, który pojawia się po przewinięciu -->
<header class="sticky-header">
    <div class="header-container">
        <h1 class="header-title">Praktykuj.edu.pl</h1>
        <div class="header-buttons">
            <a href="#" class="cta-button login-button">Zaloguj się</a>
            <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </div>
</header>

<main class="center-content">
    <!-- Przyciski w prawym górnym rogu -->
    <div class="top-right-buttons">
        <a href="#" class="cta-button login-button">Zaloguj się</a>
        <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
    </div>

    <!-- Tytuł strony i napis pod spodem -->
    <h1 class="title">Praktykuj.edu.pl</h1>
    <p class="subtitle">Practice makes perfect</p>

    <!-- Trzy okienka prezentujące główne funkcje strony (widoczne po przewinięciu) -->
    <section class="features">
        <div class="feature-box">
            <h3>Praktyki studenckie</h3>
            <p>Znajdź praktyki zgodne z Twoim kierunkiem studiów.</p>
        </div>
        <div class="feature-box">
            <h3>Staże</h3>
            <p>Rozpocznij karierę, zdobywając doświadczenie zawodowe.</p>
        </div>
        <div class="feature-box">
            <h3>Oferty pracy</h3>
            <p>Przeglądaj aktualne oferty pracy i znajdź wymarzoną pracę.</p>
        </div>
    </section>

    <!-- Ogłoszenia o pracę -->
    <section class="job-listings">
        <div class="job-listing">
            <h3>Ogłoszenie o pracę #1</h3>
            <p>Szukamy dynamicznego specjalisty ds. marketingu. Atrakcyjne warunki pracy!</p>
        </div>
        <div class="job-listing">
            <h3>Ogłoszenie o pracę #2</h3>
            <p>Poszukujemy programisty full-stack. Praca w młodym zespole, projekty IT.</p>
        </div>
        <div class="job-listing">
            <h3>Ogłoszenie o pracę #3</h3>
            <p>Oferta stażu w dziale HR. Idealna szansa na rozwój w branży rekrutacyjnej.</p>
        </div>
    </section>

    <!-- Przycisk na samym dole -->
    <section class="action-buttons-bottom">
        <a href="#" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
    </section>
</main>

<footer>
    <p>&copy; 2024 Moja Strona. Wszelkie prawa zastrzeżone.</p>
</footer>

<script>
    // Skrypt do wyświetlania headera po przewinięciu
    window.onscroll = function() {
        var header = document.querySelector('.sticky-header');
        var subtitle = document.querySelector('.subtitle');
        var subtitleBottom = subtitle.getBoundingClientRect().bottom;

        if (subtitleBottom <= 0) {
            header.classList.add('visible');
        } else {
            header.classList.remove('visible');
        }
    };
</script>
</body>

</html>