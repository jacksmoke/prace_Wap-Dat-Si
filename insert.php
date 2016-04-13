<?php
/** Vložení  dat do databáze
 * 
 */

include 'index.php';
$mysqli = new mysqli('localhost', 'root', '', 'mydb');
mysqli_set_charset($mysqli, "utf8");
//Uložení hodnot z formuláře do proměnných $first_name, $surname
if (!empty($_POST)) {
    $first_name = $_POST["first_name"];
    $surname = $_POST["surname"];

//Testování, zde nejsou data v formuláři prázdné, vložení hodnot do databáze
    if (!empty($first_name) && !empty($surname)) {
        $insert = $mysqli->query("INSERT INTO authors (first_name, surname) VALUES ('$first_name', '$surname')");
    } else {
        echo "<script>alert('Vyplňte prosím všechna pole.')</script>";
        $mysqli->close();
    }
}
?>
<form action="insert.php" method ="POST">
    <label for="name">Zadejte Jméno:</label>
    <input type="text" name="first_name">
    <label for="surname">Zadejte Příjmení:</label>
    <input type="text" name="surname">
    <input type="submit" value="Přidat záznam">
</form>   