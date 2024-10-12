<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$entries_count = 3;
$keyword = isset($_POST["q"]) ? "*".$_POST["q"] : "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, dziedzina, pensja, stanowisko, `data`, zdjecie, nazwa FROM ogloszenie o JOIN pracodawca p ON o.NIP_Pracodawca = p.NIP LIMIT ".$entries_count;
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strona Główna</title>
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

    <!-- Tytuł strony -->
    <div class="hero-section">

        <div class="hero-container">
            <h1 class="title">Praktykuj.edu.pl</h1>
            <p class="subtitle">PRAKTYKA CZYNI MISTRZA</p>
        </div>

        <!-- Trzy okienka prezentujące główne funkcje strony -->
        <section class="features">
            <div class="feature-box">
                <?php
                    echo "jajecznica";
                ?>
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
    </div>

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
        <a href="#" class="cta-button secondary browse-button">Przeglądaj wszystkie ogłoszenia</a>
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
