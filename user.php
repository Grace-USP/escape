<?php
if ($_POST["sub"] == "escolher") {
	setcookie("nome", $_POST["username"]);
}
header("Location: ./", TRUE, 301);
?>

