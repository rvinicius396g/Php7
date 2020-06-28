<?php
    class Carros {//Clas

        private $modelo;            //
        private $nome;              // Atributos
        private $ano;               //
        private $valor;             //

        public function getModelo(){    // metódo
            return $this->modelo;
        }
        public function getAno():int{
            return $this->ano;
        }
        public function getNome():string{
            return $this->nome;
        }
        public function getValor():float{
            return $this->valor;
        }
        public function setModelo($a){
            $this->modelo = $a;
        }
        public function setNome($a){
            $this->nome = $a;
        }
        public function setAno($a){
            $this->ano = $a;
        }
        public function setValor($a){
            $this->valor = $a;
        }


    }
    
/* Atribuição de valores, só funciona quando os atributos são públicos
    $car0 = new Carros();
    $car0->modelo = "GM";
    $car0->nome = "Camaro";
    $car0->valor = 2500;
*/

    $car0 = new Carros();
    $car0->setModelo("GM");
    $car0->setValor("1000000");
    $car0->setAno("2015");
    $car0->setNome("Camaro");
    var_dump($car0->getModelo());
    var_dump($car0->getNome());
    var_dump($car0->getAno());    
    var_dump($car0->getValor());
?>