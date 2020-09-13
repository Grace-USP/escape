<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' href='style/main.css'>
	<title>Grace - Escape Site</title>
	 <script type="text/javascript" src="js/portas.js"></script>
</head>
<body>
	<center>
		<a href="./"><img id="logo" src="logo.svg"></a>
<?php
	if (!empty($_COOKIE["nome"])) {
		echo "
		<div class='container'>
			<p>Para você poder avançar nos enigmas, é preciso <b>encontrar</b> uma <b>senha</b> com as dicas dadas. Com uma senha você consegue acessar o próximo enigma.</p>
			<p>É possível <b>acessar</b> aos desafios apenas <b>mudando o número</b> do desafio <b>no link</b> do site. Ex: Para acessar ao <b>enigma 1</b> com a senha <b>senhasecreta</b>, você tem que acessar <a href=\"1\">http://each.usp.br/petsi/grace/escape<b>/1</b></a> e colocar a senha na caixa de texto.</p>
		</div>
		<a href=\"1\"><img id=\"porta\" onmouseover=\"abrirPorta(this)\" onmouseout=\"fecharPorta(this)\" src=\"pfechada.png\"></img></a>
		";
	} else {	
		echo "
			<h2>Bem vinda!</h2>
			<div class='container'>
				<p>Primeiramente, você tem que escolher um nome de usuário para continuar.</p>
				<form method='POST' action='./user.php'>
					<input type='text' name='username' placeholder='Nome de usuário'>
					<input type='submit' name='sub' value='escolher'>
				</form>
			</div>
		";
	}
?>
		<footer>
			canais do grace
		</footer>
	</center>
</body>

