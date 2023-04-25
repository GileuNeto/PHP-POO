<?php
require_once "Aluno.php";

class Bolsista extends Aluno{
    private $bolsa;
    
    public function revonarBolsa(){
        $this->setMensalidade( $this->getMensalidade()- $this->getBolsa());

        echo "bolsa renovada";
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }
}