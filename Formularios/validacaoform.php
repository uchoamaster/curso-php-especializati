<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validação Formulário</title>
</head>
<body>
<H1>Validação Formulário</H1>
<form method="POST" action="#">
    <label>Campo de Nome:<input type="text" placeholder="insira o seu nome" name="nome"></label> <br><br>

    <br><br>
    <input type="submit" value="Enviar Dados" name="finaliza">
     
    <?php
    if (isset($_POST['finaliza'])) {
        if (isset($_POST['nome']) && trim($_POST['nome']) != ''&& strlen(trim($_POST['nome']))>=3) {
            
            echo 'Olá '.$_POST['nome'].', Seja bem vindo!';
        }else{
            echo  " oops , nome preccisa ser preenchido!";
        }
    }
    
    ?>

        
</body>
</html>