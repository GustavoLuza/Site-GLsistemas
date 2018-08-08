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
			$id_fornecedor     = $_POST['id_fornecedor'];
			$nome_produto      = $_POST['nome_produto'];
			$descricao         = $_POST['descricao'];
			$fabricante        = $_POST['fabricante'];
			$vamor_compra      = $_POST['vamor_compra'];
			$valor_venda       = $_POST['valor_venda'];
			$formato           = $_POST['formato'];
			
			$sql = "UPDATE produto SET id = '$id', id_fornecedor = '$id_fornecedor', nome_produto = '$nome_produto', descricao = '$descricao',
			fabricante = '$fabricante' , vamor_compra = '$vamor_compra' , valor_venda = '$valor_venda', formato = '$formato' WHERE id = $id";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Produto não foi alterado! Erro: '.mysqli_error($con);
			} else {
				echo "Produto alterado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



