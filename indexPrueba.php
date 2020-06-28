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
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style5.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/demo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styleError.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="<?=base_url?>assets/css/styleRespon.css">
  
  <script>
        $(document).ready(function()
        {
           $("#mostrarmodal").modal("show");
        });
  </script>
    <!--Estilo CSs-->
    
</head>
<body class="m-1 clearfix">
<!--Menú--> 
<nav>

  
      <div class="logo">&nbsp;&nbsp;&nbsp;<img src="<?=base_url?>assets/img/casa.png" width="10%"></div>      

 <!--***************************-->

    <ul>
      <li><a class="nav-link" href="<?=base_url?>">Inicio <span class="sr-only">(current)</span></a></li>
      <li><a class="nav-link" href="<?=base_url?>categoria/index">Categorias</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Propiedades</a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="width: auto;" href="<?=base_url?>propiedades/gestion">Gestión</a>
                <!--<div class="dropdown-divider"></div>-->
              </div>
      </li>
      <li><a class="nav-link" href="<?=base_url?>">Categoria</a></li>
      <li><a class="nav-link" href="<?=base_url?>">Categoria</a></li>   
    </ul>
</nav>
<!--Fin Menú-->
 <header>
  <div class="headline">
    <div class="inner">
      <h1 class="tipografia">Arriendo Propiedades</h1>
     
    </div>
  </div>
</header>     
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
<div class="clearfix mt-md-5 mt-5 mt-xl-5" >
  <div class="row mx-auto">
    <div class="col-12 col-md-2 cuadro clearfix">
      <div class="row"> 
        <div class="col-12 col-md-4 mt-md-0">
          <a class="btn btn-outline-success btn-block" style="cursor: pointer;" data-toggle="modal" data-target="#modalYT"><img src="<?=base_url?>assets/img/usuarios.svg" alt="Iniciar Sesion" title="Iniciar Sesion" class="rounded" /></a>
        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">
          <a class="btn btn-outline-success btn-block" style="cursor: pointer;" href="<?=base_url?>usuario/logout"><img src="<?=base_url?>assets/img/salir.svg" alt="Salir" title="Salir" /></a></li>
        </div>
        <div class="col-12 col-md-4 mt-3 mt-md-0">  
          <a class="btn btn-outline-success btn-block" href="<?=base_url?>usuario/registro"><img src="<?=base_url?>/assets/img/registro.svg" alt="Registrar"></a>
        </div>
      </div>
      <hr>
      <div class="row mt-md-3 mt-3">  
        <section class="d-flex text-center">
            <div class="container d-flex justify-content-center">
            <div class="row align-items-center justify-content-center">
            <div class="col-12 tipografia2">
                 
          </div>
            </div>
          </div>
        </section>
        <!--<div class="col-12 col-md-12">
          
        </div>--> 
      </div>  
    </div>
    <div class="col-12 col-md-10">
      <div class="row ">  
        <div class="col-12 col-md-12">
          <h4 class="tipografia mt-md-0">Búsqueda Propiedad</h4>
          <form>
            <div class="row mb-3 mb-md-4">
                <div class="col">
                    <input type="text" class="form-control tipografia2" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control tipografia2" placeholder="Last name">
                 </div>
              </div>
              <div class="row mb-3 mb-md-4">
                <div class="col">
                    <input type="text" class="form-control tipografia2" placeholder="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control tipografia2" placeholder="Last name">
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
</div> 
<div class="ml-auto mr-auto">
  <h3>Propiedades destacadas</h3>
  <hr>    
    <div class="row">
      <div class="col-md-4 col-sm-12 mb-3">       
          <div class="ch-item">       
            <div class="ch-info-wrap">
              <div class="ch-info">                 
                <div class="ch-info-front"></div>                 
                      <div class="ch-info-back">
                        <h4 style="text-align: center;">Arriendo</h4>
                      
                      </div>  
                </div>
            </div>
            <img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen?>">
          </div>
      </div>
    </div>
</div>
  <!--Footer-->

    <footer class="container-fluid text-white py-3 text-center tipografia mt-md-5" style="background:red;" >
        <p><a href="www.codigo360.cl">Desarrollado por Código 360º</a></p> &copy; <?=date('Y')?>
    </footer>
    <!--Fin footer-->
    <script src="<?=base_url?>assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url?>assets/js/tether.min.js"></script>
    
    <script src="<?=base_url?>assets/js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="<?=base_url?>assets/js/indexRespon.js"></script>

</body>
</html> 

