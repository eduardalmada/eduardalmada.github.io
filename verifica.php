<?php 
	require 'conexao.php';
	if(isset($_SESSION["logado"]) && !empty($_SESSION["logado"])){
		require_once 'usuario.class.php';
		$usuario = new Usuario;
		$listlogged = array();
		$listlogged = $usuario->logged($_SESSION["logado"]);

		$nomeUser = $listlogged['nome_usuario'];
		$emailUser = $listlogged['email_usuario'];
		$campusUser = $listlogged['campus_usuario'];
		$copUser = $listlogged['cop_usuario'];
		$equipeUser = $listlogged['equipe_usuario'];
		$apelidoUser = $listlogged['apelido_usuario'];
	}else{
		header("Location: sair.php");
	}
 ?>