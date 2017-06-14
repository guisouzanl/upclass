<?php
class homeController extends controller
{
	public function __construct(){
		$u = new Usuarios();
		$u->verificarLogin();
		
	}

	public function index()
	{
		$u = new Usuarios();
		$p = new Postagens();
		$a = new Amizades();

		$dados['usuario_nome'] = $u->getNome($_SESSION['lgclass']);
		$dados['usuario_disciplina'] = $u->getDisciplina($_SESSION['lgclass']);
		$dados['usuario_instituicao'] = $u->getInstituicao($_SESSION['lgclass']);

		

		if(isset($_POST['post']) && !empty($_POST['post'])){
			$postmsg = addslashes($_POST['post']);
			$foto = array();
			$file = array();

			if (isset($_FILES['foto']) && !empty($_FILES['file'])){
				$foto = $_FILES['foto'];
			}
			
			if (isset($_FILES['file']) && !empty($_FILES['file'])){
				$file = $_FILES['file'];
			}
		
			
			$p->addPostagens($postmsg, $foto, $file);
		}

		$dados['sugestoes'] = $a->getSugestoes(3);
		$dados['requisicoes'] = $a->getRequisicoes();

		$dados['acervo'] = $p->getAcervo();

		$this->loadTemplate('home', $dados);
	}

	
}
?>