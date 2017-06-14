<?php
class loginController extends controller
{

	public function index(){
		$dados = array('erro' => '');


		if(isset($_POST['email']) && !empty($_POST['email'])) {
			$action = addslashes($_POST['action']);

			$u = new Usuarios();

			if($action == 'login') {
				$email = addslashes($_POST['email']);
				$senha = md5($_POST['senha']);

				$dados['erro'] = $u->logar($email, $senha);
			}
			elseif($action == 'cadastrar') {
				$nome = addslashes($_POST['nome']);
				$email = addslashes($_POST['email']);
				$disciplina = addslashes($_POST['disciplina']);
				$instituicao = addslashes($_POST['instituicao']);
				$metodologia = addslashes($_POST['metodologia']);
				$senha = md5($_POST['senha']);

				$dados['erro'] = $u->cadastrar($nome, $email, $disciplina, $instituicao, $metodologia, $senha);
			}

		}
		$this->loadView('login', $dados);
	}

		

	public function sair(){
		unset($_SESSION['lgclass']);
		header("Location: ".BASE.'login');
	}
}