<?php
/*
    Desativando as noticias a serem aparecidas
    mas, os erros continuam aparecendo

    tiozinho = negação
*/

error_reporting(E_ALL & ~E_NOTICE);
$nome = $_GET['a'];
echo $nome;

?>