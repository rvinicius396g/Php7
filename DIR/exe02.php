<?php

    $images = scandir("images"); //scaner o diretório e ver o que tem dentro da mesma

    $data = array();
     //var_dump($images);

     foreach ($images as $img){
         /* in_array > Faz uma busca dentro de um array
            1º Parametro = o alvo para fazer a busca
            2º Parametro = array() o que será desconsiderado
         */
         if(!in_array($img,array(".",".."))){ //exclamação ( ! ) indica negação

            $filename = "images".DIRECTORY_SEPARATOR.$img;
            $info = pathinfo($filename); //pathinfo retorna informações referente ao arquivo
            $info["size"]= filesize($filename); //filesize = retorna o tamanho do arquivo em mega
            $info["modified"] = date("d/m/Y H:i:s",filemtime($filename)); //filemtime> Quandoo arquivo foi modificado
            $info["url"] = "http://localhost/php7/DIR/".$filename;
            //var_dump($info);

            array_push($data,$info); //Inserir dados no array

         }
     }

     echo json_encode($data);
?>