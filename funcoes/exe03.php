<?php
    $pessoa = array(
        "nome" => "João",
        "idade" => 22
    );

    foreach ($pessoa as &$valor){
        if (gettype($valor) === 'integer') $valor +=10;
        echo $valor."<br>";
    }
    print_r($pessoa);
?>