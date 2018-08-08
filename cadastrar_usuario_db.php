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
			$nome     = $_POST['nome'];
			$login         = $_POST['login'];
			$senha         = md5($_POST['senha']);
			
			$sql = "INSERT INTO usuario VALUES (null, '$nome', '$login', '$senha')";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Usuário não foi cadatrado! Erro: '.mysqli_error($con);
			} else {
				echo "Usuário cadastrado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



