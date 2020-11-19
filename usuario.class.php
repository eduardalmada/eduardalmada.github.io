<?php 

class Usuario{
	public function login($email,$senha){
		global $pdo;

		$sql = "SELECT * FROM usuarios WHERE email_usuario = :email AND senha_usuario = :senha";

		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":senha",md5($senha));
		$sql->execute();


		if($sql->rowCount()> 0){
			$dado = $sql->fetch();


			$_SESSION["logado"] = $dado["id_usuario"];

			return true;
		}else{
			return false;
		}
	}
	public function logged($id){
		global $pdo;

		$array = array();
		$sql = "SELECT * FROM usuarios WHERE id_usuario = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":id",$id);
		$sql->execute();

		if($sql->rowCount()> 0){

			$array = $sql->fetch();
		}
	return $array;
	}
	public function verificaEmail($dados){
		global $pdo;

		$sql = "SELECT * FROM usuarios WHERE email_usuario = :email";

		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email",$dados['email']);
		$sql->execute();
		if($sql->rowCount()> 0){
			$_SESSION['email_existe'] = true;
			return true;
			exit;
		}else{
			$_SESSION['email_existe'] = false;
			return false;
			exit;
		}
	}

	public function Cadastrar($dados){
		global $pdo;
		$senha = $dados["senha"];
		$sql = $pdo->prepare("INSERT INTO usuarios (nome_usuario, email_usuario, campus_usuario, cop_usuario, equipe_usuario, senha_usuario, apelido_usuario, data_cadastro) VALUES(:nome, :email, :campus, :corp, :equipe, :senha, :apelido, NOW())");
		$sql->bindValue(":nome", $dados["nome"]);
		$sql->bindValue(":email", $dados["email"]);
		$sql->bindValue(":campus", $dados["campus"]);
		$sql->bindValue(":corp", $dados["corp"]);
		$sql->bindValue(":equipe", $dados["equipe"]);
		$sql->bindValue(":senha", md5($senha));
		$sql->bindValue(":apelido", $dados["apelido"]);
		$sql->execute();
		echo($dados['nome']);
		return true;
		exit;
		}
	
}


?>