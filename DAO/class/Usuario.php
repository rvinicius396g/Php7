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
        //Função Static
        public static function getList(){
            $sql = new Sql();
            
            return $sql->select("select * from tb_usuarios order by deslogin;");
        }
        public static function search($login){
            $sql = new Sql();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH",array(
                ":SEARCH"=>"%".$login."%"
            ));
        }

        public function __tostring(){
            return json_encode(array(
                "idusuario"=>$this->getIdusuario(),
                "deslogin"=>$this->getDeslogin(),
                "dessenha"=>$this->getDessenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));
        }

        public function login($login,$password){
            $sql = new Sql();
            
            $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :ID AND dessenha = :PASS",array(
                ":ID"=>$login,
                ":PASS"=>$password
            ));

            if(count($results) > 0){
                $row = $results[0];

                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtCadastro(new dateTime($row['dtcadastro']));

            }else{
                throw new Exception("Login e/ou senha inválidos");
            }
        }
        
        

    }
?>



























