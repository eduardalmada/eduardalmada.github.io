<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="./css/login.css">
	<title>Login e Cadastro</title>
	<meta charset="UTF-8">
</head>

<body>

	<?php 
	session_start();
	if(!isset($_SESSION["logado"])){
		 
	}else{
		header("Location:DesafioLista.php");
	}


	?>
	
	<header class="menu-principal">
		<main>
			<div class="header-1">

				<div class="logo">
					<a href="DesafioLista.php"><img src="./img/Logo_BUGCUP_principal.png"></a>
				</div>
			</div>
		</main>
	</header>

	<main class="col-100 menu-url">
		<div class="header-2">
			
		</div>
	</main>

	<div class="col-100 espacamento">
		<div class="content">
			<div class="divi"></div>
		</div>
	</div>

	<div class="col-100 formularios" >
		<div class="content">

			<div class="login">
				<form class="form-login"name="form-login" action="logar.php" method="POST">
					<h2>
						<strong>LOGIN</strong>
					</h2>
					<div>
						<label for="email">E-mail:</label>
						<input type="email" name="email" required>
					</div>
					<div>
						<label for="senha">Senha:</label>
						<input type="password" name="senha" required>
					</div>
					<div>
						<input type="submit" name="submit" value="Logar">
					</div>
				</form>
				<div class="login-alertas">
					<?php 
							if(!isset($_SESSION['login_erro'])):

							else:
								if($_SESSION['login_erro'] == true):
					

						?>

						<div class="login-erro">
							<center>
							Email ou Senha Invalidos!<br>
							Tente Novamente.
							</center>
						</div>

						<?php 
							unset($_SESSION['login_erro']);
						endif;
						endif
						?>
					
				</div>
			</div>

			<div class="registro">
				<form class="form-cadastro"name="form-cadastro" action="cadastrar.php" method="POST">
					<h2>
						<strong>CADASTRO</strong>
					</h2>
					<div>
						<label for="nome">Nome:</label>
						<input type="text" name="nome" required>
					</div>
					<div>
						<label for="email">Email:</label>
						<input type="email" name="email" required>
					</div>
					<div>
						<label for="apelido">Apelido:</label>
						<input type="text" name="apelido" required>
					</div>
					<div>
						<label for="senha">Senha:</label>
						<input type="password" name="senha" required>
					</div>
					<div>
						<label for="campus">Campus:</label>
						<select name="campus" required>
							<option value="Alegrete">Alegrete</option>
							<option value="Frederico Westphalen">Frederico Westphalen</option>
							<option value="Jaguari">Jaguari</option>
							<option value="Júlio de Castilhos">Júlio de Castilhos</option>
							<option value="Panambi">Panambi</option>
							<option value="Santa Rosa">Santa Rosa</option>
							<option value="Santo Ângelo">Santo Ângelo</option>
							<option value="Santo Augusto">Santo Augusto</option>
							<option value="São Borja">São Borja</option>
							<option value="São Vicente do Sul">São Vicente do Sul</option>
							<option value="Campus Avançado Uruguaiana">Campus Avançado Uruguaiana</option>
							<option value="Reitoria">Reitoria</option>
						</select>
					</div>
					<div CLASS="select-corp">
					
						<INPUT TYPE="radio" NAME="corp" VALUE="discente" checked>
						<label for="Discente">DISCENTE</label>
						<INPUT TYPE="radio" NAME="corp" VALUE="docente">
						<label for="Docente">DOCENTE</label>
					</div>
					<div>
						<input type="submit" name="submit" value="Cadastrar">
						<input type="reset" name="reset" value="Limpar">
					</div>
				</form>
					<div class="cadastro-alerta">
						<?php 
							if(!isset($_SESSION['email_existe'])):

							else:
								if($_SESSION['email_existe'] == true):
					

						?>
						<div class="email-usado">
							<center>
								O Email Usado já Existe!<br>
								Informe Outro e Tente Novamente.
							</center>
						</div>
						<?php 
							unset($_SESSION['email_existe']);
						endif;
						endif
						?>

						<?php 
							if(!isset($_SESSION['cadastro_sucesso'])):

							else:
								if($_SESSION['cadastro_sucesso'] == true):
					

						?>

						<div class="cadastro-efetuado">
							<center>
								Cadastro Efetuado com Sucesso!<br>
								Faça login informando o seu usuario e senha ao lado.
							</center>
						</div>

						<?php 
							unset($_SESSION['cadastro_sucesso']);
						endif;
						endif
						?>

				</div>

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