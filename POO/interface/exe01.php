<?php
/*
    Interface determina o acordo que deve ser seguido de ponta a ponta para os metódos, ou seja, nome dos metódos a serem usados, tipo de encapsulamento, qtde de parãmetros...
*/
    interface veiculo {
        //metodo
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }

    class Civi implements Veiculo{
        public function acelerar($velocidade)
        {
            echo "o veiculo acelerou".$velocidade." Km/h";
        }
        public function frenar($velocidade)
        {
            echo "O veículo frenou até ".$velocidade." KM/h";
        }
        public function trocarMarcha($marcha)
        {
            echo "O veiculo engatou a marcha ".$marcha;
        }
    }
    $carro = new Civi();

    $carro->trocarMarcha(1)
?>