<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>while</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php 

	//comandos de repetição

	//while

	// por exemplo quero enviar 500 emails, coloco um comando desse para enviar os 500 emails 

	$a = 1;

/*

neste while vou fazer a comparação se a variavel a, se ela for menor ou igual
à 10, utilizando os operadores de controle que vimos nas aulas passadas, então se for igual o menor a 10, ele vai acessar o while, e vamos estar criando o numero que foi enviado, coloquei quebra de linha, e acabo a linha auto incrementando, até chegar na condição, de ser menor ou 
igual a 10.

*/
	while ($a <= 10) {
	    echo "E-mail enviado: $a <br>";
	    $a++;
	}



	 ?>
	
</body>
</html>