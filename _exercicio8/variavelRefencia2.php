<?php
    $stringx = "string x: String antes da atribuicao por referencia <br>";
    echo "$stringx";

    $string = &$string2;
    $string2 = "valor da string 2 <br>";

    echo "String2: $string2<br> concatenado com a string 1 <br>String: $string";



?>