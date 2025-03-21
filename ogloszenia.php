<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$keyword = isset($_GET["szukaj"]) ? $_GET["szukaj"] : "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT o.id id, pensja, stanowisko, `data`, logo, nazwa, o.opis FROM ogloszenie o JOIN pracodawca p ON o.ID_Pracodawca = p.ID LEFT JOIN priorytety ON o.ID_Pracodawca = priorytety.ID_Pracodawca WHERE o.stanowisko LIKE '%" . $keyword . "%' ORDER BY priorytet DESC";
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
    <header class="sticky-header" style="top: 0; position: sticky;">
        <a href="index.php">
            <h1 class="header-title">Praktykuj.edu.pl</h1>
        </a>
        <form method="GET" action="ogloszenia.php">
            <label>
                <input style="color: #c5db57; placeholder-color: #c5db57; background-color: transparent" type="text"
                    name="szukaj" placeholder="Szukaj..." value="<?php echo $keyword; ?>" />
            </label>
        </form>
        <div class="header-buttons">
            <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])): ?>
                <a href="logowanie.php?logout=true" class="cta-button login-button">Wyloguj się</a>
            <?php else: ?>
                <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
            <?php endif; ?>
        </div>
    </header>

    <main class="center-content">
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
                            <img src="data:image/png;base64,' . base64_encode($row["logo"]) . '" alt="' . $row["nazwa"] . '" class="item-image" />
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <h2><span style="color: #DCF763">' . $row["stanowisko"] . '</span></h2>
                                <h3>' . $row['nazwa'] . '</h3>
                                <h3>' . $pensja . '</h3>
                                <h4>' . substr($row["opis"], 0, 250) . '...</h4>
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
    </main>

    <footer>
        <p>&copy; 2024 Moja Strona. Wszelkie prawa zastrzeżone.</p>
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