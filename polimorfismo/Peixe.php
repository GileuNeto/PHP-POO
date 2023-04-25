<?php

require_once "Animal.php";

class Peixe extends Animal{
    private $corEscama;

    public function locomover(){
        echo "nadando";
    }
    public function alimentar(){
        echo "Planctions";
    }
    public function emitirSom(){
        echo "Nao tem som";
    }
    public function getCor(){
        return $this->corEscama;
    }
    public function setCor($corEscama){
         $this->corEscama = $corEscama;
    }
    public function soltarBolas(){
        echo "soltar bolas";
    }

}