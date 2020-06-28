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
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/destacado.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styleError.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="<?=base_url?>assets/css/styleRespon.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/detallePropiedad.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/header.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<!--Confirma ingreso y eliminacion-->
	<script type="text/javascript">
	$(document).ready(function () {
    $("#popup").hide().fadeIn(100);    
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(100);
    });
	});
	</script>
	<!--Menú-->
	<script>
     $(document).ready(function(){      
        $('#alternar-todo').on('click',function(e){
            $('.respuesta').toggle('slow');
            $('.respuesta2').slideUp('slow');
            e.preventDefault();
        });
        $('#alternar-todo2').on('click',function(e){
            $('.respuesta2').toggle('slow');
            e.preventDefault();
        });
    });
    </script>
    
    <script>    	
	$(document).ready(function(){
		 $("#go").click(function(){
            $(".con1").animate({left:"-500px"}, 2000);
        });
    });
    </script>	  
</head>
<body>
<div>	
<nav class="fixed-top">  	
<!--Menú-->
	<div class="row">
		<div class="col-md-2 col-3 mt-2 mt-md-0">
			<div class="logo"><img id="go" class="img-fluid rounded float-left" src="<?=base_url?>assets/img/casa.png" width=35% ></a></div>	
		</div>
		<div class="col-md-10 col-9 conMenu">	
			<div class="con1 menuCaja">	
				<a href="" id="alternar-todo" class="tipografia" style="color: black">Menú</a>
				<div class="dropdown-divider respuesta" style="display:none;background: black"></div>
				<p><a href="<?=base_url?>" class="respuesta tipografia2" style="display:none;color: black">Inicio</a></p>
				<div class="dropdown-divider respuesta" style="display:none"></div>	
				<p><a href="<?=base_url?>categoria/index" class="respuesta tipografia2" style="display:none;color: black">Categorias</a></p>						
				<div class="dropdown-divider respuesta" style="display:none"></div>
				<p><a href="#" class="respuesta tipografia2" id="alternar-todo2" style="display:none;color: black">Propiedades</a></p>
				
				<p class="subMenu"><a href="<?=base_url?>propiedades/gestion" class="respuesta2 tipografia2" style="display: none;color: black" >Gestión</a></p>
				<div class="dropdown-divider respuesta" style="display:none"></div>
				<p class="subMenu"><a href="<?=base_url?>propiedades/gestion" class="respuesta2 tipografia2" style="display: none;color: black" >Detalle</a></p>
				<p><a href="<?=base_url?>" class="respuesta" style="display:none;color: black">Categoria</a></p>
			</div>
		</div>
	</div>
</nav>
<!--Fin Menú-->
<header>
  <div class="headline" style="z-index:0">
    <div class="inner">
      <h1 class="tipografia" >Arriendo Propiedades</h1>
     
    </div>
  </div>
</header>
<!--Modal Inicio sesion-->
<?php if(!isset($_SESSION['identity'])): ?>						
	<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			  aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			    <!--Content-->
			<div class="modal-content">
			      <!--Body-->
			    <div class="modal-body mb-0 p-5">
			        <div class="embed-responsive z-depth-1-half">
			       			<h3>Entrar a la web</h3>
							<form class="form-group" action="<?=base_url?>usuario/login" method="post">
								<label for="email">Email</label>
								<input class="form-control" type="email" name="email" />
								<label for="password">Contraseña</label>
								<input class="form-control"type="password" name="password" />
								<input class="btn" type="submit" value="Ingresar" />
							</form>
				    </div>
			    </div>
			</div>
		</div>
	</div>	
<?php else:?>
		<?php 
			$nombre=$_SESSION['identity']->nombre;
			$apellido=$_SESSION['identity']->apellidos; 
			?>
<?php endif; ?>
<!--Fin Modal Inicio sesion-->
<div class="clearfix mt-md-5 mt-5 mt-xl-5" >
	<div class="row mx-auto">
		<div class="col-12 col-md-2 cuadro clearfix">
			<div class="row">	
				<div class="col-4 col-md-4 mt-3 mt-md-0">
					<a class="btn btn-outline-secondary" style="cursor: pointer;" data-toggle="modal" data-target="#modalYT">
					<img src="<?=base_url?>assets/img/usuarios.svg" alt="Iniciar Sesion" title="Iniciar Sesion" class="rounded" /></a>
				</div>
				<div class="col-4 col-md-4 mt-3 mt-md-0">
					<a class="btn btn-outline-secondary" style="cursor: pointer;" href="<?=base_url?>usuario/logout"><img src="<?=base_url?>assets/img/salir.svg" alt="Salir" title="Salir" /></a>
				</div>
				<div class="col-4 col-md-4 mt-3 mt-md-0">	
					<a class="btn btn-outline-secondary" href="<?=base_url?>usuario/registro"><img src="<?=base_url?>/assets/img/registro.svg" alt="Registrar"></a>
				</div>
			</div>
			<hr>
			<div class="row mt-md-3 mt-3">	
				<section class="d-flex text-center">
  					<div class="container d-flex justify-content-center">
   						<div class="row align-items-center justify-content-center">
		     				<div class="col-12 tipografia2">
		     				 	<?php if((!empty($_SESSION['identity'])) && (!empty($_SESSION['identity']->apellidos))):?>
								<?='Hola<br/>'?>
								<?=$nombre?> <?=$apellido?>
								<?php else:?>
								<?='Bienvenido a nuestro sitio'?>	
								<?php endif;?>						
							</div>
   						</div>
 					</div>
				</section>	
			</div>	
		</div>
		<div class="col-12 col-md-10 float-left">
			<div class="row ">	
				<div class="col-12 col-md-12">
					<h4 class="tipografia mt-md-0" style="text-align: center;">Búsqueda Propiedad</h4>
					<form>
 						<div class="row mb-3 mb-md-4">
    						<div class="col">
      							<input type="text" class="form-control tipografia2" placeholder="Ciudad">
    						</div>
    						<div class="col">
      							<input type="text" class="form-control tipografia2" placeholder="Comuna">
   							</div>
  						</div>
  						<div class="row mb-3 mb-md-4">
    						<div class="col">
      							<input type="text" class="form-control tipografia2" placeholder="Tipo">
    						</div>
    						<div class="col">
      							<input type="text" class="form-control tipografia2" placeholder="Precio">
   							 </div>
  						</div>
  						<div class="row">
  							<div class="col">
  								<button type="submit" class="btn btn-primary">Buscar</button>
  							</div>
  						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
	



	
		