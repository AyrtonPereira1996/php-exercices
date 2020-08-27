<?php

$number = isset($_POST["number"]) ? $_POST["number"]:0;
$cont = 0;

while ($cont <= 10) {
    $resultado = $number*$cont;
    echo "$number x $cont = $resultado <br/>";
    $cont++;
}


?>