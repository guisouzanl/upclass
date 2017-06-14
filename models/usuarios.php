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
		public function cadastrar($nome, $email, $disciplina, $instituicao, $metodologia, $senha){
			$sql = "SELECT * FROM usuarios WHERE email= '$email'";
			$sql = $this->db->query($sql);
			
			if($sql->rowCount() == 0){

				$sql = "INSERT INTO usuarios SET nome = '$nome', email= '$email', disciplina='$disciplina', instituicao='$instituicao', metodologia='$metodologia', senha = MD5('$senha')";
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
		public function getNome($id){
			$sql = "SELECT nome FROM usuarios WHERE id= '$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				return $sql['nome'];
			}
			else{
				return '';
			}

		}
		public function getDisciplina($id){
			$sql = "SELECT disciplina FROM usuarios WHERE id= '$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				return $sql['disciplina'];
			}
			else{
				return '';
			}

		}
		public function getInstituicao($id){
			$sql = "SELECT instituicao FROM usuarios WHERE id= '$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0) {
				$sql = $sql->fetch();
				return $sql['instituicao'];
			}
			else{
				return '';
			}

		}
		public function getDados($id){
			$array = array();

			$sql = "SELECT * FROM usuarios WHERE id = '$id'";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0) {
				$array = $sql->fetch();
		}
		return $array;
	}
	public function updatePerfil($array = array() ){
		if (count($array) > 0) {
			$sql = "UPDATE usuarios SET ";
			$campos = array();
			foreach ($array as $key => $value) {
				$campos[] .= $key." = '".$value. "'";
			}
			$sql .= implode(', ', $campos);

			$sql .= " WHERE id = '".($_SESSION['lgclass'])."'";
			echo $sql; exit;
			$this->db->query($sql);
		}
	}
}