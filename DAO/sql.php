<?php
    class Sql extends PDO {
        private $conn;
        
        public function __construct(){

            $this->conn = new PDO("mysql:host=localhost;dbname=db_php7","root", "");

        }

        private function setParams($statment, $parameters=array()){

            foreach($parameters as $key=>$value){
                $this->setparam($key,$value);
            }

        }
        private function setparam($statment, $key, $value){
            
            $statment->bindParam($key, $value);

        }
        public function query($rawQuery, $params=array()){

            $stmt=$this->conn->prepare($rawQuery);

            $this->setParams($stmt, $params);
            
            $stmt->execute();

            return $stmt;
        }
        public function select($rowQuery, $params= array()){
            $stmt = $this->query($rawQuery,$params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>