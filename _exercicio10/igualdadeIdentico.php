<?php
    $x = 3;
    $y = "3";

$resultadoIgualdade = ($x == $y) ? "O dois valores sao iguais":"Os dois valores nao sao iguais";
$resultadoIdenticidade = ($x === $y) ? "Os dois valores sao identicos":"Os dois valores nao sao identicos";

echo $resultadoIgualdade."<br/>";
echo $resultadoIdenticidade."<br/>";

?>