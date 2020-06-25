<?php
    require_once("config.php");

    //Limpa o usuário da sessão
   // unset($_SESSION["nome"]);
    //Mata a sessão
   // session_destroy($_SESSION["nome"]);
    echo $_SESSION["nome"];

?>