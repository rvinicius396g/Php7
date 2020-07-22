<?php
    $link = "https://s2.glbimg.com/R76zXxiYe3i7CSlpz3KK3nfxYCg=/850x446/s2.glbimg.com/B7DdsQNmpyLalc6PL-a84Fb7Y9g=/695x0/s.glbimg.com/po/tt2/f/original/2015/09/02/primeiro-logo-do-google-trazia-um-ponto-de-exclamacao-no-final.png";

    $content = file_get_contents($link);

    //var_dump($content);

    $parse = parse_url($link); //Interpreta uma URL e retorna os seus componentes
    $basename = basename($parse["path"]); //Retorna apenas a parte que corresponde ao nome do arquivo de um caminho/path
    

    $file = fopen($basename,"w+");
    fwrite($file, $content);
    fclose($file);

?>
<!-- O sinal de igual, logo após enterrogação, significa echo simplicado em Php -->
<img src="<?=$basename?>"/>