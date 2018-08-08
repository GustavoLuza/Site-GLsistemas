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
			$razao_social     = $_POST['razao_social'];
			$endereco      = $_POST['endereco'];
			$telefone         = $_POST['telefone'];
			$cnpj        = $_POST['cnpj'];
			
			$sql = "UPDATE fornecedor SET id = '$id', razao_social = '$razao_social', endereco = '$endereco', telefone = '$telefone',
			cnpj = '$cnpj' WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Fornecedor não foi alterado! Erro: '.mysqli_error($con);
			} else {
				echo "Fornecedor alterado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



