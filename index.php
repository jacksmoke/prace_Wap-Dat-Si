<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="StyleSheet" type="text/css" href="css.css">
        <title>Ročníková práce</title>
    </head>
    <header>
    <ul>
        <li class='active'><a href='index.php'><span>Výpis tabulky</span></a></li>
        <li><a href='insert.php'><span>Vložení záznamu</span></a></li>
        <li><a href='update.php'><span>Upravení záznamu</span></a></li>
        <li><a href='delete.php'><span>Smazání záznamu</span></a></li>
        <br>
    </ul>
    <br>
</header>
<body>
    <?php
    require 'select.php';
    $s = new select();
    ?>
</body>
</html>
