<?php
	require 'verifica.php';
	if(isset($_SESSION["logado"]) && !empty($_SESSION["logado"])):
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/perfil.css">
	<title>Perfil Usuário</title>
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

	<div class="col-100 col-3">
		<div class="content">
			<div class="menu-perfil">
				<table class="info-usuario">
					<thead>
						<th ><img class="foto-perfil" src="./img/perfil.png"></th>
						<th class="usuario-nome"><h1><?php echo($nomeUser); ?></h1></th>
					</thead>
					<tr>
						<td>Apelido:</td> <td><?php echo($apelidoUser); ?></td>
					</tr>
					<tr>
						<td>Email:</td> <td><?php echo($emailUser); ?></td>
						
					</tr>
					<tr>
						<td>Campus:</td> <td><?php echo($campusUser); ?></td>
						
					</tr>
					<tr>
						<td>Corporação:</td> <td><?php echo($copUser); ?></td>
						
					</tr>
					<tr>
						<td>Equipe:</td> <td><?php echo($equipeUser); ?></td>
						
					</tr>
				</table>
				<div class="botao"><a href="">EDITAR PERFIL</a></div>
			</div>
		</div>
	</div>

	<div class="col-100 col-3">
		<div class="content">
			<div class="desafios">
				<h2>Meus Desafios</h2>
				<table class="table-desafios">
					<thead>
						<th>Título</th>
						<th>Data</th>
						<th>Dificuldade</th>
						<th>Linguagem</th>
						<th>Editar</th>
					</thead>
					<tbody>
						<tr>
							<td>Soma</td>
							<td>09/01</td>
							<td>Facil</td>
							<td>Java</td>
							<td><a href=""><img class="icon-edit"src="./img/edit.png"></a></td>
						</tr>
						<tr>
							<td>Soma</td>
							<td>09/01</td>
							<td>Facil</td>
							<td>Java</td>
							<td><a href=""><img class="icon-edit" src="./img/edit.png"></a></td>
						</tr>
					</tbody>
				</table>
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