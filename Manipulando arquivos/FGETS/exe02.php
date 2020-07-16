<?php
    $filename = "logo.png";
    /*
    file_get_contents() Lê todo o conteúdo de um arquivo para uma string
    base64_encode — Codifica dados com MIME base64
    */
    $base64 = base64_encode(file_get_contents($filename));

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    $mimetype = $fileinfo->file($filename);

    $base64encode = "data:".$mimetype.";base64,".$base64;


?>

<a href="<?=$base64encode?>">Link para Imagem</a>
<img src="<?=$base64encode?>" alt="">