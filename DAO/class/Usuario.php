<?php
    class usuario{

        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;


        public function getIdusuario(){
            return $this->idusuario;
        }
        public function setIdusuario($value){
            $this->idusuario = $value;
        }
        
        public function getDeslogin(){
            return $this->deslogin;
        }
        public function setDeslogin($value){
            $this->deslogin = $value;
        }
        public function getDessenha(){
            return $this->dessenha;
        }
        public function setDessenha($value){
            $this->dessenha = $value;
        }
        public function getDtCadastro(){
            return $this->dtcadastro;
        }
        public function setDtCadastro($value){
            $this->dtcadastro = $value;
        }
        
        public function loadByID($id){
            $sql = new Sql();
            $resultado = $sql->select("select * from tb_usuarios where idusuario= :ID",array(
                ":ID"=>$id
            ));
            if (count($resultado) > 0){
                $row = $resultado[0];

                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtCadastro(new DateTime($row['dtcadastro']));
            }
        }

        public function __tostring(){
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }
        
        

    }
?>