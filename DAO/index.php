<?php

    require_once("config.php");

    // $sql = new sql();
    // $usuarios  = $sql->select("SELECT * FROM tb_usuarios");

    // echo json_encode($usuarios);

    //Carrega um usuário com a sua chave primaria
    // $root = new Usuario();
    // $root->loadbyId(3);
    // echo $root;

    //Carrega uma lista de usuários. Por ser statico, basta usar o ::getList()
    // $lista = Usuario::getList();
    // echo json_encode($lista);

    //carrega uma lista de usuarios buscando pelo login
    // $search = Usuario::search("jo");
    // echo json_encode($search);

    //Carregar usuario usando login e senha

    $usuario = new usuario();
    $usuario->login("jose","123r55");
    echo $usuario;
?>