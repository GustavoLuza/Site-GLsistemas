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
			$nome_servico     = $_POST['nome_servico'];
			$descricao         = $_POST['descricao'];
			$valor_servico         = $_POST['valor_servico'];
			$local_prestacao          = $_POST['local_prestacao'];

			$sql = "INSERT INTO servico VALUES (null, '$nome_servico', '$descricao', '$valor_servico', '$local_prestacao')";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Serviço não foi cadatrado! Erro: '.mysqli_error($con);
			} else {
				echo "Serviço cadastrado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



