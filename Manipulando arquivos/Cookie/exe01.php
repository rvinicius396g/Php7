<?php
    /*
    Cookie são arquivos de texto que são armazenados na máquina do cliente.
    */
    $data = array(
        "empresa"=>"Hcode Treinamentos"
    );
    
    
    setcookie("NOME_DO_COKIE", json_encode($data), time() + 3600); 
    /*
            1º parametro = definindo o nome 
            2º parametro = Dados que serão armazenados
            3º parametro = Quanto tempo o mesmo vai permanacer em timestamp
    */
    echo "OK";
    
?>