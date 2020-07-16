<?php
    /*  1º parâmetro o arquivo
        2º Ler ou alterar o arquivo
    */
    $file = fopen("log.txt","w+"); // w+ = Abre para leitura e escrita, o (+) cria o arquivo se não houver

    fwrite($file, date("Y-m-d H:i:s")); 
    /*
       fwrite escreve no arquivo
       1º parametro o arquivo
       2º os dados a serem colocados
    */
    //Após escrito, devemos liberar a memória, fechando o arquivo
    fclose($file);
?>