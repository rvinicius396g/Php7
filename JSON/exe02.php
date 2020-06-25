<?php
    //Transformando JSON em Array
    $json = '[{"nome":"vinicius","idade":22},{"nome":"lucas","idade":18},{"nome":"Marcos","idade":27}]';

    $data = json_decode($json,true);

    var_dump($data)


?>