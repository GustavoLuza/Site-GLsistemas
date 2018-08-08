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
			
			$sql = "DELETE FROM fornecedor WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Fornecedor não foi excluído! Erro: '.mysqli_error($con);
			} else {
				echo "Fornecedor excluído com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>
