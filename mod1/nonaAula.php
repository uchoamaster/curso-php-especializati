<?php

/* 
IF e ELSE
 */
$var1 =  2;
$var2 = '2';
$var3 = 2;

if ($var1 == $var3) {
    echo 'Os valores são iguais';
}
echo "<br>";
echo "<hr>";
if ($var1 === $var2) {
    echo 'Os valores são iguais';
}else{
    echo 'Os valores não são iguais';
}

echo "<br>";
echo "<hr>";
if ($var1 != $var2) {
    echo 'Os valores são iguais';
}else{
    echo 'Os valores não são diferentes';
}
echo "<br>";
echo "<hr>";

/*
 * O IF VERIFICA SE A INSTRUÇÃO E VERDADEIRA SE FOR VERDADEIRA ELE EXECUTA UMA AÇÃO PARA TAL
 * SENÃO FOR, ELE ENTRA NO ELSE EXECUTA OUTRA AÇÃO PRÉ-DEFINIDA NELE.
 * 
 */


$varTeste = 6;
if ($varTeste == 2) {
    echo "É igual a 2";
}else if($varTeste == 6){
    echo " É igual a 6";
}else{
    echo " É diferente";
}
echo "<br>";
echo "<hr>";   
