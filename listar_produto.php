<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Consulta de produtos</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/css.css"/></title>
	</head>
	<body>
		<div class="topo">
					<nav>
						<div class="imagem">
							<a href="HomePage.php"><img src="imagens/GL.png"></a>
						</div>
						<div class="link">
							<ul>
								<li><a href="cadastrar_produto.php"><span>Cadastrar produto</span></a></li>
								<li><a href="listar_mensagens_contato.php"><span>Mensagens</span></a></li>
								<li><a href="painel.php"><span>Home intranet</span></a></li>
								<li><a href="logout.php"><span>Sair</span></a></li>
							</ul>
						<?php
							$sql = "SELECT * FROM usuario WHERE usuario.id = '$usuario' ";
							$query = mysqli_query($con, $sql);
							$item = mysqli_fetch_array($query, MYSQLI_ASSOC);
						?>
						<P>Administrador: <?php echo $item['nome']; ?> </p>
						</div>
					</nav>
		</div>
		<div class="conteudo_listar_produto">
				<div id="imagem_listar_produto">
						<img src="imagens/consulta_produto.png">
				</div>
			<table>
				<tr>
					<th>Código</th>
					<th>Código Fornecedor</th>
					<th>Nome Produto</th>
					<th>Descricao</th>
					<th>Fabricante</th>
					<th>Valor Compra</th>
					<th>Valor Venda</th>
					<th>Formato</th>
					<th>Comandos</th>
				</tr>
			<?php
				$sql = "SELECT  id, id_fornecedor, nome_produto, descricao, fabricante, valor_compra, valor_venda, formato FROM produto ";
				$query = mysqli_query($con, $sql);
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
				<tr>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['id_fornecedor']; ?></td>
					<td><?php echo $item['nome_produto']; ?></td>
					<td><?php echo $item['descricao']; ?></td>
					<td><?php echo $item['fabricante']; ?></td>
					<td><?php echo $item['valor_compra']; ?></td>
					<td><?php echo $item['valor_venda']; ?></td>
					<td><?php echo $item['formato']; ?></td>
					<td><a href="alterar_produto.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Alterar"></a> <a href="excluir_produto_db.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Excluir"></a></td>
				</tr>
			<?php
				}
			?>
			</table>
		</div>
		Existe(m) <?php echo mysqli_num_rows($query); ?> Resgistro(s)
	</body>
</html>
<?php
	mysqli_close($con);
?>



