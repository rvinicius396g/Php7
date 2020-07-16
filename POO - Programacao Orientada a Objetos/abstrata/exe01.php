<?php
    /*
    Classe abstratda não é instânciada pelo objeto, mas ela pode extender para outra classe

    Diferença entre classe e interface
        >Uma classe pode implementar várias interfaces
        >Um classe vai erdar só de uma classe abstrata
    */

    interface veiculo {
        //metodo
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }
    //Quando usado classe abstract, deve-se dar extend na mesma para utilizar seus metódos, diretamente o Php barra
    abstract class Automovel implements Veiculo{
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
    
    class DelRey extends Automovel{
        public function empurrar()
        {

        }

    }

    $carro = new DelRey();
    $carro->acelerar(200);
?>

?>