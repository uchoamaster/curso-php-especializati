<?php

// se for trabalhar tipo  get
//echo $_GET ['nome'];
//capturando os dados via POST
/*
echo $_POST ['nome'];
echo '<hr>';
echo $_POST ['email'];
echo '<hr>';
echo $_POST ['senha'];
echo '<hr>';
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados Formulário</title>
</head>
<body>
 
<?php  
//capturando os dados via request
// o REQUEST PEGA TANTO POST  OU GET, Ele é um pouco mais lento
if (isset($_POST['nome']) && $_POST['nome'] != '' ) {
    echo "Olá {$_POST['nome']}, seja bem vindo!";
}else{
    echo "Ops, insira o nome do Usuário!";
}


 ?>       
</body>
</html>