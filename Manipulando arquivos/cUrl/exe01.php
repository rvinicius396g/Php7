<?php
/*
O cURL é uma ferramenta para criar requisições em diversos protocolos (incluindo HTTP, HTTPS e FTP, entre muitos outros) e obter conteúdo remoto
*/
    $cep = "08051630";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // CURLOPT_RETURNTRANSFER > indica que foi enviado algo e deja o retorno
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // CURLOPT_SSL_VERIFYPEER > verifica se o site tem certificado SSL, no caso foi como falso para n verificar
    /*
    1º paremtro = variavel curl
    2º paremtro AGUARDO RETORNO
    3º paremtro SE DESEJA RECEBER O RETORNO> 1 VERDADEIRO 0 FALSO
    */

    $response = curl_exec($ch); // executa
    curl_close($ch); //para encerrar a conexão

    $data = json_decode($response, true); //Analisa a string codificada JSON e converte-a em uma variável do PHP. 

    print_r($data);

?>