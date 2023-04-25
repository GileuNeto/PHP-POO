<?php
require_once "Controlador.php";
//classe controle remoto sendo implementada pelo controlador.
class controleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    //quando "ligar" a tv, ela ja vai iniciar, tocando e com o volume 50
    function __construct()
    {
        $this->volume=50;
        $this->ligado=false;
        $this->tocando=true;
    }
    
    function getVolume() {
        return $this->volume;
    }

    private function setVolume( $volume) {
        $this->volume = $volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function setLigado( $ligado) {
        $this->ligado = $ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setTocando( $tocando) {
        $this->tocando = $tocando;
    }

    //todos os metodos que foram declarados na interface tem que ser implementados

    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<br>Está Ligado? " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está Tocando? ". ($this->getVolume()?"SIM":"NÃO");
        echo "<br>Volume:" . $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "fechando menu";
    }
    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume(($this->getLigado() + 5));
        }
    }
    public function menosVolume() {
        if ($this->getLigado()){
            $this->setVolume(($this->getLigado() - 5));
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->getVolume(50);
        }
    }
    public function play() {
        if ($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}