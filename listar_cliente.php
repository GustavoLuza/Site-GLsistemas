<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Consulta de clientes</title>
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
								<li><a href="cadastrar_cliente.php"><span>Cadastrar cliente</span></a></li>
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
		<div class="conteudo_listar_cliente">
				<div id="imagem_listar_cliente">
						<img src="imagens/consulta_cliente.png">
				</div>
		<table>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>Endereço</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>CPF</th>
				<th>Empresa</th>
				<th>Comandos</th>
			</tr>
		<?php
			$sql = "SELECT id, nome_cliente, endereco, telefone, celular, cpf, empresa FROM cliente";
			$query = mysqli_query($con, $sql);
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		?>
			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['nome_cliente']; ?></td>
				<td><?php echo $item['endereco']; ?></td>
				<td><?php echo $item['telefone']; ?></td>
				<td><?php echo $item['celular']; ?></td>
				<td><?php echo $item['cpf']; ?></td>
				<td><?php echo $item['empresa']; ?></td>
				<td><a href="alterar_cliente.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Alterar"></a> <a href="excluir_cliente_db.php?id=<?php echo $item['id']; ?>"><input type="submit" value="Excluir"></a></td>
			</tr>
		<?php
			}
		?>
		</table>
		Existe(m) <?php echo mysqli_num_rows($query); ?> Resgistro(s)
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
<?php
	mysqli_close($con);
?>



