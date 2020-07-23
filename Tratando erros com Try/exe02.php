<?php
    function trataNome($nome){
        if(!$nome){
            throw new Exception("nenhum nome foi informado",1);
        }

        echo ucfirst($nome)."<br>";
    }

    try{
        trataNome("joao");
        trataNome("");
    }catch(Exception $e){
        echo $e->getMessage();
    }finally{ //Opc, sempre executa após o try/catch
        echo "<br><br>Executou o Try!";
    }


?>