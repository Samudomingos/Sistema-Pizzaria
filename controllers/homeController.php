<?php  

class homeController extends controller{

	public function index(){		
		if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])){

			$this->loadTemplate('home',$data = array());

			if(isset($_POST['clientCel']) && !empty($_POST['clientCel']))
			{
				global $conn;

				$clientCel = str_replace(array('(',')','-'),"", $_POST['clientCel']);

				$sql = "SELECT * FROM tb_client WHERE clientCel = :clientCel";
				$results = $conn->prepare($sql);
				$results->bindValue(":clientCel", addslashes($clientCel));
				$results->execute();

				if ($results->rowCount()>0) {
					
					$data = $results->fetch();
					
					$clientId = $data['clientId'];
					$clientName = $data['clientName'];
					$clientCel = $data['clientCel'];
					$clientCity = $data['clientCity'];
					$clientAddress = $data['clientAddress'];
					$clientZip = $data['clientZip'];
					$clientLastPizza = $data['lastPizza'];


				}else{
					echo "erro";
				}
			}

		}else {

			header("Location:".BASE_URL."login");
			exit;
		}
		
	}







}
?>