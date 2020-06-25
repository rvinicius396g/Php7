<?php
    class CalcApos{
        private $idade;
        private $nome;
        private $sexo;
        private $anonasc;

        public function getIdade():int{
            return $this->idade;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getSexo(){
            return $this->sexo;
        }
        public function getAnonasc():int{
            return $this->anonasc;
        }

        public function setIdade($i){
            $this->idade = $i;
        }
        public function setNome($i){
            $this->nome = $i;
        }
        public function setSexo($i){
            $this->sexo = $i;
        }
        public function setAnonasc($i){
            $this->anonasc = $i;
        }

        public function direitoApose(){
            $ano_atual = date("Y");
            
            if ($ano_atual - $this->getAnonasc() >= 30){
                return "$this->getNome() tem direito a aposentadoria";
            }else{
                return "Você não tem direito a aposentadoria ainda";
            }
        }
    }
    
    $usuario01 = new CalcApos();
    $usuario01->setNome("Vinicius");
    $usuario01->setSexo("Femenino");
    $usuario01->setIdade(22);
    $usuario01->setAnonasc(1997);
    echo $usuario01->direitoApose();


?>