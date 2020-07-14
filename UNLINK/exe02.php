<?php
    //is_dir = se nao for um diretório
    if(!is_dir("images")) mkdir("images");    //criar pasta images

        foreach(scandir("images") as $item){ //scandir = ler um diretório e transforma em array
            if(!in_array($item,array(".",".."))){  //in_array — Checa se um valor existe em um array

                unlink("images/".$item); //unlink()> unlink — Apaga um arquivo
            }
        }
    

echo "OK";
?>