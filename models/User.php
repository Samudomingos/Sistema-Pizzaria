<?php

class Usuario {
  	
  	public function logar() 
  	{  
		if (isset($_POST['user']) && !empty($_POST['user'])) {
			
			$user = addslashes($_POST['user']);
			$pass = addslashes(md5($_POST['pass']));

			
			global $conn; 
			
			$results = $conn->prepare("SELECT * FROM tb_users WHERE pass = :pass AND user = :user");
			$results->bindValue(":user", $user); 
			$results->bindValue(":pass", $pass); 
			$results->execute();

			if ($results->rowCount() > 0) {
				
				$datauser = $results->fetch();

				$_SESSION['logado'] = $datauser['iduser'];

				header("location:".BASE_URL);

			} else{
				//Modal de erro
				
				
			}
		}	
	}
}


?>