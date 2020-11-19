<?php 
	session_start();
	if(!isset($_SESSION)){
		header('Location: login.php');
	}else{
		unset($_SESSION["logado"]);

		header('Location: login.php');
	}	
	
?>