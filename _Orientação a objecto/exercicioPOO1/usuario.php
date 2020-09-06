<?php
class Usuario
{
    // Atributos da classe
    public $nome;
    protected $cpf;
    private $endereco;

    // Construtor da classe
    function Usuario()
    {
        $this->preparaUsuario();
    }

    // Outros metodos

    function preparaUsuario()
    {
        $this->nome = "Octavio";
        $this->cpf = "99999";
        $this->endereco = "RUa ...";
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    function getEndereco()
    {
        return $this->endereco;
    }
}
