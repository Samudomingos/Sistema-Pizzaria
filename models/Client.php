<?php  

class Client {


	public function consult(){


		if (isset($_POST['clientCel']) && !empty($_POST['clientCel'])) {
			
			$array= array();
			global $conn;

			$clientCel = str_replace(array(')','(','-'),"",$_POST['clientCel']);

			$sql = "SELECT * from tb_client WHERE clientCel = :clientCel";
			$sql = $conn->prepare($sql);
			$sql->bindValue(":clientCel",$clientCel);
			$sql->execute();
			if ($sql->rowCount()>0) {
				
				$array = $sql->fetch();

			}

			return $array;
		}

	}
	public function getMenu(){

		if (isset($_POST['clientCel']) && !empty($_POST['clientCel'])) {
			
			$array= array();
			global $conn;

			$sql = "SELECT * from tb_menu";
			$sql = $conn->query($sql);
			if ($sql->rowCount()>0) {
				
				$array = $sql->fetchAll();

			}

			return $array;
			if(isset($_POST['requestPizza']) && !empty($_POST['requestPizza'])){
				
				$request = new Client();

				$requestPizza = addslashes($_POST['requestPizza']);
				$amount = addslashes($_POST['amount']);
				$additional = addslashes($_POST['additional']);

				$request->request($requestPizza, $amount, $additional);
			}
		}

	}
	public function request($requestPizza, $amount, $additional){

		$sql = "INSERT INTO tb_request (requestIdClient, requestPizza, amount, additional) VALUES (:requestIdClient, :requestPizza, :amount, :additional)";
		$sql = $conn->prepare($sql);
		$sql->bindValue("::requestIdClient",$_POST['clientId']);
		$sql->bindValue(":requestPizza",$requestPizza);
		$sql->bindValue(":amount", $amount);
		$sql->bindValue(":additional",$additional);
		$sql->execute();
		if ($sql->rowCount()>0) {
			
		}else{

		}

	}






}


?>