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
        if(isset($_SESSION["pracodawca"])){
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $nip = $_POST['nip'];
            $nazwa = $_POST['nazwa'];

            $mysqli = new mysqli( "localhost", "root", "", "main_database");

            if ($mysqli->connect_error) {
                echo "Blad polaczenia";
            } else {
                $query = "INSERT INTO pracodawca(Email, Haslo, NIP, Nazwa,) VALUES ('$login', '$haslo', '$nip', '$nazwa')";

                $result = $mysqli->query($query);
            }
        }
        if(isset($_SESSION["student"])){
            $login = $_POST['login'];
            $haslo = $_POST['haslo'];
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $PESEL = $_POST['PESEL'];
            $uczelnia = $_POST['uczelnia'];
            $kierunek = $_POST['kierunek'];

            $mysqli = new mysqli( "localhost", "root", "", "main_database");

            if ($mysqli->connect_error) {
                echo "Blad polaczenia";
            } else {
                $query = "INSERT INTO student(Email, Haslo, Imie, Nazwisko, PESEL, Uczelnia, Kierunek) VALUES ('$login', '$haslo', '$imie', '$nazwisko', '$PESEL', '$uczelnia', '$kierunek')";

                $result = $mysqli->query($query);
            }
        }

    ?>
</body>
</html>