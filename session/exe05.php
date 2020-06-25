<?php
    require_once("config.php");

    //Local em que a sessão está sendo salva
    echo session_save_path();
    echo '<br>';

    var_dump(session_status()) //02 siginifica que estao ativas e em us

?>