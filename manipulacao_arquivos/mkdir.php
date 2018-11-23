<?php

/* 
Manipular diretórios ( mkdir, getcwd, chdir) tudo com o PHP
 */
//cria um novo diretório = pasta de arquivos
//mkdir("carlosuchoa");
// mostro o diretório que estou localizado

 echo getcwd();
 
 
 //no caso ele mostra onde estou localizado desde a raiz
 //C:\xampp\htdocs\cursophp\manipulacao_arquivos
 
 //posso mover de um diretorio para o outro e tb posso usar o comando para verificar a alteração realizada anteriormente.
//conforme exemplo abaixo
 
 chdir("carlosuchoa");
 
 echo "<br>".getcwd();