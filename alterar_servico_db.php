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
			$id               = $_POST['id'];
			$nome_servio      = $_POST['nome_servico'];
			$descricao        = $_POST['descricao'];
			$valor_servico    = $_POST['valor_servico'];
			$local_prestacao  = $_POST['local_prestacao'];
			
			$sql = "UPDATE servico SET id = '$id', nome_servico = '$nome_servico', descricao = '$descricao', valor_servico = '$valor_servico',
			local_prestacao = '$local_prestacao' WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Serviço não foi alterado! Erro: '.mysqli_error($con);
			} else {
				echo "Serviço alterado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



