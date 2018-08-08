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
			$sql = "SELECT * FROM servico WHERE id = $id";
			$query = mysqli_query($con, $sql);
			$arr = mysqli_fetch_array($query, MYSQLI_ASSOC);
		?>
		<form action="alterar_servico_db.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
							
			<label for="nome_servico">Nome Serviço:</label><br>
			<input type="text" name="nome_servico" id="nome_servico" maxlength="250" value="<?php echo $arr['nome_servico']; ?>"><br><br>
			
			<label for="descricao">Descrição:</label><br>
			<input type="text" name="descricao" id="descricao" maxlength="250" value="<?php echo $arr['descricao']; ?>"><br><br>
			
			<label for="valor_servico">Valor Servico:</label><br>
			<input type="text" name="valor_servico" id="valor_servico" maxlength="" value="<?php echo $arr['valor_servico']; ?>"><br><br>
			
			<label for="local_prestacao">Local Prestacao:</label><br>
			<input type="text" name="local_prestacao" id="local_prestacao" maxlength="250" value="<?php echo $arr['local_prestacao']; ?>"><br><br>			
			
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>
<?php
	mysqli_close($con);
?>

