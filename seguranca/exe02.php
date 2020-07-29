<?php
    $id = (isset($_GET["id"]))?$_GET["id"]:3;

    if (!is_numeric($id)){
        exit("pegamos você");
    }
    $conn = new mysqli("localhost", "root", "","db_php7");
    $sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

    $exec = mysqli_query($conn, $sql);

    while ($resultado = mysqli_fetch_object($exec)){
        echo $resultado->deslogin."<br>";
    }

?>