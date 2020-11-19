<?php
	require 'verifica.php';
	if(isset($_SESSION["logado"]) && !empty($_SESSION["logado"])):
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/cad_desaf.css">
	<title>Cadastro Desafio</title>
	<meta charset="UTF-8">
</head>

<body>

	<header class="menu-principal">
		<main>
			<div class="header-1">

				<div class="logo">
					<a href="DesafioLista.php"><img src="./img/Logo_BUGCUP_principal.png"></a>
				</div>

				<div class="usuario-menu">
					<ul>
						<li ><a href="UsuarioPerfil.html"><img src="./img/perfil.png"></a></li>
						<li class="usuario-menu-text"><a href="UsuarioPerfil.php">MEUS DADOS</a></li>
						<li class="usuario-menu-text"><a href="sair.php">SAIR</a></li>
					</ul>
				</div>
			</div>
		</main>
	</header>
	<main class="col-100 menu-url">
		<div class="header-2">
			<div class="menu">
				<ul>
					
					<li class="li-menu">
						<a href="DesafioLista.php">Desafios</a>
					</li>
					
					<li class="li-menu"> 
						<a href="">Cadastrar Desafios</a>
					</li>
					
				</ul>
			</div>
			<div class="busca">
				<input placeholder="Pesquisar Desafios" type="text" name="">

			</div>
			<div class="us">
				
			</div>
		</div>
	</main>
	<div class="col-100 espacamento">
		<div class="content">
			<div class="divi"></div>
		</div>
	</div>		
	<div class="col-100 col-3">
		<div class="content">
			<div class="cadastro-desafio">
				<form class="form-cadastro-desafio"name="form-cadastro-desafio" action="" method="">
					<h1>
						<strong>CADASTRAR DESAFIO</strong>
					</h1>
					<div >
						<label for="titulo">Título:</label>
						<input  class="titulo" type="text" name="titulo">
					</div>
					<div class="dif esp-1">
						<label for="dificuldade">Dificuldade:</label>
						<select class="selecao" name="dificuldade">
							<option value="facil">Fácil</option>
							<option value="medio">Médio</option>
							<option value="dificil">Difícil</option>
						</select>
					</div>
					<div class="linguagem esp-1">
						<label for="linguagem">Linguagem:</label>
						<select class="selecao" name="linguagem">
							<option value="java">Java</option>
							<option value="c">C</option>
							<option value="js">JavaScript</option>
							<option value="php">PHP</option>
						</select>
					</div>
					<div class="topico">
						<label for="topico">Tópico:</label>
						<select class="selecao" name="topico">
							<option value="variaveis">Variaveis</option>
							<option value="vetores">Vetores</option>
							<option value="matrizes">Matrizes</option>
						</select>
					</div>
					<div >
						<label class="enun-text" for="enunciado">Enunciado:</label>
						<textarea class="enunciado" type="text-area" name="enunciado"></textarea>
					</div>
					<div 	class="entradas">
						<label class="entradas-text" for="entradas">Entradas Esperadas:</label>
						<textarea  class="esperadas-1" type="text-area" name="entradas" cols="24"rows="5"></textarea>
					</div>
					<div class="cod-bug">
						<label >Código com BUG:</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
						<input  class="cod-up"id="codigocombug"type="file" />
					</div>
					<div class="saidas">
						<label class="saidas-text" for="saidas">Saídas Esperadas:</label>
						<textarea class="esperadas-1 heit" type="text-area" name="saidas" cols="24"rows="5"></textarea>
					</div>
					
					<div class="cod-cor">
						<label >Código Corrigido:</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
						<input id="codigocorrigido"type="file"/>
					</div>
					<div>
						<input value="Cadastrar Desafio"type="submit" name="cadsatrar-desafio">
					</div>
				</form>
		</div>
	</div>
</div>
	<div class="col-100 espacamento">
		<div class="content">
			<div class="divi"></div>
		</div>
	</div>	
	<footer class="Copyright col-100">
		<div class="content">
			<p>Copyright © 2020 - Instituto Federal Farroupilha</p>
		</div>
	</footer>
</body>

</html>
<?php else:header("Location: sair.php"); endif; ?>