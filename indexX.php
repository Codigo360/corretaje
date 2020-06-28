<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
	<title>Sistema Corredor</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css"/>
	<meta name="description" content="corredor propiedades">
	<meta name="Keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="David Brantes">
    <!--script mensaje--> 
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   

    <link rel="stylesheet" type="text/css" href="assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleError.css">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/simple-sidebar.css" rel="stylesheet">
	
	
  	<style>
  		.slider
  		{
  			background: url("assets/img/slider.png");
  			background-size: cover;
  			background-position: center;
  			height: 400px;
 		}
 		.borde
 		{
 			border:1px solid black;
 
 		}
 		.borde2
 		{
 			border:1px solid red;
 		}
 		body
 		{
 			background: #FFFFFF;
 			background-size: cover;
 		}
 		
 		.contenedor:hover .imagen {-webkit-transform:scale(1.3);transform:scale(1.3);}
		.contenedor {overflow:hidden;}
 		
  	</style>
</head>
<body>
<nav class="navbar navbar-toggleable-md container-fluid fixed-top navfooter" style="border-bottom: 2px solid #8FC050">
<button class="btn btn-primary" id="menu-toggle">Menu</button>	
</nav> 
<hr> 	
<div class="container-fluid mt-5 ml-0">
 	<div class="row" id="wrapper">				
		<div class="col-lg-3 col-md-3" id="sidebar-wrapper" >				     				    
				    <div class="list-group">
				    	<a class="btn btn-outline-success btn-block" href="usuario/registro">Ingresar</a>
				        <a href="#" class="list-group-item list-group-item-action bg-light">Usuarios</a>
				        <a href="#" class="list-group-item list-group-item-action bg-light">Publicaciones</a>
				        <a href="#" class="list-group-item list-group-item-action bg-light">Estadisticas</a>
				        <a href="#" class="list-group-item list-group-item-action bg-light"></a>
				        <a href="#" class="list-group-item list-group-item-action bg-light"></a>
				        <a href="#" class="list-group-item list-group-item-action bg-light"></a>
				    </div>
  				

  		</div>
	</div>
</div>	



    <footer class="container-fluid text-white py-3 text-center navfooter" style="border-top: 2px solid #8FC050">
        <p><a href="www.codigo360.cl">Desarrollado por Código 360º</a></p> &copy; <?=date('Y')?>
    </footer>
    <!--Fin footer-->
	<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>