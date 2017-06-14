<?php
class perfilController extends controller
{
	public function __construct(){
		$u = new Usuarios();
		$u->verificarLogin();
		
	}

	public function index()
	{
		$u = new Usuarios();

		if(isset($_POST['nome']) && !empty($_POST['nome'])){

			$nome = addslashes($_POST['nome']);
			$disciplina = addslashes($_POST['nome']);
			$instituicao = addslashes($_POST['instituicao']);
			$metodologia = addslashes($_POST['metodologia']);

			$u->updatePerfil(array(
				'nome' => $nome,
				'disciplina' => $disciplina,
				'instituicao' => $instituicao,
				'metodologia' => $metodologia

				));

			if(isset($_POST['senha']) && !empty($_POST['senha'])){
				$senha = md5($_POST['senha']);
				$u->updatePerfil(array
					('senha' => $senha
					));
		}
	}

		$dados['usuario_nome'] = $u->getNome($_SESSION['lgclass']);
		$dados['usuario_disciplina'] = $u->getDisciplina($_SESSION['lgclass']);
		$dados['usuario_instituicao'] = $u->getInstituicao($_SESSION['lgclass']);
		
		$dados['info'] = $u->getDados($_SESSION['lgclass']);
		
		$this->loadTemplate('perfil', $dados);
	}
}
?>