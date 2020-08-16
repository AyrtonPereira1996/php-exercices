<?php
    $x = 4;
    $y = 3.5;
    $z = 10;
    $t = -20;

    // FUNCAO PARA OBTER O VALOR ABSOLUTO DA VARIAVEL
    echo "Valor absoluto de $t -> ".abs($t)."<br/>";

    // FUNCAO PARA CALCULAR A POTENCIA DE UM NUMERO PODENDO DEFINIR O EXPOENTE
    echo "Potencia de $x elevado a 2 -> ".pow($x, 2)."<br/>";

    // FUNCAO PARA CALCULAR A RAIZ QUADRADA
    echo "Raiz quadrada de $z arredondada -> ".number_format(sqrt($z), 2)."<br/>";

    // FUNCAO PARA ARREDONDAR
    echo "Valor arredondado de $t -> ".round($y)."<br/>";


?>