
<script type="text/javascript">
  $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a:not(".dropdown-toggle")') ) {
        $(this).collapse('hide');
    }
    $('.collapse').collapse() 
});

</script>
<div class="row" id="wrapper" >        
    <div class="col-6 col-md-2 " id="sidebar-wrapper" style="background: #EFF0F1;width: 100%">  
     <div class="list-group">
        <hr>
        <a class="btn btn-outline-info btn-block" href="http://localhost/mitchell/index-admin.php?controller=admin&action=index">Ingresar</a>
        <hr>
    <div class="pos-f-t">
 <div class="navbar-dark bg-dark">   
      <a href="<?=base_url?>" class="bg-dark list-group-item btn-outline-info" style="color:white"><img src="assets/img/web.svg">&nbsp;Visitar Sitio</a> 
  </div>
  <nav class="navbar-dark bg-dark"> 
    <a class="bg-dark list-group-item btn-outline-info" data-toggle="collapse" data-target="#navbarToggleExternalContent" style="color:white;cursor: pointer;">
      <img src="assets/img/flechas.svg">&nbsp;Publicaciones
    </a>
 
  </nav>
   <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-white">
     <a href="http://localhost/mitchell/index-admin.php?controller=publicaciones&action=index" class="list-group-item"><img src="assets/img/publicar.svg">Gestión</a>
    </div>
  </div>
   
  <div>
    <div class="navbar-dark bg-dark">
      <a href="http://localhost/mitchell/index-admin.php?controller=admin&action=gestion" class="bg-dark list-group-item btn-outline-info" style="color:white"><img src="assets/img/usuarios.svg">&nbsp;Usuarios</a>
    </div>
  </div>
  <div>
    <div class="navbar-dark bg-dark">
        <a href="http://localhost/mitchell/index-admin.php?controller=estadisticas&action=index" class="list-group-item btn-outline-info bg-dark" style="color:white"><img src="assets/img/estadistica.svg">&nbsp;Estadisticas</a>

    </div>
  </div>
  <div>
    <div class="navbar-dark bg-dark">
        <a href="#" class="list-group-item btn-outline-info bg-dark" style="color:white"><img src="assets/img/interrogacion.svg">&nbsp;Yxxxxxxxxxxx</a>
    </div>
  </div>
   <div>
    <div class="navbar-dark bg-dark">
        <a href="#" class="list-group-item btn-outline-info bg-dark" style="color:white"><img src="assets/img/interrogacion.svg">&nbsp;Yxxxxxxxxxxx</a>
    </div>
  </div>
  
</div> 
<!--************-->

      </div>
        </div>
  
  
