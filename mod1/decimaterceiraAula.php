<?php

/* 
Estrutura de repetição FOREACH
 */


//último loop de repetição possível

//no for nos tinhamos de  falar para começar de tal valor e teria determinadas funções, quando começa incrementa +1 ou decrementa -1
/// ja o foreach , é atrav´s de array

$arrayNumeros = [1,2,3,4,5,6,7,8];

//echo $arrayNumeros[0];
//desta maneira ele percorrerá todos os elementos do meu array de forma prática e rapida.
for($i = 0; $i < count($arrayNumeros);$i++){
    echo $arrayNumeros[$i];
}

echo '<hr>';

// agora vamos fazer isso com foreach e ver como fica mais fácil
// pedi aqui para pegar a variavel numeros e mudei ela para numero, e pedi para motrar esa nova variavel número, pronto , veja que facilidade.
foreach ($arrayNumeros as $numero){
    echo $numero;
}
echo '<hr>';
// pode ser feito dessa maneira acima ou de uma outra maneira que irei demonstrar agora , no qual tb é bastante utilizada.
// desta maneira tb, dará o mesmo resultado dos demais.

foreach ($arrayNumeros as $key => $numero){
    echo $numero;
}
