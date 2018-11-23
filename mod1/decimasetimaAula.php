<?php

/* 
função com passagem de parametro opcional
 */


//se vc nãopassar os parametros exigidos, acaba dando erro 
//
//


mostraNome("Carlos", "Uchôa");
function mostraNome ($nome, $sobreNome){
    echo "$nome $sobreNome";
}


echo "<br>";
// passando uma função sem nome, com campo vazio para ver o que acontece.
// deixando dessa maneira, ele acaba adicionando parametros, como o sobrenome nao estava preenchido, ele recebeu 3 traços.
mostraNome2("Carlos");
function mostraNome2 ($nome, $sobreNome = '---'){
    echo "$nome $sobreNome";
}