<?php

/* 
Remover e adicionar elementos no final do array
 */

//cria um novo array
$arrayManipulavel = [1,2,3,4,5,6];
//debuga o array criado 
var_dump($arrayManipulavel);
//remove o ultimo elemento do array
array_pop($arrayManipulavel);
//debuga o array
var_dump($arrayManipulavel);


//adiciona um novo elemento em um array

array_push($arrayManipulavel, 9);
var_dump($arrayManipulavel);