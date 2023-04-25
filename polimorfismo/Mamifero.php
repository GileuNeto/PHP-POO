<?php

require_once "Animal.php";

class Mamifero extends Animal{
    private $cor;

    public function locomover(){
        echo "Correndo";
    }
    public function alimentar(){
        echo "mamando";
    }
    public function emitirSom(){
        echo "som de mamifero";
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
         $this->cor = $cor;
    }

}