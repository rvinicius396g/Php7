<?php
/*
    Polimorfismo > é quando um metódo com mesmo nomes tem comportamentos diferentes
    Do grego = muitas formas.
*/
    //abstract só pode ser usado se extendendo 
    abstract class Animal{
        public function falar(){
            return "Som";
        }

        public function mover(){
            return "Andar";
        }
    }

    class Cachorro extends Animal{
        public function falar(){
            return "Late";
        }
    }
    class Gato extends Animal{
        public function falar(){
            return "Mia";
        }
    }
    class Passaro extends Animal {
        public function falar(){
            return "Cantar";
        }
        public function mover(){
            /*
            Parente indica que é a ação padrão do PAI (animall) + Voar o polimorfismo do Passaro
            */
            return "Voa e ".parent::mover();       
        }
    }


    $pluto = new Cachorro();
    echo $pluto->falar()."<br>";
    echo $pluto->mover();
    echo "<hr>";
    $garfield = new Gato();
    echo $garfield->falar()."<br>";
    echo $garfield->mover();
    echo "<hr>";
    $passaro = new Passaro();
    echo $passaro->falar()."<br>";
    echo $passaro->mover();
?>
