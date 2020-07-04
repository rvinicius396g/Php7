<?php
    try{
        //Estabelecendo conexão com MySql
        $conn = new PDO("mysql:host=localhost;dbname=db_php7","root","");

        //Inserindo dados no Banco de dados
        $stm = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGINs, :PASSOWORD)");
        $login = "jose";
        $pass = "123r55";

        $stm->bindParam(":LOGINs",$login);
        $stm->bindParam(":PASSOWORD",$pass);
        $stm->execute();

        echo 'cadastrado';
    }catch(PDOException $e){
		echo $e->getMessage();
	}

?>