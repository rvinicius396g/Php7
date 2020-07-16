<?php
    //Criando primeira classe, sempre incia-se letra capital
    class Pessoa{ // classe
        public $nome; //atributo

        public function falar(){ //metódo

            return "O meu nome é ".$this->nome;
        }
    }


    $glaucio = new Pessoa();
    $glaucio->nome = "Glaucio Daniel";

    echo $glaucio->falar();
?>