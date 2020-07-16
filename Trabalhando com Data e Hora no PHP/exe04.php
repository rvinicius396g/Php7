<?php
    $dt = new DateTime(); //instância para exibir a data

    //cria um novo período de data, de 15 dias
    $periodo = new DateInterval("P15D");

    //Mostra a data atual, com hora ,minutos e segundos
    echo $dt->format("d/m/Y H:i:s"); 

    //add + 15 dias, a partir do dia de hoje
    $dt->add($periodo);

    echo $dt->format("d/m/Y H:i:s");

?>