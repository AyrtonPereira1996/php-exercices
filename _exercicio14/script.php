<?php
$number = isset($_GET["number"]) ? $_GET["number"] : 0;
$contador = 0;

while ($contador <= $number) {
    echo "$contador <br/>";
    $contador++;
}

?>