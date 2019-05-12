<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= viewport content= width=device-width initial-scale=1>
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php BASE_URL ?>assets/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<title>Pizzaria</title>

</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-secondary">Pizzaria Dokato <i class="fas fa-pizza-slice"></i></div>
      <div class="list-group list-group-flush">
        <a href="<?php BASE_URL ?>" class="list-group-item list-group-item-action bg-dark text-light">Novo Pedido</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           <h5 class="p-0 m-0">19-2223-0979 | 19-4439-2835</h5>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
        
        <?php $this->loadViewInTemplate($viewName,$viewData); ?>
        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php BASE_URL; ?>assets/js/jquery.min.js"></script>
  <script src="<?php BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
  <script type="text/javascript">
  $('.telefone').mask('(00)00000-0000'); 
  $('.cep').mask('00000-000'); 
  </script>  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>
</html>