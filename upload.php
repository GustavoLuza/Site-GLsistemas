<?php
	$tmp = $_FILES['arquivo']['tmp_name'];
	$nome = $_FILES['arquivo']['name'];
	move_uploaded_file($tmp, 'arquivos/'.$nome);
?>