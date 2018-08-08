<?php
	include "conexao.php";
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Intranet</title>
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
								<li><a href="cadastrar_cliente.php"><span>Cliente</span></a></li>
								<li><a href="cadastrar_produto.php"><span>Produto</span></a></li>
								<li><a href="cadastrar_fornecedor.php"><span>Fornecedor</span></a></li>
								<li><a href="cadastrar_servico.php"><span>Serviço</span></a></li>
								<li><a href="cadastrar_usuario.php"><span>Usuário</span></a></li>
								<li><a href="listar_mensagens_contato.php"><span>Mensagens</span></a></li>
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
			<div id="upload">
				<form action="cadastrar_arquivo_db.php" method="post" enctype="multipart/form-data">
				<input type="file" name="arquivo">
				<br>
				<br>
				<input type="submit" value="Enviar">
					<div class="quebra">
					</div>
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

