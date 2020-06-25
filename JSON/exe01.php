<?php
    $pessoas = array();

    array_push($pessoas,array(
        'nome'=>'vinicius',
        'idade'=>22
    ));
    array_push($pessoas,array(
        'nome'=>'lucas',
        'idade'=>18
    ));
    array_push($pessoas,array(
        'nome'=>'Marcos',
        'idade'=>27
    ));

    //Transforma Array em JSON
    echo json_encode($pessoas)
?>