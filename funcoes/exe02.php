<?php
    //Parâmetros por valor X por referência


    //Exemplo padrão de passagem por valor
$a = 10;
function trocaValor($a){
    $a += 50;
    return $a;        
}
    echo trocaValor($a);


    //Exemplo comum de passagem por referência
    $a = 10;
    function Troca(&$b){
        $b+=50;

        return $b;
    }

    echo Troca($a);
    echo $a;

?>