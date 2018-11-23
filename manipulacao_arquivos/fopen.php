<?php

/* 
 file open, abre arquivo de texto atraves de um editor de texto por comando via PHP
 */
// os arquivos podem ser abertos de 3 maneiras, r = só leitura, w = só escrita e a = se eu tentar abrir um arquivo que nao existe ele cria para mim
$abre = fopen("carlos_teste.txt","r" );

echo fgets($abre); // este comando abre o arquivo para leitura.

fclose($abre); // esse comando fecha o arquivo que estava em modo de leitura
