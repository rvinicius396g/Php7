<?php
/*
    Para que possamos usar classes, em diretórios diferentes usamos o 
    spl_autoload_register
*/
function incluirClasses($nomeClasse){

    if (file_exists($nomeClasse . ".php") === true) {
     require_once($nomeClasse . ".php");
}
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasse){

    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . "php") === True){
        require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . "php");
    }
});
    $carro = new DelRey();
    $carro->acelerar(80);
?>