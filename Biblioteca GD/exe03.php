<?php

    $img = imagecreatefromjpeg("certificado.jpg");

    $titleColor = imagecolorallocate($img, 0, 0, 0);
    $gray = imagecolorallocate($img, 100, 100, 100);
/*
    Para a função imagettftext() o 3º parametro é para dizer o ãngulo da fonte (diag, normal ,etc.. )
*/
    imagettftext($img, 32, 0, 320, 250, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR.
    "Bevan-Regular.ttf","CERTITICADO");

    // imagettftext($img, 32,0,440,350, $titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR.
    // "Playball-Regular.ttf","Divanei Aparecido");

    imagestring($img, 3,440,370,utf8_encode("Concluido em: ").date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");
    imagejpeg($img);
    imagedestroy($img);

?>