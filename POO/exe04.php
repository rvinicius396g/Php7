<?php
    /*
        Trabalhando com métodos mágicos / método construtor
    */
    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        //método mágico ou método construtor
        /*
            Permite que nós possamos setar valores, ou seja, atribuir valores em a utilização de dos setters
        */
        public function __construct($a,$b,$c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){
            var_dump("DESTRUIR");
        }

        public function __tostring(){
            return $this->logradouro.", ".$this->numero." - ".$this->cidade;
        }

    }

    $meuendereco = new Endereco("Rua X","123","SP");

    //var_dump($meuendereco);

    //unset($meuendereco);

    echo $meuendereco;

?>