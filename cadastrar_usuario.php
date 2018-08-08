<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Cadastro de usuários</title>
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
								<li><a href="listar_usuario.php"><span>Consultar Usuários</span></a></li>
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
			<div id="imagem_cadastro_usuario">
						<img src="imagens/cadastro_usuario.png">
					</div>
			<div id="cadastro_usuario">
				<form action="cadastrar_usuario_db.php" method="POST">
			
					<label for="nome">Nome:</label><br>
					<input type="text" name="nome" id="nome" maxlength="200"><br><br>
					
					<label for="login">Login:</label><br>
					<input type="text" name="login" id="login" maxlength="200"><br><br>
					
					<label for="senha">Senha:</label><br>
					<input type="password" name="senha" id="senha" maxlength="200"><br><br>
								
					<input type="submit" value="Cadastrar">
				</form>
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



