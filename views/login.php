<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= viewport content= width=device-width initial-scale=1>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<title>Login - Pizzaria</title>

</head>
<body class="bg-login">
	<div class="container">
		<h1 class="d-flex justify-content-center text-light mb-5 mt-5">Bem Vindo a Pizzaria Dokatos</h1>
		<div class="container d-flex justify-content-center">
			<form method="POST">
			  <div class="form-group">
			    <label class="text-light" for="exampleInputUsuario">Usuário</label>
			    <input name="user" type="text" class="form-control" id="exampleInputUsuario" aria-describedby="emailHelp" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label class="text-light" for="exampleInputPassword1">Senha</label>
			    <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
			  </div>
			  <button type="submit" class="btn btn-primary">Entrar</button>
			</form>
		</div>		
	</div>

	<script type="text/javascript" src="assets/js/jquery.min.js">
	</script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>