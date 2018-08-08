<?php
	include('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
		<head>
			<title>GL Sistemas - Contato</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="css/css.css"/>
			<script type="text/javascript">
				var boleana = true;
				
				function verificar() {
				
					var name = document.getElementById('nome').value;
					
					if(name == "") {
						document.getElementById('nome').focus();
						alert('Informe campo nome!');
						return false;
					}
					
					var mail = document.getElementById('email').value;
					
					if(mail == "") {
						document.getElementById('email').focus();
						alert('Informe campo email!');
						return false;
					}
					
					var titulo = document.getElementById('assunto').value;
					
					if(titulo == "") {
						document.getElementById('assunto').focus();
						alert('Informe campo assunto!');
						return false;
					}
					
					var texto = document.getElementById('comentario').value;
					if(texto == "") {
						document.getElementById('comentario').focus();
						alert('Informe campo mensagem!');
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
								<li><a href="Trabalhe.php"><span>Trabalhe conosco</span></a></li>
								<li><a href="Filiais.php"><span>Filiais</span></a></li>
								<li><a href="Intranet.php"><span>Intranet</span></a></li>							
							</ul>
						</div>
					</nav>
					<div class="quebra">
					</div>
			</div>
				<div id="contato">
					<img src="imagens/contato.jpg">
				</div>
			<div id="fichacontato">
			<form action="contato_db.php" method="POST" onsubmit="return verificar()"> 
				<label for="info"><strong><h2>Informações para contato</h2> </strong></label>
				<br>
				<br>
				<br>
				
				<label for="nome"><strong>Nome: </strong></label>
				<input type="text" name="nome" id="nome">
				<br>
				<br>
				<label for="email"><strong>E-mail: </strong></label>
				<input type="text" name="email" id="email">
				<br>
				<br>
				<label for="empresa"><strong>Empresa: </strong></label>
				<input type="text" name="empresa" id="empresa">
				<br>
				<br>
				<label for="telefone"><strong>Telefone: </strong></label>
				<input type="text" name="telefone" id="telefone">
				<br>
				<br>
				<label for="celular"><strong>Celular: </strong></label>
				<input type="text" name="celular" id="celular">
				<br>
				<br>
				<fieldset>
					<legend>Forma de Contato</legend>
					<input type="radio" name="forma_contato" value="E-mail" checked="checked">
					<label for="contato"><strong>E-mail</strong></label>
					<br>
					<br>
					<input type="radio" name="forma_contato" value="Telefone">
					<label for="contato"><strong>Telefone</strong></label>
					<br>
					<br>
					<input type="radio" name="forma_contato" value="Celular">
					<label for="contato"><strong>Celular</strong></label>
				</fieldset>
				<br>
				<br>
				<label for="assunto"><strong>Assunto: </strong></label>
				<input type="text" name="assunto" id="assunto">
				<br>
				<br>
				<label for="mensagem"><strong>Mensagem </strong></label>
				<textarea name="mensagem" id="mensagem" rows="10" cols="35"></textarea>
				<br>
				<br>
				<label for="horario_contato"><strong>Horário </strong></label><br>
				<select name="horario_contato" id="horario_contato">
					<option value="Manhã">Manhã</option>
					<option value="Tarde" selected="selected">Tarde</option>
				</select>
				<br>
				<br>
				<input type="submit" value="Enviar">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</form>
		</div>
		<div class="conteudo_listar_mensagem_inicial">
			<table>
				<tr>
					<th>Mensagens recebidas por nós</th>
				</tr>
				<?php
					$sql = "SELECT mensagem FROM contato";
					$query = mysqli_query($con, $sql);
					while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				?>
				<tr>
					<td><?php echo $item['mensagem']; ?></td>
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