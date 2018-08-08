<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Cadastro de fornecedores</title>
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
								<li><a href="listar_fornecedor.php"><span>Consultar Fornecedores</span></a></li>
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
			<div id="imagem_cadastro_fornecedor">
				<img src="imagens/cadastro_fornecedor.png">
			</div>
			<div id="cadastro_fornecedor">
				<form action="cadastrar_fornecedor_db.php" method="POST">
				
					<label for="razao_social">Razão social:</label><br>
					<input type="text" name="razao_social" id="razao_social" maxlength="250"><br><br>
					
					<label for="endereco">Endereço:</label><br>
					<input type="text" name="endereco" id="endereco" maxlength="250"><br><br>
					
					<label for="telefone">Telefone:</label><br>
					<input type="text" name="telefone" id="telefone" maxlength="11"><br><br>
					
					<label for="cpf">CNPJ:</label><br>
					<input type="text" name="cnpj" id="cnpj" maxlength="14"><br><br>
					
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



