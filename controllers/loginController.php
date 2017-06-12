<?php
class loginController extends controller
{

	public function index(){
		$dados = array();

		$this->loadView('login', $dados);
	}

	public function entrar(){
		$dados = array('erro' => '');

		if(isset($_POST['email']) && !empty($_POST['email'])) {

			$email = addslashes($_POST['email']);
			$senha = md5($_POST['senha']);

			$u = new Usuarios();

			$dados['erro'] = $u->logar($email, $senha);

		}

		$this->loadView('login', $dados); 
}
		public function cadastrar(){
		$dados = array();

		if(isset($_POST['email']) && !empty($_POST['email'])) {

			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);

			$u = new Usuarios();

			$dados['erro'] = $u->cadastrar($nome, $email, $senha);
		}
		$this->loadView('login', $dados); 
	}
	public function sair(){
		unset($_SESSION['lgclass']);
		header("Location: ".BASE);
	}
}