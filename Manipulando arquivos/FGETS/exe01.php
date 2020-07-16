<?php
    //LENDO CONTEÚDO DE ARQUIVOS LINHA POR LINHA
    $filename = "usuarios.csv";

    if(file_exists($filename)){ //verifica se o arquivo existe
        $file = fopen($filename, "r"); // r = leitura
        $headers = explode(",",fgets($file)); //pegar cabeçalho, só primeira linha
                                            // explode defaz a junção através das virgulas, feito anteriormente pelo implode()

        //var_dump($headers);
        $data = array();
        while($row = fgets($file)){
            $rowData = explode("," , $row);
            $linha = array();

            for($i = 0; $i < count($headers); $i++){
                $linha[$headers[$i]] = $rowData[$i];
            }

            array_push($data, $linha);

        }
        fclose($file);
        echo json_encode($data);
    }

?>