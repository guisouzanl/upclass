<?php
class Usuarios extends model {
	public function verificarLogin(){
		if(!isset($_SESSION) || (isset($_SESSION['lgsocial']) &&  empty($_SESSION['lgsocial']))){
			header("Location: ".BASE."login");
			exit;
		}

		}
}