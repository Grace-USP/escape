<?php
include('vars.php');

$sucesso = false;
if (!empty($_POST['senha']) && $_POST['senha'] == $senha) {
	$sucesso = true;
}

function logAccess() {
	if (!empty($_COOKIE['nome'])) {
		$loginfo = array();
		if (file_exists('../log.json')) {
			$logfile = fopen('../log.json', 'r');
			$logcontent = fread($logfile, filesize('../log.json'));
			fclose($logfile);
			$loginfo = json_decode($logcontent, true);
		}
		if (!array_key_exists($nome, $loginfo[$_COOKIE['nome']])) {
			$loginfo[$_COOKIE['nome']] = array($nome=>date('h:ia'));
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
	<title>Grace - <?php echo ($sucesso) ? $nome : '?'; ?></title>
</head>
<body>
	<center>
		<a href='../index.php'><img id='logo' src='../logo.svg'></a>
		<h2><?php echo ($sucesso) ? $nome : '?'; ?></h2>
		<div class='container'>
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
					echo('Favor escolher um nome de usuário na <a href=\'/\'>página principal</a>.');
				}
				?>
		</div>
		<footer>
			canais do grace
		</footer>
	</center>
</body>

