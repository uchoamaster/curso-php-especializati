<?php

/* 
Manipulação Arrays 2
 */
echo "<pre>";
//cria o array
$arrayNovo = [6,7,8,9];
//debuga o array
var_dump($arrayNovo);
//remove o primeiro elemento do array
array_shift($arrayNovo);
//debuga o array
var_dump($arrayNovo);
//adicionar um novo valor em um array
array_unshift($arrayNovo, 90);
var_dump($arrayNovo);

//adicionar um novo valor em um array
array_unshift($arrayNovo, 80);
var_dump($arrayNovo);
echo "</pre>";