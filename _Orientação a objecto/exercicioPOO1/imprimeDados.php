<?php
    require_once "usuario.php";

    $usuario = new Usuario();

    echo $usuario->nome;
    echo "<br>";
    echo $usuario->getCPF();
    echo "<br>";
    echo $usuario->getEndereco();




?>