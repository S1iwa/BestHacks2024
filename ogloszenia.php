<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$keyword = isset($_POST["q"]) ? "*".$_POST["q"] : "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT dziedzina, pensja, stanowisko, `data`, zdjecie, nazwa FROM ogloszenie o JOIN pracodawca p ON o.ID_Pracodawca = p.ID";
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
    <a href="index.php"><h1 class="header-title">Praktykuj.edu.pl</h1></a>
    <form>
        <label>
            <input type="text" name="szukaj" placeholder="Szukaj...">
        </label>
    </form>
    <div class="header-buttons">
        <a href="logowanie.php" class="cta-button login-button">Zaloguj się</a>
    </div>
</header>

<main class="center-content">
    <!-- Ogłoszenia o pracę -->
    <section class="job-listings">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if($row["pensja"] == 0)
                    $pensja = "Niepłatne";
                else
                    $pensja = $row["pensja"].",00 PLN / mies.";
                echo '<div class="job-listing">
                        <div class="item-image"> 
                            <img src="data:image/jpeg;base64,' . base64_encode($row["zdjecie"]) . '" alt="' . $row["stanowisko"] . '" class="item-image" />
                        </div>
                        <div class="item">
                            <div class="item-content">
                                <h2><span style="color: #DCF763">'.$row["stanowisko"].'</span></h2>
                                <h3>'.$row['nazwa'].'</h3>
                                <h3>'.$pensja.'</h3>
                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
                            </div>
                            <div class="item-content-right"> 
                                <h4>'.$row["data"].'</h4>
                            </div>
                        </div>
                 </div>';
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
