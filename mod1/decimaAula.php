<?php

/* 
swich com PHP
 */

// existe uma maneira de fazer verificação em alguma coisa com o switch em vez de usar o if para tudo

// segue exemplo:

$var = "Teste";

/*
 * se for igual a 1  mostra o resultado que é 1
 * se for igual a 2 mostra o resultado que é 2
 * se for igual a 3 mostra o resultado que é 3
 * se for igual a 12 mostra o resultado que é 12
 * observação, diferente do if, o swtich mostra 1 por 1 e finaliza a execução.
 */
switch ($var){
    case 1: echo "Sou 1"; break;
    case 2: echo "Sou 2"; break;
    case 3: echo "Sou 3"; break;
    case 12: echo "Sou 12"; break;
    case "Teste": echo " Sou igual a teste"; break;
    default: echo " Sou diferente";
        
}