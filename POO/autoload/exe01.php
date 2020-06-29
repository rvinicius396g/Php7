<?php
    

/*
    Antigamente, faziamos da seguinte maneira a inclusão de arquivos
    require_once("DelRey.php");

    No entanto, o código pode ficar muito extendo, para não ter essa situação
    podemos usar o autoload;
*/
//OBS: Esse metódo busca classes dentro da mesma pasta
function __autoload($nomeClasse){
   require_once("$nomeClasse.php");
}
    $carro = new DelRey();
    $carro->acelerar(80);
?>