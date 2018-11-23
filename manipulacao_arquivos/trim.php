<?php

/* 
removendo espaços em strings com o comando trim no PHP
 */


// é possivel remover espaços do inicio do meio e do fim de uma string com o trim

$var = ' String qualquer com espaços ';

var_dump($var);
echo "<br>";

$var =  trim($var);
echo "<br>";
var_dump($var);