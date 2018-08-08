<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Consulta de mensagens</title>
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
		<div class="conteudo_listar_mensagem">
				<div id="imagem_listar_mensagem">
						<img src="imagens/consulta_mensagem.png">
				</div>
		<table>
			<tr>
				<th>Código</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Empresa</th>
				<th>Telefone</th>
				<th>Celular</th>
				<th>Forma de contato</th>
				<th>Assunto</th>
				<th>Mensagem</th>
				<th>Horário para contato</th>
			</tr>
		<?php
			$sql = "SELECT id,nome,email, empresa, telefone, celular, forma_contato, assunto, mensagem, horario_contato FROM contato";
					
			$query = mysqli_query($con, $sql);
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		?>
			<tr>
				<td><?php echo $item['id']; ?></td>
				<td><?php echo $item['nome']; ?></td>
				<td><?php echo $item['email']; ?></td>
				<td><?php echo $item['empresa']; ?></td>
				<td><?php echo $item['telefone']; ?></td>
				<td><?php echo $item['celular']; ?></td>
				<td><?php echo $item['forma_contato']; ?></td>
				<td><?php echo $item['assunto']; ?></td>
				<td><?php echo $item['mensagem']; ?></td>
				<td><?php echo $item['horario_contato']; ?></td>
				
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
