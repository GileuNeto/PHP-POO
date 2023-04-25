<?php

abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function emitirSom();


    public function getMembros()
    {
        return $this->membros;
    }
    public function setMembros($membros)    {
        $this->membros = $membros;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade){
        $this->idade = $idade;

    }
    public function getPeso()
    {
        return $this->peso;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
}  