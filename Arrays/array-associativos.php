<?php

/* 
Arrays Associativos
 */

// podemos melhorar esse código para ficar visualmente melhor , olhe o exemplo a seguir.
echo "<pre>";
$usuario = ['Carlos', '(XX) XXXX-XXXX', 'Tecmicro', 'Ser o cara em  dev'];
var_dump($usuario);
echo "</pre>";

echo '<br>';
echo "<pre>";

//declarando o array na memoria
$usuario1 =[
    'nome' => 'Carlos Uchôa',
    'telefone' => '(XX) XXXX-XXXX',
    'trabalho'=> 'tecmicro',
    'Sonhos' => 'Fazer do meu trabalho um sucesso sem precendentes'
    
    
];

    var_dump($usuario1);
    
    echo "</pre>";
    
    //como que eu faço para imprimir só os valores que eu escolher
    
    //veja exemplo
    
    var_dump($usuario1['nome']);
    
    //imprimindo os valores com foreach
    foreach($usuario1 as  $dadosCarlos){
        echo "$dadosCarlos <br>";
    }
    
    echo '<br>';
       //imprimindo os valores com foreach
    foreach($usuario1 as $indice =>  $value){
        echo "$indice --> $value <br>";
    }