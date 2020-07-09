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
    // $usuario = new usuario();
    // $usuario->login("jose","123r55");
    // echo $usuario;

    //Inserindo dados no banco com DAO
    // $aluno = new Usuario("aluno2","Kmdez");
    // $aluno->setDeslogin("aluno");
    // $aluno->setDessenha("@asd");
    // $aluno->insert();

    // echo $aluno;


    //CRIANDO UPDATE
    $usuario = new Usuario();
    $usuario->loadbyId(4);
    $usuario->update("professor","21321");

    echo $usuario;
?>