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
			
			$sql = "DELETE FROM cliente WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Cliente não foi excluído! Erro: '.mysqli_error($con);
			} else {
				echo "Cliente excluído com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>
