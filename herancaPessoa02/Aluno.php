<?php
require_once "Pessoa.php";

class Aluno extends Pessoa {
    private $matricula;
    private $curso;
    private $mensalidade;

    public function pagarMensalidade($valor){
        echo "<p>Pagando Mensalidade do aluno ".$this->getNome()."</p>";
        $this->setMensalidade( $this->getMensalidade()-$valor);
    }
    public function getMensalidade(){
        return $this->mensalidade;
    }
    public function setMensalidade($mensalidade){
        $this->mensalidade=$mensalidade;
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($matricula){
        $this->matricula=$matricula;
    }
    public function getCurso(){
       return $this->curso;
    }
    public function setCurso($curso){
        $this->curso=$curso;
    }

}