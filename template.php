<?php
	$nome = "Nome do desafio aqui";
	$senha = "suasenhaaqui";
	$desafio = "
		<p>Seu desafio aqui</p>
";
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link rel='stylesheet' href='../style/main.css'>
	<title>Grace - <?php if ($_POST["senha"] == $senha) { echo $nome; } else { echo "?"; } ?></title>
</head>
<body>
	<center>
		<a href="../index.html"><img id="logo" src="../logo.svg"></a>
		<h2><?php if ($_POST["senha"] == $senha) { echo $nome; } else { echo "?"; } ?></h2>
		<div class="container">
				<?php
					if (empty($_POST["senha"])) {
						echo "<form method='POST'>
							<input type='text' name='senha' placeholder='Senha'>
							<input type='submit' value='testar'>
							</form>";
					} elseif ($_POST["senha"] == $senha) {
						echo $desafio;
					} else {
						echo "<form method='POST'>
							<input type='text' name='senha' placeholder='Senha' value='" . $_POST["senha"] . "'>
							<input type='submit' value='testar'>
							</form>";
						echo "Senha errada!";
					}
				?>
		</div>
		<footer>
			canais do grace
		</footer>
	</center>
</body>
