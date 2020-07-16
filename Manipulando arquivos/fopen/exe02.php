<?php

/*
    EXTRAINDO CONJUNTO DE DADOS PARA O CSV EXCEL

*/
    require_once("config.php");

    $sql = new Sql();
    $usuarios = $sql->select("SELECT * FROM tb_usuarios");

    $headers = array();

    foreach($usuarios[0] as $key => $value){
        array_push($headers, ucfirst($key)); //ucfirst() primeira letra maiuscula
    }
    $file = fopen("usuarios.csv","w+"); // w+ = Abre para leitura e escrita, o (+) cria o arquivo se não houver
        
        foreach($usuarios as $row){
            $data = array();

            foreach($row as $key => $value){
                array_push($data, $value);
            }//End for each de coluna

            fwrite($file, implode(",", $data)."\r\n");
            /*
                \n = nova linha
                \r = volta o cursor até o começo da linha
            */
        }//End foreach de linha
    
    fclose($file);
    /*
       fwrite escreve no arquivo
       1º parametro o arquivo
       2º os dados a serem colocados
    */

    echo implode(",",$headers); 
    /*implode() separa o array com algum separador solicitado
      1º parâmetro = o separador
      2º parametro = o array que vai sofrer as alterações
    */ 
    
?>