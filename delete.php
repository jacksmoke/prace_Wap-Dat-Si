
<?php
/**
 * Smazání dat z databáze 
 */
include 'index.php';
$mysqli = new mysqli('localhost', 'root', '', 'mydb');
mysqli_set_charset($mysqli, "utf8");

if (!empty($_POST)) {
    $ID = $_POST["id"];
    //Pokud není proměnná $ID prázdná, prověd Sql dotaz DELETE
    if (!empty($ID)) {
        $delete = $mysqli->prepare("DELETE FROM authors WHERE id = ?");
//Spojení parametrů, kde (s = string, i = integer, d = double,  b = blob)
        $delete->bind_param('i', $ID);
        $delete->execute();
    } else {
        echo "<script>alert('Vyplňte prosím všechna pole.')</script>";

        $mysqli->close();
    }
}
?>

<form action="delete.php" method ="POST">
    <label for="surname">Zadejte ID:</label>
    <input type="text" name="id">
    <input type="submit" value="Smazat záznam">
</form> 
<br>
