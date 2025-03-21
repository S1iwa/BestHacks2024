<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$entries_count = 3;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT o.id, pensja, stanowisko, `data`, logo, nazwa FROM ogloszenie o JOIN pracodawca p ON o.ID_Pracodawca = p.ID LEFT JOIN priorytety ON o.ID_Pracodawca = priorytety.ID_Pracodawca ORDER BY priorytet DESC LIMIT " . $entries_count;
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
    <link rel="stylesheet" href="ogloszenie.css">
    <link rel="stylesheet" href="header.css">
</head>

<body>
    <!-- Nagłówek, który pojawia się po przewinięciu -->
    <header class="sticky-header">
        <a href="index.php">
            <h1 class="header-title">Praktykuj.edu.pl</h1>
        </a>
        <div class="header-buttons">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])): ?>
                <a href="logowanie.php?logout=true" class="cta-button login-button">Wyloguj się</a>
            <?php else: ?>
                <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <?php endif; ?>
            <a href="ogloszenia.php" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>
    </header>

    <main class="center-content">
        <!-- Przyciski w prawym górnym rogu -->
        <div class="top-right-buttons">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])): ?>
                <a href="logowanie.php?logout=true" class="cta-button login-button">Wyloguj się</a>
            <?php else: ?>
                <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <?php endif; ?>
            <a href="ogloszenia.php" class="cta-button secondary browse-button">Przeglądaj ogłoszenia</a>
        </div>

        <!-- Tytuł strony -->
        <div class="hero-section">

            <div class="hero-container">
                <h1 class="title">Praktykuj.edu.pl</h1>
                <p class="subtitle">PRAKTYKA CZYNI MISTRZA</p>
            </div>

            <!-- Trzy okienka prezentujące główne funkcje strony -->
            <section class="features">
                <a href="ogloszenia.php" class="feature-box" style="display: block;">
                    <h3 style="color: white">Praktyki studenckie</h3>
                    <p>Znajdź praktyki marzeń, a nie czekaj na odpowiedz z facebooka.</p>
                </a>
                <a href="profilPracodawcy.php" class="feature-box" style="display: block;">
                    <h3 style="color: white">Dla pracodawcy</h3>
                    <p>Znajdź dla swojego zespołu młodych i energicznych studentów.</p>
                </a>
                <a href="samouczek.php" class="feature-box" style="display: block;">
                    <h3 style="color: white">Samouczek</h3>
                    <p>Zobacz jak łatwo zatrudnić najlepszych studentów na praktyki.</p>
                </a>

            </section>
        </div>

        <div class="margin-auto">
            <h2>Ogłoszenia partnerów</h2>
        </div>

        <!-- Ogłoszenia o pracę -->
        <section class="job-listings">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row["pensja"] == 0)
                        $pensja = "Niepłatne";
                    else
                        $pensja = $row["pensja"] . ",00 PLN / mies.";
                    echo '<a href="ogloszenie.php?id=' . $row["id"] .'"><div class="job-listing">
                            <div class="item-image"> 
                                <img src="data:image/jpeg;base64,' . base64_encode($row["logo"]) . '" alt="' . $row["nazwa"] . '" class="item-image" />
                            </div>
                            <div class="item">
                                <div class="item-content">
                                    <h2><span style="color: #DCF763">' . $row["stanowisko"] . '</span></h2>
                                    <h3>' . $row['nazwa'] . '</h3>
                                    <h3>' . $pensja . '</h3>
                                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                                </div>
                                <div class="item-content-right"> 
                                    <h4>' . $row["data"] . '</h4>
                                </div>
                            </div>
                        </div></a>';
                }
            }
            ?>
        </section>

        <!-- Przycisk na samym dole -->
        <section class="action-buttons-bottom">
            <a href="ogloszenia.php" class="cta-button secondary browse-button">Przeglądaj wszystkie ogłoszenia</a>
        </section>
    </main>

    <footer>
        <p style="margin-top: 50px">&copy; 2024 Azciweisakul.inc. Wszelkie prawa zastrzeżone.</p>
    </footer>

    <script>
        // Skrypt do wyświetlania headera po przewinięciu
        window.onscroll = function () {
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