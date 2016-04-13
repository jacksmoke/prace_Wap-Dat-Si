<?php

class select {
/** Vybere z databáze data uložená v tabulce
 * 
 */
    public function select() {
        //Připojení do databáze, nastavení znakové sady
        $mysqli = new mysqli('localhost', 'root', '', 'mydb');
        mysqli_set_charset($mysqli, "utf8");
        //Do proměnné $select se uloží MySQL dotaz na select
        $select = $mysqli->query("SELECT id, first_name, surname FROM authors");
        //Vypsání tabulky na stránce
        echo "<div>";
        echo "<br>";
        echo "<table>";
        echo("<table border=2 cellpadding=8 cellspacing=5 bordercolor = white>");
        echo "<tr><th>ID</th><th>Jméno</th><th>Příjmení</th></tr>";
        while ($radek = $select->fetch_array()) {
            echo "<tr><td>" . $radek["id"] . "</td>";
            echo "<td>" . $radek["first_name"] . "</td>";
            echo "<td>" . $radek["surname"] . "</td></tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "<br>";
        //Odpojení se z databáze
        $mysqli->close();
    }

}
