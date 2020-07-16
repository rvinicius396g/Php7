<?php
    /*
    Configuarando conexão do php com o DB
    instânciamos a classe mysqli
        >1º parametro, o servidor
        >2º parametro, o usuario
        >3º parametro, a senha
        >4º parametro, o banco
    */
    $conn = new mysqli("localhost", "root", "","db_php7");

    if ($conn->connect_error){
        echo "Erro: ".$conn->connect_error;
    }
    //Inserindo informações dentro do banco de dados
    $stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?,?)"); //não passamos os valores na query, devemos usar o comando bind_param com parametros
    $stmt->bind_param("ss",$login,$pass); //1º parametro, tipo de dado | 2º parametro o primeiro resultado especificado por ? e depoiso segundo resultado ?
     $login = "user";
     $pass = "12354";

    $stmt->execute();

    $login = "user2";
    $pass = "12354";

    $stmt->execute();
?>