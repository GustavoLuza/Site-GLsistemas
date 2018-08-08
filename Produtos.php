<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>GL Sistemas - Produtos</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/css.css"/>
		</head>
		<body>
			<div class="topo">
					<nav>
						<div class="imagem">
							<a href="HomePage.php"><img src="imagens/GL.png"></a>
						</div>
						<div class="link">
							<ul>
								<li><a href="HomePage.php"><span>Home</span></a></li>
								<li><a href="Clientes.php"><span>Clientes</span></a></li>
								<li><a href="Trabalhe.php"><span>Trabalhe conosco</span></a></li>
								<li><a href="Contato.php"><span>Contato</span></a></li>
								<li><a href="Filiais.php"><span>Filiais</span></a></li>
								<li><a href="Intranet.php"><span>Intranet</span></a></li>
							</ul>
						</div>
					</nav>
					<div class="quebra">
					</div>
			</div>
			<div class="conteudo">
				<div id="produto">
					<img src="imagens/produto.jpg">
				</div>
			</div>
			<div class="conteudo_listar_fornecedor_inicial">
		<table>
			<tr>
				<th>Nossos fornecedores</th>
			</tr>
			<?php
				$sql = "SELECT razao_social FROM fornecedor";
				$query = mysqli_query($con, $sql);
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
			<tr>
				<td><?php echo $item['razao_social']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</div>
		<div class="conteudo_listar_produto_inicial">
		<table>
			<tr>
				<th>Produtos revendidos</th>
			</tr>
			<?php
				$sql = "SELECT nome_produto FROM produto";
				$query = mysqli_query($con, $sql);
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
			<tr>
				<td><?php echo $item['nome_produto']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</div>
		<div class="conteudo_listar_servico_inicial">
		<table>
			<tr>
				<th>Serviços prestados</th>
			</tr>
			<?php
				$sql = "SELECT nome_servico FROM servico";
				$query = mysqli_query($con, $sql);
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
			<tr>
				<td><?php echo $item['nome_servico']; ?></td>
			</tr>
			<?php
				}
			?>
		</table>
		</div>
			<footer>
				<div class="rodape">
					<div id="nome-rodape"><p>GL Sistemas Ltda.</p></div>
					<div id="cr-rodape"><p>© Copyrights 2017. Todos os direitos reservados</p></div>
					<div id="fb-rodape"><a href="https://www.facebook.com/gustavo.luza.378"><span>GRL</span></a></div>
				</div>
			</footer>
		</body>
</html>