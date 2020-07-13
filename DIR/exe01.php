<?php

    $name = "images";
    if(!is_dir($name)){
        mkdir($name); //cria o diretório (pasta)
        echo "diretório criado com auscesso";
    }else{
        rmdir($name); //remove o diretório
        echo "Jà existe o diretório: diretório apagado $name";
    }

?>