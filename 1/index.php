<?php
	$nome = "Binário";
	$senha = "senhasecreta";
	$desafio = "
		<p>0 = '_', 1 = 'A', 2 = 'B', 3 = 'C', ..., 26 = 'Z'</p>
		<p>1000 10100 1 10 0 1 1001 11 1001 10010 10100 1 10000</p>
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
		<a href="../"><img id="logo" src="../logo.svg"></a>
		<h2><?php if ($_POST["senha"] == $senha) { echo $nome; } else { echo "?"; } ?></h2>
		<div class="container">
				<?php
					if (empty($_POST["senha"])) {
						echo "<form method='POST'>
							<input type='text' name='senha' placeholder='Senha'>
							<input type='submit' value='testar'>
							</form>";
					} elseif ($_POST["senha"] != $senha) {
						echo "<form method='POST'>
							<input type='text' name='senha' placeholder='Senha' value='" . $_POST["senha"] . "'>
							<input type='submit' value='testar'>
							</form>";
						echo "Senha errada!";
					} else {
						if (!empty($_COOKIE["nome"])) {
							$loginfo = array();
							if (file_exists("../log.json")) {
								$logfile = fopen("../log.json", "r");
								$logcontent = fread($logfile, filesize("../log.json"));
								fclose($logfile);
								$loginfo = json_decode($logcontent, true);
							}
							if (!array_key_exists($nome, $loginfo[$_COOKIE["nome"]])) {
								$loginfo[$_COOKIE["nome"]] = array($nome=>date("h:ia"));
								$logfile = fopen("../log.json", "w+");
								fwrite($logfile, json_encode($loginfo, JSON_PRETTY_PRINT | JSON_INVALID_UTF8_SUBSTITUTE));
								fclose($logfile);
							}
						}
						echo $desafio;
					}
				?>
		</div>
		<footer>
			canais do grace
		</footer>
	</center>
</body>

