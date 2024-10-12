<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie zamówienia</title>
</head>
<body>
    <?php
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $haslo2 = $_POST['haslo2'];
        $nr = $_POST['nr'];

        $mysqli = new mysqli( "localhost", "root", "", "main_database");

        if($haslo == $haslo2){
            if (strlen($nr) == 10) {
                $query = "INSERT INTO pracodawca(Email, Haslo, NIP) VALUES ('$login', '$haslo', '$nr')";
            } elseif (strlen($nr) == 11) {
                $query = "INSERT INTO student(Email, Haslo, PESEL) VALUES ('$login', '$haslo', '$nr')";
            } else {
                die("Nieprawidłowy PESEL. PESEL musi mieć 10 lub 11 cyfr.");
            }

            if ($mysqli->query($query) === TRUE) {
                echo "Rejestracja zakończona sukcesem.";
            } else {
                echo "Błąd: " . $mysqli->error;
            }

            $mysqli->close();
        } else {
            echo "Hasła nie są takie same" . $mysqli->error;
        }
    ?>
</body>
</html>