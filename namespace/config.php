<?php
    spl_autoload_register(function($nomeClass){
        $dirClass = "class";
        $filename = $dirClass .DIRECTORY_SEPARATOR. $nomeClass."php";
        
        if(file_exists($filename) === True){ // se verdadeiro

            require_once($filename);
        }
    });
?>