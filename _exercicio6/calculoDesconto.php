<?php
    $preco = $_GET["precoProducto"];
    $valorDescontado = (($preco*10)/100);

    echo "O producto custa $preco, com 10% de desconto passa a custar $valorDescontado";



?>