<?php

header("Content-Type: image/png");

/*
imagecreate()
1º parametro altura
2º parametro largura
*/
$image = imagecreate(256,256);

//definindo as cores no formado RGB
$black = imagecolorallocate($image,0,0,0); //cor preta
$red = imagecolorallocate($image,255,0,0); //cor vermelha


/*
    Escrevendo na tela
    1º parametro = a image
    2º parametro = tamanho da fonte (de 1 à 5)
    3º parametro = Eixo X, margim esquerda
    4º parametro = Eixo Y, topo
    5º parametro = "texto"
    6º parametro = a cor
*/
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red );

//informando o formato da ser gerado
imagepng($image);
imagedestroy($image);
?>