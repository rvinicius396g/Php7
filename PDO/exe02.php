<?php
//conectando ao SQL SERVER (erro nas DLL's)
    // 1º parametro: DB e servidor |2º user | 3º password
    $conn = new PDO('sqlsrv:Database=db_php7; server=localhost\SQLEXPRESS; ConnectionPooling=0','sa', 'root');

    //fazendo o select
    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $row){
        foreach ($row as $key => $value){
            echo $key.': '.$value."<br/>";
        }
        echo "<hr>";
    }
    var_dump($results);

?>