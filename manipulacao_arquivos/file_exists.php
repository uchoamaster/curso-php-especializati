<?php

/* 
file exists
 */

// ele verifica onde possui arquivos pelo php

// quero verificar se o arquivo txt existe
/*
if (file_exists("carlos_teste.txt")) {
    
    echo "O arquivo existe";
}else{
    "O arquivo não existe";
}
*/
// pode utilizar uma variavel tb para identifcar o nome.

$arquivoNome = "carlos_teste.txt";
if (file_exists($arquivoNome)) {
    
    echo "O arquivo existe";
}else{
    "O arquivo não existe";
}