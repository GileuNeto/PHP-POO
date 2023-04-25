<?php
// a classe abstrata nao pode criar um objeto, entao ela deve ter uma subclasse pra isso
abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    abstract function locomover();
    abstract function alimentar();
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