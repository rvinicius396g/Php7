<?php

    try{
        throw new Exception("Houve um erro",400); //Gerar nova exeção 1º parametro mensagem | 2º parametro código
    }catch(Exception $e){ //joga o erro para variável $e
        echo json_encode(array(//retorna para o erro em um JSON
            "message"=>$e->getMessage(),
            "line"=>$e->getLine(),
            "file"=>$e->getFile(),
            "code"=>$e->getCode()
        ));
    }

?>