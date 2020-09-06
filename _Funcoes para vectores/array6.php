<?php

// Usando as funcoes sort()

$array = array(23, 34, 20);

sort($array);

foreach ($array as $index => $value) {
    echo "$index => $value <br/>";
}

rsort($array);

foreach ($array as $index => $value) {
    echo "$index => $value <br/>";
}
