<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>foreach</title>
	<link rel="stylesheet" href="">
</head>
<body>
		
	<?php 

	/*
	foreach fornece uma maneira mais simples de navegar pelos elementos de um array, ou seja
	temos vários produtos em uma lista e quero percorrer os mesmos, como fazemos isso?
	segue exemplo para verificarmos a lógica aplicada.

	*/ 



	$alunos = ["A", "B", "C", "D"];

	foreach ($alunos as $aluno) {
		
		echo '<pre>' .var_dump($alunos) . '</pre>';
		
	}


	 ?>

</body>
</html>