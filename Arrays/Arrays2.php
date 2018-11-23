<?php

/* 
Nova maneira de criar arrays e manipular os mesmos.
 */
// antes era assim
//$numerosMega = array();
$numerosmega = [1,2,6,9,0,45];

//var_dump($numerosmega[2]);

//para faciliar melhor a manipulação do array é necessario o foreach pois ele demonstrará melhor o mesmo

foreach ($numerosmega as $key => $numero) {
    echo "$numero <br>";
}

echo "<br>";
//caso eu queira ver a posição do array , é simples basta modificar o código e deixar assim

foreach ($numerosmega as $key => $numero) {
    echo "$key => $numero <br>";
}

// para saber o  tamanho de um array é fazer assim

echo "<br>";

echo count($numerosmega);

echo "<br>";
//aqui acrescentei mais 1 campo no array e dei um valor ao memso
$numerosmega[8] = 78;
//aqui refiz a contagem novamente
echo count($numerosmega);

echo "<br>";

//Imprime o Array novo
var_dump($numerosmega);