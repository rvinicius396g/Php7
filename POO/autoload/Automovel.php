<?php
    interface veiculo {
        //metodo
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarMarcha($marcha);

    }
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
?>