<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktykuj.edu.pl</title>
</head>

<body>
    <?php
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $mysqli = new mysqli("localhost", "root", "", "main_database");

    if ($mysqli->connect_error) {
        echo "Blad polaczenia";
    } else {
        $query = "SELECT id FROM student WHERE Email = '$login' AND Haslo = '$haslo'";
        $result = $mysqli->query($query);

        if ($result && $result->num_rows > 0) {
            echo "Zalogowano pomyślnie (student)!";
            $_SESSION["user_type"] = "student";
            $row = $result->fetch_assoc();
            $_SESSION["user_id"] = $row["id"];
            header("Location: /h/profilUzytkownika.php");
            exit();
        } else {
            $query = "SELECT id FROM pracodawca WHERE Email = '$login' AND Haslo = '$haslo'";
            $result = $mysqli->query($query);
            if ($result && $result->num_rows > 0) {
                echo "Zalogowano pomyślnie (pracodawca)!";
                $_SESSION["user_type"] = "pracodawca";
                $row = $result->fetch_assoc();
                $_SESSION["user_id"] = $row["id"];
                header("Location: /h/profilPracodawcy.php");
                exit();
            } else {
                echo "Błędny login lub hasło!";
                header("Location: /h/logowanie.php");
                exit();
            }
        }
    }

    $result->close();
    ?>
</body>

</html>