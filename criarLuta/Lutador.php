<?php

//criando classe Lutador
class Lutador{
    private $nome;
    private $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;



    function apresentar(){
        echo "_____________________<br>";
        echo "CHEGOU A HORA! O lutador:" . $this->getNome();
        echo "Veio diretamente de " . $this->getNacionalidade();
        echo "tem" . $this->getIdade() . "anos e pesa" . $this->getPeso() . "kilos";
        echo "<br>Ele tem " . $this->getVitoria() . " vitorias ";
        echo " derrota " . $this->getDerrota()  . $this->getEmpate() . " empates ";
    } 
    function status(){
        echo "<p>=====================</p>";
        echo "Nome: " . $this->getNome() . "é um peso " . $this->getCategoria() ;
        echo "Vitorias: " . $this->getVitoria();
        echo "Derrotas " . $this->getDerrota();
        echo "Empatou " . $this->getEmpate();
    }
    function ganharLuta(){
        $this->setVitoria($this->getVitoria()+1);
    }
    function perderLuta(){
        $this->setDerrota($this->getDerrota()+1);
    }
    function empatarLuta(){
        $this->setEmpate($this->getEmpate()+1);
    }
    
    //metodos especiais
    function __construct($no,$na,$id,$al,$pe,$vi,$de,$em)
    {
        $this->nome =$no;
        $this->nacionalidade = $na;
        $this->idade=$id;
        $this->altura=$al;
        $this->setPeso($pe);
        $this->vitorias=$vi;
        $this->derrotas=$de;
        $this->empates=$em;
    }
    function getNome(){
        return $this->nome;
    }
    function getNacionalidade(){
        return $this->nacionalidade;
    }
    function getIdade(){
        return $this->idade;
    }
    function getAltura(){
        return $this->altura;
    }
    function getPeso(){
        return $this->peso;
    }
    function getCategoria(){
        return $this->categoria;
    }
    function getVitoria(){
        return $this->vitorias;
    }
    function getDerrota(){
        return $this->derrotas;
    }
    function getEmpate(){
        return $this->empates;
    }
    
    function setNome($nome){
        $this->nome=$nome;
    }
    function setNacionalidade($nacionalidade){
        $this->nacionalidade=$nacionalidade;
    }
    function setIdade($idade){
        $this->idade=$idade;
    }
    function setAltura($altura){
        $this->altura=$altura;
    }
    function setPeso($peso){
        $this->peso=$peso;
        $this->setCategoria();
    }
    function setCategoria(){
        if ($this->peso < 52.2){
            $this->categoria = "invalida";
        }elseif($this->peso <= 70.3){
            $this->categoria="leve";
        }elseif($this->categoria <=83.9){
            $this->categoria="medio";
        }elseif($this->categoria<= 120.2){
            $this->categoria="pesado";
        }else{
            $this->categoria="invalida";
        }
    }
    function setVitoria($vitorias){
        $this->vitorias=$vitorias;
    }
    function setDerrota($derrotas){
        $this->derrotas=$derrotas;
    }
    function setEmpate($empate){
        $this->empates=$empate;
    }

   

}