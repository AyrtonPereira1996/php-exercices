<?php

// verifiva se $_GET[""] contem algo atraves da funcao isset($_GET[""]) ? $_GET[""](true): (false)
$name = isset($_GET["name"]) ? $_GET["name"] : "Valor não informado";
$anoNascimento = isset($_GET["anoNascimento"]) ? $_GET["anoNascimento"] : 0;
$gender = isset($_GET["gender"]) ? $_GET["gender"] : "Valor não informado";


// CALCULO DE IDADE DO USUARIO
$idade = (2020 - $anoNascimento);

if ($anoNascimento === 0) {
    $anoNascimento = "Valor não informado";
}

echo "Nome: $name; <br/>Data de nascimento: $anoNascimento; <br/> Idade: $idade anos; <br/> Genero: $gender";
