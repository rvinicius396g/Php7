<?php
    //Trabalhando com transações
try{

    $conn = new PDO("mysql:host=localhost;dbname=db_php7","root","");
    //Indica o inicio de uma transação
    $conn->beginTransaction();
    $stm = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGINs, :PASSOWORD)");
    $login = "jose";
    $pass = "123r55";

    $stm->bindParam(":LOGINs",$login);
    $stm->bindParam(":PASSOWORD",$pass);
    $stm->execute();
    //Cancela as alterações previas
    // $conn->rollBack();

    ///Confirma as alterações realizadas
    $conn->commit();
    echo 'cadastrado';
}catch(PDOException $e){
    echo $e->getMessage();
}
?>