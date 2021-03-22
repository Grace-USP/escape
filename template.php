<?php
include('vars.php');

echo('<!-- Sala: ' . $nome . ' -->');

$sucesso = false;
if (!empty($_POST['senha']) && in_array(strtolower($_POST['senha']), $senhas)) {
	$sucesso = true;
}

function logAccess() {
	global $nome;
	if (!empty($_COOKIE['nome'])) {
		$loginfo = array();
		if (file_exists('../log.json')) {
			$logfile = fopen('../log.json', 'r');
			$logcontent = fread($logfile, filesize('../log.json'));
			fclose($logfile);
			$loginfo = json_decode($logcontent, true);
		}
		if (!array_key_exists($nome, $loginfo[$_COOKIE['nome']])) {
			$loginfo[$_COOKIE['nome']][$nome] = date('F j, g:i a');
			$logfile = fopen('../log.json', 'w+');
			fwrite($logfile, json_encode($loginfo, JSON_PRETTY_PRINT | JSON_INVALID_UTF8_SUBSTITUTE));
			fclose($logfile);
		}
	}
}
?>

<!DOCTYPE html>
<head>
	<meta charset='UTF-8'>
	<link rel='stylesheet' href='../style/main.css'>
	<title>Escape Grace - <?php echo ($sucesso) ? $nome : '?'; ?></title>
	<script>
		var dica = 0;
		var dicas = <?php echo $dicas; ?>;
		function dar_dica() {
			alert(dicas[dica]);
			dica = (dica + 1) % dicas.length;
		}
	</script>
	<script>
		function banana() {
			console.log("Olá, mundo!");
		}
	</script>
</head>
<body>
		<?php echo ($sucesso) ? "<a href='../index.php'><img id='logo' class='small' src='../assets/logo.svg'></a> <center>" : "<center> <a href='../index.php'><img id='logo' src='../assets/logo.svg'></a>"; ?>
		<h2><?php echo 'Enigma '.$num.': '.(($sucesso) ? $nome : '?'); ?></h2>
		<div class='container enigma'>
				<?php
				if (!empty($_COOKIE['nome'])) {
					if ($sucesso) {
						logAccess();
						include('texto.php');
					} else {
						echo('<form method=\'POST\'><input type=\'text\' name=\'senha\' placeholder=\'Senha\' autofocus /><input type=\'submit\' value=\'Tentar\' /></form>');
						if (!empty($_POST['senha'])) {
							echo('<p>Senha errada!</p>');
						}
					}
				} else {
					echo('Favor escolher um nome de usuário na <a href=\'../\'>página principal</a>.');
				}
				?>
		</div>
	<footer class='controles'>
		<a href='<?php echo ($num != 1) ? '../'.($num-1).'/' : '../'; ?>'>&lt; voltar</a>
		<a href='#' onclick='dar_dica()'>dica</a>
		<?php if ($num != 7) echo "<a href='../".($num+1)."/'>avançar &gt;</a>"; ?>
	</footer>
	</center>
</body>

