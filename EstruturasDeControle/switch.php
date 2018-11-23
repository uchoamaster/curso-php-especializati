<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
// comando utilizando pra verificar 1 variavel melhor que o if que eh utilizando para compararar varias variaveis
	$a = 3;
	switch ($a) {
		case $a == 1:
			echo " sacar dinheiro";
			break;
		case 2:
			echo "depositar dinheiro";
			break;


		case 3:
			echo "imprimir cheque";
			break;	
//o default eh utilizado para caso não encontre nenhuma das opções acima.
			default:

			echo "opção não encontrada";

			break;
	}




 ?>
</body>
</html>




