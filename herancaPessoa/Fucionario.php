<?php
require_once "Pessoa.php";

class Fucionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function mudarTrabalho($trabalho){
        $this->setor= $trabalho;
    }
    public function getSetor(){
        return $this->setor;
    }
    public function setsetor($setor){
        $this->setor=$setor;
    }
    public function getTrabalhando(){
       return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando){
        $this->trabalhando=$trabalhando;
    }
}