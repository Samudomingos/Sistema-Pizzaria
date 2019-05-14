<?php  

class homeController extends controller{

	public function index(){		
		if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])){

			$this->loadTemplate('home',$data = array());
		}else {

			header("Location:".BASE_URL."login");
			exit;
		}
		
	}







}
?>