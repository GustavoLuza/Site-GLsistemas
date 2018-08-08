<?php
	include('conexao.php');
	include "validar.php";
	$usuario = @$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>GL Sistemas - Cadastro de produto</title>
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
								<li><a href="listar_produto.php"><span>Consultar produtos</span></a></li>
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
		<div id="imagem_cadastro_produto">
						<img src="imagens/cadastro_produto.png">
		</div>
		<div id="cadastro_produto">
			<form action="cadastrar_produto_db.php" method="POST">
				<label for="id_fornecedor">Fornecedor:</label><br>
				<select name="id_fornecedor" id="id_fornecedor">
				<?php
					$sql = "SELECT id, razao_social FROM fornecedor";
					$query = mysqli_query($con, $sql);
					while ($obj = mysqli_fetch_array($query)) {
				?>
					<option value="<?php echo $obj['id']; ?>"><?php echo $obj['razao_social']; ?></option>
				<?php
					}
				?>
				</select><br><br>
							
				<label for="nome_produto">Nome Produto:</label><br>
				<input type="text" name="nome_produto" id="nome_produto" maxlength="250"><br><br>
				
				<label for="descricao">Descricao:</label><br>
				<input type="text" name="descricao" id="descricao" maxlength="250"><br><br>
				
				<label for="fabricante">Fabricante:</label><br>
				<input type="text" name="fabricante" id="fabricante" maxlength="20"><br><br>
				
				<label for="valor_compra">Valor Compra:</label><br>
				<input type="text" name="valor_compra" id="valor_compra" maxlength=""><br><br>
				
				<label for="valor_venda">Valor Venda:</label><br>
				<input type="text" name="valor_venda" id="valor_venda" maxlength=""><br><br>
				
				<label for="formato">Formato:</label><br>
				<input type="text" name="formato" id="formato" maxlength="10"><br><br>
				
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



