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
			$sql = "SELECT * FROM fornecedor WHERE id = $id";
			$query = mysqli_query($con, $sql);
			$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="alterar_fornecedor_db.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
							
			<label for="razao_social">Razão Social:</label><br>
			<input type="text" name="razao_social" id="razao_social" maxlength="250" value="<?php echo $arr['razao_social']; ?>"><br><br>
			
			<label for="endereco">Endereço:</label><br>
			<input type="text" name="endereco" id="endereco" maxlength="250" value="<?php echo $arr['endereco']; ?>"><br><br>
			
			<label for="telefone">Telefone:</label><br>
			<input type="text" name="telefone" id="telefone" maxlength="11" value="<?php echo $arr['telefone']; ?>"><br><br>
			
			<label for="cnpj">CNPJ:</label><br>
			<input type="text" name="cnpj" id="cnpj" maxlength="14" value="<?php echo $arr['cnpj']; ?>"><br><br>			
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>

