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
			$nome_cliente     = $_POST['nome_cliente'];
			$endereco         = $_POST['endereco'];
			$telefone         = $_POST['telefone'];
			$celular          = $_POST['celular'];
			$cpf              = $_POST['cpf'];
			$empresa          = $_POST['empresa'];

			$sql = "INSERT INTO cliente VALUES (null, '$nome_cliente', '$endereco', '$telefone', '$celular', '$cpf', '$empresa')";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Cliente não foi cadatrado! Erro: '.mysqli_error($con);
			} else {
				echo "Cliente cadastrado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



