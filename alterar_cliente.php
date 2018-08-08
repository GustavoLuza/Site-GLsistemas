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
			$sql = "SELECT * FROM cliente WHERE id = $id";
			$query = mysqli_query($con, $sql);
			$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="alterar_cliente_db.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
							
			<label for="nome">Nome:</label><br>
			<input type="text" name="nome" id="nome" maxlength="250" value="<?php echo $arr['nome_cliente']; ?>"><br><br>
			
			<label for="endereco">Endereço:</label><br>
			<input type="text" name="endereco" id="endereco" maxlength="250" value="<?php echo $arr['endereco']; ?>"><br><br>
			
			<label for="telefone">Telefone:</label><br>
			<input type="text" name="telefone" id="telefone" maxlength="11" value="<?php echo $arr['telefone']; ?>"><br><br>
			
			<label for="celular">Celular:</label><br>
			<input type="text" name="celular" id="celular" maxlength="11" value="<?php echo $arr['celular']; ?>"><br><br>
			
			<label for="cpf">CPF:</label><br>
			<input type="text" name="cpf" id="cpf" maxlength="11" value="<?php echo $arr['cpf']; ?>"><br><br>
			
			<label for="empresa">Empresa:</label><br>
			<input type="text" name="empresa" id="empresa" maxlength="250" value="<?php echo $arr['empresa']; ?>"><br><br>			
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>

