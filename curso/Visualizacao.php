<?php 
    require_once "Video.php";
    require_once "Usuario.php";
    //a funcao dessa classe é "unir" o usuario e o video que ele esta assistindo
    class Visualizacao{
        private $espec;
        private $filme;

        public function __construct($espec, $filme)
        {
            $this->espec= $espec;
            $this->filme= $filme;
            $this->filme->setViews($this->filme->getViews() +1);
            $this->espec->setTotAssistido($this->espec->getTotAssistido() + 1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);

        }

        public function avaliarPorc($porc){
            $nota = 0;
            if ($porc <= 20){
                $nota = 3;
            }elseif ($porc <= 50){
                $nota = 5;
            }elseif( $porc <= 90){
                $nota = 8;
            }else{
                $nota = 10;
            }
            $this->filme->setAvaliacao($nota);
        }

        public function getEspec()
        {
            return $this->espec;
        }

        public function setEspec($nome)
        {
            $this->espec = $nome;

        }

        public function getFilme()
        {
           return $this->filme;
        }

        public function setFilme($filme)
        {
            $this->filme = $filme;
   
        }
    }

?>