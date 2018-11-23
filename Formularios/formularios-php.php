<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulários HTML</title>
</head>
<body>
<H1>Olá eu sou uma page web</H1>
<form method="POST" action="teste.php">
    <label>Campo de Nome:<input type="text" placeholder="insira o seu nome" name="nome"></label> <br><br>
    <label>Campo de Texto: <input type="email" placeholder="insira o seu email" name="email"></label><br><br>
    <label>Campo de Senha:    <input type="password" placeholder="insira sua Senha" name="senha"></label><br><br>
                <textarea placeholder="Informa a sua descrição" name="descricao" ></textarea><br>


                <select name="opcao">
                    <option value="op1">Opção 1 </option><br>
                    <option value="op2">Opção 2 </option><br>
                    <option value="op3">Opção 3 </option><br>
                    <option value="op4">Opção 4 </option><br>
                </select>  <br>


                <input type="radio" name="radio" value="M"> M<br>
                <input type="radio" name="radio" value="F"> F<br>
                <input type="radio" name="radio" value="G" > G <br>
                
                
                
                <input type="checkbox" value="check1" name="check1"><br>
                <input type="checkbox" value="check2" name="check2"><br>
                <input type="checkbox" value="check3" name="check3"><br>
                <input type="checkbox" value="check4" name="check4"><br>

                <button>Eu sou um Botão</button> <br> <br>
                <input type="button" value="Valor do botão" name=""> <br> <br>
                <input type="submit" value="sou um botão submit" name=""> <br>
                
	</form>
</body>
</html>