<?php
	include('conexao.php');
	session_start();
	
	
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	
	$sql = "SELECT * FROM usuario WHERE login ='$login' AND senha = '$senha'";
	$query = mysqli_query($con, $sql);
	$obj = mysqli_fetch_array($query, MYSQLI_ASSOC);
	
	if ($obj['id'] > 0) {
		@$_SESSION['id'] = $obj['id'];
		header('Location: painel.php');
	} else {
		header('Location: Intranet.php?erro=1');
	}
	
	mysqli_close($con);
?>
