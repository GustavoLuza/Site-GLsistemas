<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$id = $_GET['id'];
			$sql = "SELECT * FROM usuario WHERE id = $id";
			$query = mysqli_query($con, $sql);
			$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="alterar_usuario_db.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
							
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="200" value="<?php echo $arr['nome']; ?>"><br><br>
			
			<label for="login">Login:</label><br>
			<input type="text" name="login" id="login" maxlength="200" value="<?php echo $arr['login']; ?>"><br><br>
			
			<label for="senha">Senha:</label><br>
			<input type="text" name="senha" id="senha" maxlength="200" value="<?php echo $arr['senha']; ?>"><br><br>
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>

