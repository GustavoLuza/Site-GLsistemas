<?php
	include('conexao.php');

	$id    = $_POST['id'];
	$nome = $_POST['nome'];
	
	$caminho      = $_FILES['arquivo']['tmp_name'];
	$nome_arquivo = $_FILES['arquivo']['name'];
	move_uploaded_file($caminho, "arquivos/$nome");
	
	$sql = "INSERT INTO arquivo VALUES (null, '$nome')";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
		header('Location: painel.php?erro='.mysqli_error($con));
	} else {
		header('Location: painel.php?ok=1');
	}

	mysqli_close($con);
?>
