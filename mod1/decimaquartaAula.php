<?php

/* 
 include/require/ include_once / require_once
 */


echo 'Sou o arquivo inclusoes';

//include 'arquivo.inc.php'; inclui paginas

//require('arquivo.inc.php'); // o include ele inclui, ja o require,se tiver problema no arquivo . ele mata a execução do progrmaa para baixo.
//  vou usar meu for feito anteriormente e ele tentara incluir este arquivo 10 vezes
for($i=0; $i <10; $i++){
include_once 'arquivo.inc.php'; // ele so inclui o mesmo arquivo uma unica vez. evita duplicidade. require_once do mesmo jeito tb.
// o include_once não deixa o arquivo repetir , ele nao repete de jeito maneira. por isso eh muito recomendado pois ele nao permite que o mesmo arquivo, seja repetido ou seja incluido na mesma pagina 2 vezes.
}

echo '<hr>Footer';



