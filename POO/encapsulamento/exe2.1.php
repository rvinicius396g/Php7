<?php
    class Cveiculo{
        public $nome;
        protected $valor;
        public $ano;

        public function setNome($n){
            $this->nome = $n;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function setValor($v){
            $this->valor = $v;
        }
        public function getValor(){
            return $this->valor;
        }
        public function setAno($a){
            $this->ano = $a;
        }
        public function getAno():int{
            return $this->ano;
        }
    }
    class Iveiculos extends Cveiculo{
        private $saldo=150200;

        public function getSaldo(){
            return $this->saldo;
        }

        public function comprarveiculo($a){
            //if($a === getNome()){
                $tot =  $this->getValor();

                return $tot;
           // }
        }
        
    }

    $veiculo0 = new Iveiculos();
    $veiculo0->setNome("Fusca");
    $veiculo0->setValor(1500);
    $veiculo0->setAno("2015");

    //echo $veiculo0->getNome();
    var_dump( $veiculo0->comprarveiculo("Fusca"));



?>