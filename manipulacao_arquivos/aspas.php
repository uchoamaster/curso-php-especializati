<?php

/* 
Diferença entre aspas simples e aspas duplas
 */

$nome = "Carlos Uchôa";

echo 'Imprimindo com aspas simples';

echo '<br>';

echo "Imprimindo com aspas duplas";

echo '<br>';
// com aspas simples não é possivel ler uma variavel conforme o exemplo abaixo

echo 'Meu nome é: $nome';
echo '<br>';
// por isso eu utilizo aspas duplas para tal ação
echo "Meu nome é: $nome";
echo '<br>';

//quando se coloca aspas simples o php interpreta tudo como string ou seja apenas texto

// quando se coloca aspas duplas o php interpreta o conteudo da variavel tranquilamente

//para evitar erros de string eu posso concatenar ela dentro da string no caso texto do arquivo evitando erros de variaveis nao declaradas

// segue exemplo:
echo "Meu nome é: {$nome}testestestestestes";