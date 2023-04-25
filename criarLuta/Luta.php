<?php
require_once "Lutador.php";
//criando classe luta
class Luta{

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2){
        if ( $l1->getCategoria() === $l2->getCategoria() 
        && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }


    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vecendor = rand(0,2);
            switch($vecendor){
                case 0:
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>".$this->desafiado->getNome() . "Ganhou</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>".$this->desafiante->getNome() . "Ganhou<p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo "nao pode ter luta";
        }
    }
    

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado( $desafiado) {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante( $desafiante) {
        $this->desafiante = $desafiante;
    }

    public function seRrounds( $rounds) {
        $this->rounds = $rounds;
    }

    public function setAprovada( $aprovada) {
        $this->aprovada = $aprovada;
    }

}