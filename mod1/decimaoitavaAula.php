<?php

/* 
função recursiva
 */

// a função recursiva é utilizada para devolver um valor para mim, exemplo abaixo mostrará melhor.
// no caso de uma função recursiva é utilizado o  return como parametro para retornar algo da function e mostrar que ela eh recursiva.

//echo funcaoRecursiva();

//function funcaoRecursiva(){
  //  return 'teste';
//}


echo funcaoRecursiva('Carlos Uchôa - Programador');

function funcaoRecursiva($nome){
    return $nome;
}