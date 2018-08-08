<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>GL Sistemas - Intranet</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/css.css"/>
			<?php
			if(@$_GET['erro']) {
			
			?>
		<script>
			alert ('Usuário ou senha inválidos!')
		</script>
		<?php
			}
		?>
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
								<li><a href="Produtos.php"><span>Produtos</span></a></li>
								<li><a href="Trabalhe.php"><span>Trabalhe conosco</span></a></li>
								<li><a href="Contato.php"><span>Contato</span></a></li>
								<li><a href="Filiais.php"><span>Filiais</span></a></li>
							</ul>
						</div>
					</nav>
					<div class="quebra">
					</div>
			</div>
			<div id="imagemlogin">
				<img src="imagens/login.png">
			</div>
			<div id="login">
				<form action="login_db.php" method="POST">
					<label for="login">Login</label><br>
					<input type="text" name="login" id="login" maxlength="20"><br><br>
				
					<label for="senha">Senha</label><br>
					<input type="password" name="senha" id="senha" maxlength="20"><br><br>
				
					<input type="submit" value="Entrar">
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