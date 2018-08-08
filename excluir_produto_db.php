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
			
			$sql = "DELETE FROM produto WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Produto não foi excluído! Erro: '.mysqli_error($con);
			} else {
				echo "Produto excluído com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>
