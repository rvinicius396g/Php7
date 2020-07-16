<form method="POST" enctype="multipart/form-data">  <!-- Faz com que os arquivos sejam enviados de forma binária ao invés de string-->
    <input type="file" name="fileUpload"/> <!--Campod e Upload em HTML, PHP vai conhcer o atributo name-->
        <button type="submit">Send</button>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){ //identifica se foi realizado um POST, ou seja, envio do arquivo
        
        $file = $_FILES["fileUpload"]; //pega o arquivo do input

        if($file["error"]){ //verifica se houve erro, se houver, ele exibe qual foi pelo array error
            throw new Exception("Error: ". $file["error"]);
        }

        $dirUploads = "uploads"; //diretório onde vão ficar os uploads

        if( !is_dir($dirUploads)){//se não houve o diretório, ele cria no mkdir
            mkdir($dirUploads); //1º parametro do mkdir é o nome da pasta/diretório, 2º parametro as permissões
        }

        if(move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){ //tmp_name = arquivo temporário
            echo "Upload realizadocom sucesso";
        /*  1º parâmetro = arquivo temporário
            2º para onde o arquivo vai ficar?
        */
        }else{
            throw newException("Não foi possível fazer o upload");
        }
    }

?>