<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$entries_count = 3;
$keyword = isset($_GET["q"]) ? "%".$_GET["q"] : "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT priorytet, dziedzina, pensja, stanowisko, `data`, zdjecie, nazwa FROM ogloszenie o JOIN pracodawca p ON o.ID_Pracodawca = p.ID LEFT JOIN priorytety ON o.ID_Pracodawca = priorytety.ID_Pracodawca WHERE o.dziedzina LIKE '".$keyword."%' ORDER BY priorytet DESC LIMIT ".$entries_count;
$result = $conn->query($sql);
?>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
}

.container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
}

.item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.item-image {
    width: 150px;
    height: auto;
    object-fit: cover;
    border-radius: 5px;
}

.item-content p {
    margin-bottom: 10px;
}
</style>
<div class="container">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="item">
                <img src="data:image/jpeg;base64,' . base64_encode($row["zdjecie"]) . '" alt="' . $row["stanowisko"] . '" class="item-image" />
                <div class="item-content">
                    <h2>' . $row["stanowisko"] . '</h2>
                    <h3>' . $row['nazwa'] . '</h3>
                    <h4>' . $row["pensja"] . '</h4>
                    <h4>' . $row["dziedzina"] . '</h4>
                    <h4>' . $row["data"] . '</h4>
                    <h4>' . $row["priorytet"] . '</h4>
                </div>
            </div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>