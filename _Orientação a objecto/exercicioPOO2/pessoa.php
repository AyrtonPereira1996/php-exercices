<?php

// CLASSE QUE ABORA SOBRE PHP ORIENTACAO A OBJECTOS
class Pessoa{

    // ATRIBUTOS DA CLASSE PESSOA
    private $nome;
    private $dataNascimento;
    private $idade;
    private $nacionalidade;


    // METODO CONSTRUTOR DA CLASSE
    function __construct($nome, $dataNascimento, $nacionalidade) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->nacionalidade = $nacionalidade;
        $this->idade = 2020 - $dataNascimento;   
    }

    //METODO PARA MOSTRAR DADOS DO OBJECTO PESSOA
    function mostrarDadosPessoa(){
        echo "Nome: ".$this->nome;
        echo "<br>";
        echo "Idade: ".$this->idade;
        echo "<br>";
        echo "Nacionalidade: ".$this->nacionalidade;  
    }

    // METODOS GETTERS AND SETTERS
    function getNome(){
        return $this->nome;
    }

    function getDataNascimento(){
        return $this->dataNascimento;
    }

    function getiIdade(){
        return $this->idade;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

}
    
 