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
			$id                = $_POST['id'];
			$nome_cliente      = $_POST['nome_cliente'];
			$endereco          = $_POST['endereco'];
			$telefone          = $_POST['telefone'];
			$celular           = $_POST['celular'];
			$cpf               = $_POST['cpf'];
			$empresa           = $_POST['empresa'];
			
			$sql = "UPDATE cliente SET id = '$id', nome_cliente = '$nome_cliente', endereco = '$endereco', telefone = '$telefone',
			celular = '$celular' , cpf = '$cpf' , empresa = '$empresa' WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Cliente não foi alterado! Erro: '.mysqli_error($con);
			} else {
				echo "Cliente alterado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



