<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DO While</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	// expressão passada só no final do bloco, ou seja no término da execução

	$a = 11;

	do{
		echo "E-mail enviado: $a <br>";
		$a++;
		//$a = $a +1; mesma coisa do codigo acima, mas o de cima usa menos do servidor.
	}while ($a <= 10);





	 ?>
</body>
</html>