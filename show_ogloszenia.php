<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_database";

$entries_count = 2;
$keyword = isset($_POST["q"]) ? "%".$_POST["q"] : "";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, dziedzina, pensja, stanowisko, `data`, zdjecie, nazwa FROM ogloszenie o JOIN pracodawca p ON o.NIP_Pracodawca = p.NIP WHERE dziedzina LIKE '".$keyword."%' LIMIT ".$entries_count;
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
    gap: 20px; /* Spacing between divs */
    padding: 20px;
}

.item {
    display: flex;
    align-items: flex-start; /* Align items at the top */
    gap: 15px; /* Space between image and text */
}

.item-image {
    width: 150px; /* Adjust image size */
    height: auto;
    object-fit: cover; /* Ensures the image maintains aspect ratio */
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
                    <h4>Id: ' . $row["id"] . '</h4>
                </div>
            </div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>