<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>GL Sistemas - Trabalhe Conosco</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/css.css"/>
			<script type="text/javascript">
				var boleana = true;
				
				function verificar() {
				
					var nome = document.getElementById('curriculo').value;
					
					if(nome == "") {
						document.getElementById('curriculo').focus();
						alert('Selecione seu currículo!');
						return false;
					}
				}
			</script>
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
								<li><a href="Contato.php"><span>Contato</span></a></li>
								<li><a href="Filiais.php"><span>Filiais</span></a></li>
								<li><a href="Intranet.php"><span>Intranet</span></a></li>							
							</ul>
						</div>
					</nav>
					<div class="quebra">
					</div>
			</div>
				<div id="trabalhe">
					<img src="imagens/curriculo.png">
				</div>
				<div class="cadastre">
					<hr>
					<strong>Vagas em aberto</strong>
					<br>
					<br>
					<ul>
						<li>Analista de redes Junior</li>
						<li>Analista de redes Pleno</li>
						<li>Suporte técnico nível 1</li>
						<li>Suporte técnico nível 2</li>
						<li>Comercial</li>
					</ul>
					<hr>
					<br>
					<br>
					<strong>Envie seu currículo</strong>
					<br>
					<br>
					<form action="mailto:contato@meusite.com.br" onsubmit="return verificar()">
						<input type="file" name="curriculo" id="curriculo">
						<br>
						<br>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div id="chamada">
					<img src="imagens/chamada.png">
				</div>
			<div class="conteudo_listar_usuario_inicial">
				<table>
					<tr>
						<th>Nossos colaboradores</th>
					</tr>
					<?php
						$sql = "SELECT nome FROM usuario";
						$query = mysqli_query($con, $sql);
						while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
					?>
					<tr>
						<td><?php echo $item['nome']; ?></td>
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
<?php	
	mysqli_close($con);
?>