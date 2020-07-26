<?php
    header("Content-type: image/jpeg"); //faz conversão para JPEG

    $file = "wallpaper.jpg";

    $new_width = 256; //256 px
    $new_height = 256; //256 px

    //getimagesize() retorna as informações sobre a imagem
    //var_dump(getimagesize($file)); 

    // comando abaixo faz o mesmo acima, no entanto, por array
    list($old_width, $old_height) = getimagesize($file);

    //imagecreatetruecolor carrega a palet de 16milhões de cores
    $new_image = imagecreatetruecolor($new_width, $new_height);
    $old_image = imagecreatefromjpeg($file);

/*  Criando o Thumbnail juntando 2 imagens

     imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , 
     int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h ) : bool 
     
     1º parametro = Qual é a nova imagem
     2º parametro = Qual a imagem de origem ?
     3º parametro = 


*/

    imagecopyresampled($new_image, $old_image, 0,0,0,0, $new_width, $new_height, $old_width, $old_height);
    imagejpeg($new_image);

    imagedestroy($old_image);
    imagedestroy($new_image);


?>