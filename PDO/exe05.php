<?php
    try{
        //Estabelecendo conexão com MySql
        $conn = new PDO("mysql:host=localhost;dbname=db_php7","root","");

        //DELETANDO DADOS
        $stm = $conn->prepare("DELETE FROM tbl_usuarios WHERE deslogin = :nome");
        $dnome = "magalhães";
        $idusuario = 5;

        $stm->bindParam(":nome",$dnome);
        $stm->execute();
        echo 'deletado';

    }catch(PDOException $e){
		echo $e->getMessage();
	}

?>