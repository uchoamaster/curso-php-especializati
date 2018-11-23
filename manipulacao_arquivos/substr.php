<?php

/* 
Manipulação de String - Pega uma parte da String
 */

//verificar apenas parte de uma string com este comando 


$var = 'Carlos';
//com isso ela faz leitura apartir do caractere que eu peço para ele efetuar a leitura dessa maneira aparece apenas "rlos"
echo substr($var, '2');
echo "<br>";
//com isso ela faz leitura de todos os caracteres no caso aparecerá a palavra Carlos completa
echo substr($var, '0');
echo "<br>";
// para mostrar apenas os 3 ultimos caracteres da minha sting, basta eu colocar o numero negativo segue exemplo.
echo substr($var, -2);



