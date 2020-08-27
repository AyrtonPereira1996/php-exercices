<?php
$number = isset($_GET["number"]) ? $_GET["number"] : 0;

$idade = (date("Y") - $number);

if ($idade >= 18) {
    $v = "ja pode votar<br/>";
    $d = "ja pode dirigir";
} else {
    $v = "nao pode votar<br/>";
    $d = "nao pode dirigir";
}

echo "Com $idade, $v e $d";
