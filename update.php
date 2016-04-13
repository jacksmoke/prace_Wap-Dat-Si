
<?php
/** Upraví stávající data v databázi
 * 
 */
include 'index.php';
$mysqli = new mysqli('localhost', 'root', '', 'mydb');
mysqli_set_charset($mysqli, "utf8");
//Uložení hodnot z formuláře do proměnných $first_name, $surname, $ID
if (!empty($_POST)) {
    $first_name = $_POST['first_name'];
    $surname = $_POST["surname"];
    $ID = $_POST["id"];
    
    //Pokud nejsou proměnné prázdné, prověd Sql dotaz UPDATE
    if (!empty($first_name) && !empty($surname) && !empty($ID)) {
        $update = $mysqli->prepare("UPDATE authors SET first_name=?, surname=? WHERE ID=?");

//Spojení parametrů, kde (s = string, i = integer, d = double,  b = blob)
        $update->bind_param('ssi', $first_name, $surname, $ID);
        $update->execute();
    } else {
        echo "<script>alert('Vyplňte prosím všechna pole.')</script>";
        $mysqli->close();
    }
}
?>
<form action="update.php" method ="POST">
    <label for="surname">Zadejte ID:</label>
    <input type="text" name="id">
    <label for="name">Zadejte Jméno:</label>
    <input type="text" name="first_name">
    <label for="surname">Zadejte Příjmení:</label>
    <input type="text" name="surname">          
    <input type="submit" value="Upravit záznam">
</form>
<br>