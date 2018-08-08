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
			
			$sql = "DELETE FROM servico WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Serviço não foi excluído! Erro: '.mysqli_error($con);
			} else {
				echo "Serviço excluído com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>
