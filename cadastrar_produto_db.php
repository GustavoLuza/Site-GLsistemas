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
			$id_fornecedor        = $_POST['id_fornecedor'];
			$nome_produto         = $_POST['nome_produto'];
			$descricao            = $_POST['descricao'];
			$fabricante           = $_POST['fabricante'];
			$valor_compra         = $_POST['valor_compra'];
			$valor_venda          = $_POST['valor_venda'];
			$formato              = $_POST['formato'];

			$sql = "INSERT INTO produto VALUES (null, '$id_fornecedor', '$nome_produto', '$descricao', '$fabricante', '$valor_compra',
			'$valor_venda', '$formato')";
			
			$query = mysqli_query($con, $sql);
			if(!$query) {
				echo 'Produto não foi cadatrado! Erro: '.mysqli_error($con);
			} else {
				echo "Produto cadastrado com sucesso!";
			}
			
		?>
	</body>
</html>
<?php
	mysqli_close($con);
?>



