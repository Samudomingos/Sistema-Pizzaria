<?php  
class loginController extends controller{

	public function index(){

		$this->loadView('login', $data = array());

		$user = new Usuario();
		$user->logar();

	}


}