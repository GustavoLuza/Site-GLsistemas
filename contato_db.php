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
			$nome          = $_POST['nome'];
			$email         = $_POST['email'];
			$empresa    = $_POST['empresa'];
			$telefone   = $_POST['telefone'];
			$celular      = $_POST['celular'];
			$forma_contato   = @$_POST['forma_contato'];
			$assunto      = $_POST['assunto'];
			$mensagem         = $_POST['mensagem'];
			$horario_contato         = $_POST['horario_contato'];
			
			$sql = "INSERT INTO contato VALUES (null,'$nome', '$email', '$empresa', '$telefone', '$celular', '$forma_contato', '$assunto', '$mensagem', '$horario_contato')";
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Mensagem não foi cadastrada! Erro: '.mysqli_error($con);
			} else {
				echo "Mensagem cadastrada com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>
