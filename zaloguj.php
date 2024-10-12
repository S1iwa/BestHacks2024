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

        $mysqli = new mysqli("localhost", "root", "", "main_database");

        if ($mysqli->connect_error) {
            echo "Blad polaczenia";
        } else {
            $query = "SELECT * FROM student WHERE login = '$login' AND haslo = '$haslo'";
            $result = $mysqli->query($query);

            if ($result && $result->num_rows > 0) {
                echo "Zalogowano pomyślnie!";
            } else {
                echo "Błędny login lub hasło!";
            }
        }
    ?>
</body>
</html>