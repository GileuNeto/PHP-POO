<?php

require_once "Animal.php";
//ave é uma subclasse da classe animal
class Ave extends Animal{
    private $corPena;

    public function locomover(){
        echo "Voando";
    }
    public function alimentar(){
        echo "Frutas";
    }
    public function emitirSom(){
        echo "som de ave";
    }
    public function getCor(){
        return $this->corPena;
    }
    public function setCor($corPena){
         $this->corPena = $corPena;
    }
    public function fazerNinho(){
       echo ("fazendo ninho");
    }

}