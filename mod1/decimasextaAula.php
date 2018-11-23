<?php

/* 
função com passagem de parametro
 */


$nome   = "Carlos";
$sobrenome = "Uchôa";
mostraNome("$nome", "$sobrenome");
echo "<br>";
mostraNome("Outro", "$sobrenome");
echo "<br>";
mostraNome("$nome", "$sobrenome");
echo "<br>";
mostraNome("$nome", "$sobrenome");



function mostraNome($nome, $sobrenome){
    echo "$nome $sobrenome";
}
