<?php
	require 'verifica.php';
	if(isset($_SESSION["logado"]) && !empty($_SESSION["logado"])):
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/lista.css">
	<title>Lista De Desafios</title>
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
						<li ><a href="UsuarioPerfil.php"><img src="./img/perfil.png"></a></li>
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
						<a href="CadastroDesafio.php">Cadastrar Desafios</a>
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

	<div class="col-100 titulos">
		<div class="content">
			<div class="titulo-1">
			<h1>LISTA  DE  DESAFIOS</h1>
				</div>
			<div class="titulo-2">
				<h2>NAVEGAÇÃO</h2>
			</div>
		</div>
	</div>	

	<div class="col-100 col-3">
		<div class="content">
			<div class="lista">
				<table class="tabela-lista">
					<thead>
						<th>Titulo</th>
						<th>Autor</th>
						<th>Data</th>
						<th>Dificuldade</th>
						<th>Linguagem</th>
						<th>ID</th>
					</thead>
					<tr>
						<td>Soma</td>
						<td>Eduardo</td>
						<td>Data</td>
						<td>Dificuldade</td>
						<td>Linguagem</td>
						<td>ID</td>
					</tr>
					<tr>
						<td>Soma</td>
						<td>Eduardo</td>
						<td>Data</td>
						<td>Dificuldade</td>
						<td>Linguagem</td>
						<td>ID</td>
					</tr>
					<tr>
						<td>Soma</td>
						<td>Eduardo</td>
						<td>Data</td>
						<td>Dificuldade</td>
						<td>Linguagem</td>
						<td>ID</td>
					</tr>
					<tr>
						<td>Soma</td>
						<td>Eduardo</td>
						<td>Data</td>
						<td>Dificuldade</td>
						<td>Linguagem</td>
						<td>ID</td>
					</tr>
					<tr>
						<td>Soma</td>
						<td>Eduardo</td>
						<td>Data</td>
						<td>Dificuldade</td>
						<td>Linguagem</td>
						<td>ID</td>
					</tr>
				</table>

			</div>
			<div class="naveg">
				<table class="tabela-naveg">
					<thead>
						<th>Linguagens</th>
					</thead>
					<tr><td><?php echo($_SESSION["logado"]); ?></td></tr>
					<tr><td>Java</td></tr>
					<tr><td>PHP</td></tr>
					<tr><td>HTML</td></tr>
				</table>
				<table class="tabela-naveg">
					<thead>
						<th>Dificuldade</th>
					</thead>
					<tr><td>Facil</td></tr>
					<tr><td>Media</td></tr>
					<tr><td>Dificil</td></tr>
				</table>
			<!--	<table class="tabela-naveg">
					<thead>
						<th>Topicos</th>
					</thead>
					<tr><td>Variaveis</td></tr>
					<tr><td>Vetores</td></tr>
					<tr><td>Matrizes</td></tr>
				</table>
			-->
			</div>
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