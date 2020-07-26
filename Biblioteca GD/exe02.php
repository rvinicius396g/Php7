<?php

    $img = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($img, 0,0,0);
    $gray = imagecolorallocate($img, 100, 100, 100);

    imagestring($img, 5,450,150,"CERTITICADO", $titleColor);
    imagestring($img, 5,440,350,"Roberto Vinicius", $titleColor);
    imagestring($img, 3,443,370,utf8_encode("Concluido em: ").date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");
    //gera a imagem para visualização na tela
    // 2º parametro salvando fisicamente
    // 3º parametro> de 0 a 100 a qualidade
    imagejpeg($img, "certificado-".date("Y-m-d").".jpg");
    imagedestroy($img);

?>