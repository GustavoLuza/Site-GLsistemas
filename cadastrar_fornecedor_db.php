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
			$razao_social     = $_POST['razao_social'];
			$endereco         = $_POST['endereco'];
			$telefone         = $_POST['telefone'];
			$cnpj          = $_POST['cnpj'];

			$sql = "INSERT INTO fornecedor VALUES (null, '$razao_social', '$endereco', '$telefone', '$cnpj')";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Fornecedor não foi cadastrado! Erro: '.mysqli_error($con);
			} else {
				echo "Fornecedor cadastrado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



