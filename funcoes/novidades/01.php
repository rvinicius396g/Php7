<?php
    //Passagem de vários valores por parãmetro no PHP7

    function soma(int ...$valores){ //o 03 pontinhos, determina como inteiro x ou mais x valores inseridos no parâmetro
        return array_sum($valores);      //array_sum() realiza a soma de todos valores passados por parâmetro
    }

   // echo soma(1,2,3);



//alterando o tipo de retorno

function soma2(int ...$valores):float{ // :float faz com que o retorno seja um float
    return array_sum($valores);
}

var_dump(soma2(1,2))




?>
