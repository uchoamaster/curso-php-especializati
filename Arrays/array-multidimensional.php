<?php

/* 
Array MultiDimensionais.
 */


//Matrizes  ou Arrays Multidimensionais
//declarando uma matrix, conhecido tb como array multidimensional
echo "<pre>";
$jogoDaVelha = [
   'coluna1'=> ['0','x','0','x','0','x'],
   'coluna2'=> ['x','0','x','0','x','0'],
   'coluna3'=> ['0','x','0','x','0','x'],
   'coluna4'=> ['x','0','x','0','x','0']
    
];

var_dump($jogoDaVelha);
echo "</pre>";


//imprimindo o tamanho da matrix

echo count($jogoDaVelha);

//listando o conteudo da matrix utilizando o foreach
foreach ($jogoDaVelha as $jogos) {
    echo count($jogos).'<br>';//atualizando a quantidade de vezes que foi feita a jogada.
    foreach($jogos as $jogada){
        echo "$jogada <br>";
    }
}