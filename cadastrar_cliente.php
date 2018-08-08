<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Cadastro de clientes</title>
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
								<li><a href="listar_cliente.php"><span>Consultar Clientes</span></a></li>
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
					
					<div id="imagem_cadastro_cliente">
						<img src="imagens/cadastro_cliente.png">
					</div>
					<div id="cadastro_cliente">
						<form action="cadastrar_cliente_db.php" method="POST">
							<label for="nome_cliente">Nome:</label><br>
							<input type="text" name="nome_cliente" id="nome_cliente" maxlength="250"><br><br>
							
							<label for="endereco">Endereço:</label><br>
							<input type="text" name="endereco" id="endereco" maxlength="250"><br><br>
							
							<label for="telefone">Telefone:</label><br>
							<input type="text" name="telefone" id="telefone" maxlength="11"><br><br>
							
							<label for="celular">Celular:</label><br>
							<input type="text" name="celular" id="celular" maxlength="11"><br><br>
							
							<label for="cpf">CPF:</label><br>
							<input type="text" name="cpf" id="cpf" maxlength="11"><br><br>
							
							<label for="empresa">Empresa:</label><br>
							<input type="text" name="empresa" id="empresa" maxlength="250"><br><br>
							
							<input type="submit" value="Cadastrar">
						</form>
					
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



