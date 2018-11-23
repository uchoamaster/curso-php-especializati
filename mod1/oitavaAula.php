<?php

/* 
Operadores Lógicos
 */

var_dump(1 == 1 AND 2 == 2);
echo "<br>";
var_dump(2 == 1 AND 2 == 2); // operador AND ambos os lados tem que ser verdadeiro para retornar TRUE
echo "<br>";
var_dump(1==1 OR 2==2); // se um dos lados for verdadeiro , caso contrario retorna false
echo "<br>";
var_dump(1==2 OR 2==2); // se um dos lados for verdadeiro , caso contrario retorna false
echo "<br>";
var_dump(1==2 OR 3==2); // se um dos lados for verdadeiro , caso contrario retorna false
echo "<br>";
var_dump(1==2 XOR 2==2); // bem semelhante ao OR, não é mt utiliazado
echo "<br>";
var_dump(!2==2); // ta verificando se e dizendo que esse numero 2 nao é igual ao outro por isso retorna false
echo "<br>";
var_dump(2==2);
echo "<br>";
var_dump(2==2 && 1==1);// verifica se um lado é igual ao outro lado, && é a mesma coisa que AND.  " E "
echo "<br>";
var_dump(2==2 || 1==1);// verifica se um lado é igual ao outro lado, || é a mesma coisa que OR. " OU "