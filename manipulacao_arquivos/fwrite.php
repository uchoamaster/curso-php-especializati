<?php

/* 
fwrite - comando para escrever em um arquivo.txt e/ou etc
 */
// o parametro w, atualiza o texto dentro do arquivo existente alterando tudo que estava escrito anteriormente 
// o parametro r, apenas faz a leitura do arquivo e do texto contido no mesmo
// o paramentro a, além de escrever no arquivo, caso ele não exista, ele cria o arquivo e já pôe o texto que foi sugerido. e toda vez que a pessoa atualizar a pagina o append acrescenta o texto novamente no mesmo arquivo.
$abre = fopen('carlos_teste.txt', 'w');
fwrite($abre, "novo conteudo atualizado no arquivo");

fclose($abre);



