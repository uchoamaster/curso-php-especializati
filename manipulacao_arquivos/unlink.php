<?php

/* 
apagar um arquivo com o comando unlink PHP
 */


//comando para deletar arquivos muito importante para verificar se vc tem permissão total para tal ação
//normalmente um servidor web compartilhado não deixa vc efetuar estes comando online


//unlink("new-copy.txt");

//se eu atualizar novamente, ele dará erro, para evitar isso eu posso fazer uma verificação para ver se tem o arquivo ainda
/*
if (file_exists("new-copy.txt")) {
    unlink("new-copy.txt");
}else{
    echo " O arquivo não existe";
}
 * 
 */
//basicamente chegou o seguinte, " se existe o arquivo no caso "new-copy.txt" então delete o arquivo caso não tenha então aparece a msg.
// efetuando essa verificação acabaa que não aparece mais msg de erro no sistema

//podemos fazer de outra maneira tb, criando uma variável e renomeando o msm
$file = "new.txt";

if (file_exists($file)) {
    unlink($file);
    echo "Arquivo deletado com sucesso!";
}else{
    echo " O arquivo $file não existe";
}
