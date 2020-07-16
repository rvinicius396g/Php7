<?php
    try{
        //Estabelecendo conexão com MySql
        $conn = new PDO("mysql:host=localhost;dbname=db_php7","root","");

        //Alterando dados no Banco de dados
        //$stm = $conn->prepare("UPDATE tb_usuarios SET deslogin = :pparam WHERE idusuario = :sparam");
        $stm = $conn->prepare("UPDATE tb_usuarios SET deslogin = :pparam");
        $cliente = "magalhães";
        $idusuario = 6;

        $stm->bindParam(":pparam",$cliente);
        //$stm->bindParam(":sparam",$idusuario);
        $stm->execute();

        echo 'alterado';
    }catch(PDOException $e){
		echo $e->getMessage();
	}

?>