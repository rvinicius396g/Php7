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

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $data = array();

    while ($row = $result->fetch_assoc()){
        array_push($data, $row);
    }

    echo json_encode($data);
?>