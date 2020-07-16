<?php
/*
    Encapsulamento > Utilizado para modificar quem pode ou não ter acesso a determinado método
    public...
    protected....
    private... 

    Resalvas;
        -Public > Todos tem acesso
        -protected > Só tem acesso aquele metódo que pertence a essa classe ou atributo que herda
        -private > Só a propria classe tem acesso, nem se quer os herdeiros acessam

*/
    class Pessoa{
        public $nome = "Rasmus Lerdorf";
        protected $idade = 48;
        private $senha = "123456";

        public function verDados(){
            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";
        }

    }

    class Programador extends Pessoa{
        public function verDados(){
            echo get_class($this)."<br>";
            echo $this->nome."<br>";
            echo $this->idade."<br>";
            echo $this->senha."<br>";
        }
    }
    $objeto = new Programador(); 
    $objeto->verDados();//verDados não pertence ao metódo Programador, todavia, extends de Pessoa

?>