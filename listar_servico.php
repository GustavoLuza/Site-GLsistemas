<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Consulta de serviços</title>
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
								<li><a href="cadastrar_servico.php"><span>Cadastrar Serviço</span></a></li>
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
		<div class="conteudo_listar_servico">
				<div id="imagem_listar_servico">
						<img src="imagens/consulta_servico.png">
				</div>
			<table>
				<tr>
					<th>Código</th>
					<th>Nome do Serviço</th>
					<th>Descrição</th>
					<th>Valor</th>
					<th>Local</th>
					<th>Comandos</th>
				</tr>
			<?php
				$sql = "SELECT  id, nome_servico, descricao, valor_servico, local_prestacao FROM servico";
				$query = mysqli_query($con, $sql);
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>
				<tr>
					<td><?php echo $item['id']; ?></td>
					<td><?php echo $item['nome_servico']; ?></td>
					<td><?php echo $item['descricao']; ?></td>
					<td><?php echo $item['valor_servico']; ?></td>
					<td><?php echo $item['local_prestacao']; ?></td>
					<td><a href="alterar_servico.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Alterar"></a> <a href="excluir_servico_db.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Excluir"></a></td>
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
		Existe(m) <?php echo mysqli_num_rows($query); ?> Resgistro(s)
	</body>
</html>
<?php
	mysqli_close($con);
?>



