<?php
class Usuarios extends model {
	public function verificarLogin(){
			
		if(!isset($_SESSION['lgclass']) || (isset($_SESSION['lgclass']) && empty($_SESSION['lgclass']))) {
			header("Location: ".BASE."login");
			exit;
		}

		}
		public function logar($email, $senha){

			$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();

				$_SESSION['lgclass'] = $sql['id'];
				header("Location: ".BASE);
				exit;
			}
			else{
				return "E-mail e/ou senha incorretos!";
			}
		}
		public function cadastrar($nome, $email, $disciplina, $instituicao, $senha){
			$sql = "SELECT * FROM usuarios WHERE email= '$email'";
			$sql = $this->db->query($sql);
			
			if($sql->rowCount() == 0){

				$sql = "INSERT INTO usuarios SET nome = '$nome', sexo = '0', bio = '', email= '$email', disciplina='$disciplina', instituicao='$instituicao', senha = MD5('$senha')";
				$sql = $this->db->query($sql);

				$id = $this->db->lastInsertId();
				$_SESSION['lgclass'] = $id;
				header("Location: ".BASE);
				exit;
			}
			else{
				return "E-mail já está cadastrado";
			}


		}
}