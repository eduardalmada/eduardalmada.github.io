<?php 
	
	if(isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["senha"]) && !empty($_POST["senha"])){
		require 'conexao.php';
		require 'usuario.class.php'; 

		$email = addslashes($_POST["email"]);
		$senha = addslashes($_POST["senha"]);

		$usuario = new Usuario;

		if($usuario->login($email,$senha) == true){
			if(isset($_SESSION["logado"])){
				header("Location:index.php");
			}else{
				header("Location:login.php");
			}
		}else{
			$_SESSION['login_erro'] = true;
			header("Location:login.php");

		}



	}else{
		hearder("Location:login.php");
	}	

 ?>