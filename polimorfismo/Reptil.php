<?php

require_once "Animal.php";

class Reptil extends Animal{
    private $corEscama;

    public function locomover(){
        echo "rastejando";
    }
    public function alimentar(){
        echo "Comendo Vegetais";
    }
    public function emitirSom(){
        echo "som de Reptil";
    }
    public function getCor(){
        return $this->corEscama;
    }
    public function setCor($corEscama){
         $this->corEscama = $corEscama;
    }

}