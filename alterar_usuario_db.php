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
			$id              = $_POST['id'];
			$nome            = $_POST['nome'];
			$login           = $_POST['login'];
			$senha           = $_POST['senha'];
			
			$sql = "UPDATE usuario SET id = '$id', nome = '$nome', login = '$login', senha = '$senha' WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'usuario não foi alteradp! Erro: '.mysqli_error($con);
			} else {
				echo "usuario alterado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



