<?php
class loginController extends controller
{

	public function index(){
		$dados = array();

		$this->loadView('login', $dados);
	}

	public function entrar(){
		$dados = array();

		$this->loadView('login', $dados); 
}
		public function cadastrar(){
		$dados = array();

		$this->loadView('login', $dados); 
	}
}