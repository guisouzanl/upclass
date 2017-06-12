<?php
class homeController extends controller
{
	public function __construct(){
		$u = new Usuarios;
		$u->verificarLogin();
	}

	public function index()
	{
		$p = new Postagens();

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

		$dados['acervo'] = $p->getAcervo();

		$this->loadTemplate('home', $dados);
	}

	
}
?>