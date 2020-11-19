<?php 
require_once 'conexao.php';
require 'usuario.class.php'; 
$dados = array(
'nome' => addslashes($_POST["nome"]),
'email' => addslashes($_POST["email"]),
'apelido' => addslashes($_POST["apelido"]),
'senha' => addslashes($_POST["senha"]),
'campus' => addslashes($_POST["campus"]),
'corp' => addslashes($_POST["corp"]),
'equipe' => 'nenhuma' );

$u = new Usuario;
if($u->verificaEmail($dados) == true){
	echo "email existente";
	header("Location: login.php");
}else{
	$u->Cadastrar($dados);
	$_SESSION['cadastro_sucesso'] = true;
	header("Location: login.php");
}


 ?>