<?php
//excluindo arquivos
$file = fopen("test.txt","w+");
fclose($file);


unlink("test.txt"); //remove o arquivo, o parametro deve ser igual ao nome do arquivo e não a sua variável

echo "Arquivo removido com sucesso!";


?>