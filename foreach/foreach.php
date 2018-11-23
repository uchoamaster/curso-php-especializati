<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo getInfo("titulo") ?></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<?php 

	///normalmente utiliza-se o foreach  para listar algumas informações, trazer uma lista do banco de dados, imprimir essa linstagem na tela para o usuario, criaar uma tabela etc.
	function getUsuarios(){
		//vou criar manualmente aqui, mas estes dados poderiam vir de um banco de dados ou webservice
		$dados = [
			["nome"=> "Carlos","email"=>"carlos@mail.com"],
			["nome"=> "Maria","email"=>"maria@mail.com"],
			["nome"=> "Pedro","email"=>"pedro@mail.com"],
			["nome"=> "Mateus","email"=>"mateus@mail.com"],
			["nome"=> "Luiz","email"=>"luiz@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "José","email"=>"jose@mail.com"],
			["nome"=> "Uchôa","email"=>"uchoa@mail.com"]

		];
		return $dados;
	}
	function exibeUsuario(){
		$usuarios = getUsuarios();
		$html = "";
		foreach ($usuarios as $chave=> $usuario) {
			$nome = $usuario["nome"];
			$email = $usuario["email"];
			$html .= "<li>Nome: $nome - E-mail: $email</li>";

		}
		// aqui o return foi substituido pelo comando de impressão echo  para exibir os dados desta variavel
		echo $html;
	}


	function getInfo($atributo){
		$dados = array("titulo"=>"SiteModelo","descricao"=>"Programando com PHP.");
		return $dados[$atributo];
	}
	 ?>
	 <h2><?php echo getInfo("titulo") ?></h2>
	 <p><?php echo getInfo("descricao") ?></p>
	 <ul>
	 	<!-- aqui a função foi chamada sem o echo, pois acima no return foi colocado o echo para melhorar o comando em si -->
	 	<?php  exibeUsuario() ?>
	 </ul>

	
</body>
</html>