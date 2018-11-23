<?php

/* 
Manipulação de uma string - Alterar uma string com o comando str replace
 */

$var1 = 'Carlos Uchôa';
echo "$var1 <br>";


$var1 =  str_replace('Carlos', 'CARLOS', $var1);

echo "$var1 <br>";

$var1 =  str_replace(' ', '-', $var1);

echo "$var1 <br>";


//basicamente o str_replace substitui uma  ocorrencia de uma string dentro de um determinado contexto, vamos utilizar muito ele
//durante o desenvolvimento de sistemas.