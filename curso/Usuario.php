<?php

require_once "Pessoa.php";
//usuario ele é uma pessoa entao.. ele herda pessoa(tudo quue a Classe pessoa tem o usuario tbm tem)
class Usuario extends Pessoa{

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->login=$login;
        $this->totAssistido = 0;
    }

    public function viuMaisUm(){
        $this->totAssistido ++;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

    }
}