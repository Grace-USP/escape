<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' href='style/main.css'>
	<title>Escape Grace</title>
	 <script type="text/javascript" src="js/portas.js"></script>
</head>
<body>
	<a id='sair' href='http://each.usp.br/petsi/grace'> &lt; sair para o site do Grace</a><br>
<?php
	if (!empty($_COOKIE["nome"])) {
		echo "
			<a href='./'><img id='logo' class='small' src='assets/logo.svg'></a>
			<center>
			<div class='container'>
				<p>Para você poder avançar nos enigmas, é preciso <b>encontrar</b> uma <b>senha</b> com as dicas dadas. Só com a senha você consegue acessar o próximo enigma. Dica: Todas as senhas são nomes de cientistas famosas. ;-)</p>
				<p>É possível <b>acessar</b> aos desafios apenas clicando em <b>'avançar'</b> no <b>canto inferior direito</b> do site.<br>Ex: Para ter acesso ao <b>enigma 1</b>, você precisa colocar a senha <b>senhasecreta</b> na caixa de texto.</p>
			</div>
			<a href='1'><img id='porta' onmouseover='abrirPorta(this)' onmouseout='fecharPorta(this)' src='assets/pfechada.png'></img></a>
		";
	} else {	
		echo "
			<center>
			<a href='./'><img id='logo' src='assets/logo.svg'></a>
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
	</center>
</body>

