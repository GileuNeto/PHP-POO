<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //metodo construtor
    public function __construct()
    {
        $this->saldo = 0;
        $this->status = false;
    echo "conta criada<br>";
    }
    //criando conta, se ela for conta corrente ja inicia com 50 reais, caso ela 
    //seja conta poupança começa com 150 reais
    public function abrirconta($tipo){
        $this->tipo = $tipo;
        $this->status = true;

        if ($tipo = "CC"){
            $this->saldo =50;
        }else if($tipo ="CP"){
            $this->saldo = 150;
        }
    }
    //poder usar outro metodo pra fechar conta, mas como sao so exemplos, este serve.
    //se o usuario tiver debito na conta nao consegue fechar sua conta.
    public function fecharconta($saldo){
        if($this->saldo > 0){
            echo "Não podemos fachar sua conta, pois o saldo é de ".$saldo." reais";
        }else if($this->saldo < 0){
            echo "você tem debitos a pagar, -".$saldo;
        }else{
            $this->status = false;
            echo "conta fechada";
        }
    }
    //antes de depositar verifica se a conta está aberta, se tiver.. consegue depositar
    public function depositar($valor){
        if($this->status = true){
            $valor + $this->saldo = $this->saldo; 
        }else{
            echo "impossivel depositar";
        }
    }
    //metodo sacar 
    public function sacar($valor){
        if($this->status = true){
            if($this->saldo > 0){
                $valor - $this->saldo = $this->saldo;
            }else{
                echo "Nâo tem dinheiro em conta";
            }
        }else if($this->status = false){
            echo "abra uma conta!";
        }
    }
    //metodo pagar mensalidade, se for corrente vai ser 12, e se for poupança é 20
    public function pagarmensalidade($valor){
         if ($this->setTipo("CC")){
            $valor = 12;
         }else if($this->setTipo("CP")){
            $valor = 20;
         }
         if ($this->status = true){
            if ($this->saldo > $valor){
                $valor - $this->saldo = $this->saldo;
            }else{
                echo "saldo insuficiente";
            }
         }else{
            echo "abra uma conta";
        }
    }
    //metodos get e set 
    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta( $numConta) {
        $this->$numConta = $numConta;
    }

    public  function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->$tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono( $dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo( $saldo) {
        $this->saldo = $saldo;
    }

    public  function getStatus() {
        return $this->status;
    }

    public function setStatus( $status) {
        $this->status = $status;
    }

}