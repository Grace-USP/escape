<?php

$simg1 = strcasecmp($_POST['img1'], 'FFCL') == 0;
$simg2 = strcasecmp($_POST['img2'], 'FEA') == 0;
$simg3 = strcasecmp($_POST['img3'], 'FM') == 0;

?>

<form method='post'>
<input type='hidden' name='senha' value=<?php echo '\'' . $_POST['senha'] . '\'' ?>>

<div>
	<img src='../Sonja_Ashauer.jpg' style='width: 30%;'></img>
	<input type='text' name='img1' placeholder='Imagem 1' value=<?php echo '\'' . $_POST['img1'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if ($simg1) echo 'ACERTOU, MIZERAVI' ?>
</div>
<br>

<div>
	<img src='../alunasusp.jpg' style='width: 30%;'></img>
	<input type='text' name='img2' placeholder='Imagem 2' value=<?php echo '\'' . $_POST['img2'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if ($simg2) echo 'ACERTOU, MIZERAVI' ?>
</div>
<br>

<div>
	<img src='../Jaqueline-Goes-de-Jesus-e-equipe.jpg' style='width: 30%;'></img>
	<input type='text' name='img3' placeholder='Imagem 3' value=<?php echo '\'' . $_POST['img3'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if ($simg3) echo 'ACERTOU, MIZERAVI' ?>
</div>

<?php

if ($simg1 && $simg2 && $simg3) echo '<p>Código qr aqui...</p>';

?>

</form>
