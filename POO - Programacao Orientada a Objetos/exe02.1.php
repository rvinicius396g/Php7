<?php
    class Aposentadoria{
        private $nome;     
        private $idade;
        private $sexo;

        //Metódos
        public function getNome(){
            return $this->nome;
        }
        public function getIdade():int{
            return $this->idade;
        }
        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($n){
            $this->nome = $n;
        }
        public function setIdade($i){
            if($i >=18){
                $this->idade = $i;
            }else{
                $this->idade = 0;
            }
        }
        public function setSexo($s){
            $this->sexo = $s;
        }
        
        public function exibir(){
            return array(
                "nome"=>$this->getNome(),
                "idade"=>$this->getIdade(),
                "sexo"=>$this->getSexo()
            );
        }
    }

    $joao = new Aposentadoria();
    $joao->setNome("Idade");
    $joao->setIdade("12");
    $joao->setSexo("Masculino");
var_dump($joao->exibir());


?>