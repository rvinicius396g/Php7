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
                
                $this->setData($resultado[0]);

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
        // public function __construct($Login="", $password=""){
        //     $this->setData($Login);
        //     $this->setDessenha($password);
        // }

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

                $this->setData($results[0]);

            }else{
                throw new Exception("Login e/ou senha inválidos");
            }
        }

        public function setData($data){
            $this->setIdusuario($data['idusuario']);
            $this->setDeslogin($data['deslogin']);
            $this->setDessenha($data['dessenha']);
            $this->setDtCadastro(new dateTime($data['dtcadastro']));
        }
        public function insert(){
            $sql = new Sql();
            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :SENHA)",array(
                ":LOGIN"=>$this->getDeslogin(),
                ":SENHA"=>$this->getDessenha()
            ));

            if(count($results) > 0){

                $this->setData($results[0]);

            }
        }
        public function update($login, $password){
            $this->setDeslogin($login);
            $this->setDessenha($password);

            $sql = new Sql();
            $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha(),
                ":ID"=>$this->getIdusuario()
            ));
        }
        
        

    }
?>



























