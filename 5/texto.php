<?php

$simg1 = in_array(strtolower($_POST['img1']), array('ffcl' ,'ffcl usp', 'ffcl-usp'));
$simg2 = in_array(strtolower($_POST['img2']), array('fea', 'fea usp',  'fea-usp'));
$simg3 = in_array(strtolower($_POST['img3']), array('fm', 'fmusp', 'fm usp', 'fm-usp'));

?>

<form method='post'>
<input type='hidden' name='senha' value=<?php echo '\'' . $_POST['senha'] . '\'' ?>>

<div>
	<img src='../Sonja_Ashauer.jpg' style='width: 30%;'></img>
	<input type='text' name='img1' placeholder='Imagem 1' value=<?php echo '\'' . $_POST['img1'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if($simg1) echo '&#10003;'; ?>
</div>
<br>

<div>
	<img src='../alunasusp.jpg' style='width: 30%;'></img>
	<input type='text' name='img2' placeholder='Imagem 2' value=<?php echo '\'' . $_POST['img2'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if($simg2) echo '&#10003;'; ?>
</div>
<br>

<div>
	<img src='../Jaqueline-Goes-de-Jesus-e-equipe.jpg' style='width: 30%;'></img>
	<input type='text' name='img3' placeholder='Imagem 3' value=<?php echo '\'' . $_POST['img3'] . '\''; ?>>
	<input type='submit' value='testar'>
	<?php if($simg3) echo '&#10003;'; ?>
</div>

<?php

if ($simg1 && $simg2 && $simg3) echo '<p>Código QR aqui</p>';

?>

</form>
