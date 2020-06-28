<script>
     $(document).ready(function () {
      $("#ip").hide().fadeIn(100);
      $("#i1").hide().fadeOut(100);
      $("#i2").hide().fadeOut(100);
      $("#i3").hide().fadeOut(100);
      $("#i4").hide().fadeOut(100);  
      $("#1").on("click", function (e) {
        e.preventDefault();
        $("#i1").fadeIn(100);
        $("#i2").fadeOut(100);
        $("#i3").fadeOut(100);
        $("#i4").fadeOut(100);
        $("#ip").fadeOut(100); 
    });
      $("#2").on("click", function (e) {
        e.preventDefault();
        $("#i1").fadeOut(100);
        $("#i2").fadeIn(100);
        $("#i3").fadeOut(100);
        $("#i4").fadeOut(100);
        $("#ip").fadeOut(100);  
    });
      $("#3").on("click", function (e) {
        e.preventDefault();
        $("#i1").fadeOut(100);
        $("#i2").fadeOut(100);
        $("#i3").fadeIn(100);
        $("#i4").fadeOut(100);
        $("#ip").fadeOut(100);  
    });
       $("#4").on("click", function (e) {
        e.preventDefault();
        $("#i1").fadeOut(100);
        $("#i2").fadeOut(100);
        $("#i3").fadeOut(100);
        $("#i4").fadeIn(100); 
        $("#ip").fadeOut(100); 
    });
        $("#inicio").on("click", function (e) {
        e.preventDefault();
        $("#i1").fadeOut(100);
        $("#i2").fadeOut(100);
        $("#i3").fadeOut(100);
        $("#i4").fadeOut(100); 
        $("#ip").fadeIn(100); 
    });
    });
</script> 

<div class="row" id="contienetodo">
	<!--*********************Imagen Portada************************************-->	
	
	<div class="col-md-5 col-12" id="contienefoto" >		
		<h3 class="tipografia" id="tituloImagenes">Imagenes</h3>
		<div class="dropdown-divider w-75" id="divimagen"></div>
		<div id="fotos">
		<div id="numeros" class="tipografia2 ">
	            <a href="#" style="cursor: pointer;" class="btn" id="inicio">Inicio</a>
				<a href="#" class="btn cadnum" id="1">1</a>
				<a href="#" class="btn cadnum" id="2">2</a>
				<a href="#" class="btn cadnum" id="3">3</a>
				<a href="#" class="btn cadnum" id="4">4</a>
		</div>	
        
         <img id="ip"class="imgen" src="<?=base_url?>assets/img/portadaImg.jpg">
    <!--*********************Imagen Portada************************************-->
			<?php if(is_object($pro) && !empty($pro->imagen)):?>							
				<a data-toggle="modal" data-target="#modalYT0" style="cursor: zoom-in;"><img id="i1" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>" class="imgen"/></a>
			<?php endif?>							
	<!--*************************Imagen Portada 1********************************-->			
			<?php if(is_object($pro) && !empty($pro->imagen1)):?>													
				<a data-toggle="modal" data-target="#modalYT1" style="cursor: zoom-in;"><img id="i2" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>" class="imgen"/></a>			
			<?php endif?>			
	<!--****************************Imagen Portada 2*****************************-->
			<?php if(is_object($pro) && !empty($pro->imagen2)):?>												
				<a data-toggle="modal" data-target="#modalYT2" style="cursor: zoom-in;"><img id="i3" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>" class="imgen"/></a>		
			<?php endif?>					
	<!--*************************Imagen Portada 3********************************-->			
				<?php if(is_object($pro) && !empty($pro->imagen3)):?>
					<a data-toggle="modal" data-target="#modalYT3" style="cursor: zoom-in;"><img id="i4" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>" class="imgen"/></a>
				<?php endif?>
		</div>		
			
	</div>
	
	<div class="col-md-3 col-12" id="contienedetalle">

	<h3 id="tituloDetalle" class="tipografia">Detalle Propiedad</h3>
	<div class="dropdown-divider w-100" id="dividetalle" ></div>	
		<?php if(isset($pro)):?>
			<div class="row" id="detalle" >
				<div class="col-md-6 col-6">
					<div><strong style="font-size:100%">Tipo Propiedad</strong>
						<div class="dropdown-divider" ></div>
					</div>
					<div><strong style="font-size:100%">Id Propiedad</strong>
					<div class="dropdown-divider" ></div>
					</div>
					<div><strong style="font-size:100%">Precio</strong>
					<div class="dropdown-divider" ></div>
					</div>
					<div><strong style="font-size:100%">MT² Propiedad</strong>
					<div class="dropdown-divider" ></div>
					</div>
					<div><strong style="font-size:100%">Nº Dormitorios</strong>
					<div class="dropdown-divider" ></div>
					</div>
					<div><strong style="font-size:100%">Nº Baños</strong>
					<div class="dropdown-divider" ></div>
					</div>
				</div>
				
				<div class="col-md-6 col-6">

				<div>			
					<?php while ($cate = $categoria->fetch_object()):?>
						<?php if($cate->id == $pro->id_categoria):?>	
								<strong style="font-size:100%;margin-left:5%";><?=$cate->nombre?></strong>
						<?php endif;?>						
					<?php endwhile;?>
					<div class="dropdown-divider" ></div>
				</div>
				<div>				
					<strong style="font-size:100%;margin-left:5%";><?=$pro->id?></strong>
					<div class="dropdown-divider" ></div>
				</div>
				<div>
					<strong style="font-size:100%;margin-left:5%";><?=$pro->precio?></strong>
					<div class="dropdown-divider" ></div>
				</div>
				<div>
					<strong style="font-size:100%;margin-left:5%";><?=$pro->metros?></strong>
					<div class="dropdown-divider" ></div>
				</div>
				<div>
					<strong style="font-size:100%;margin-left:5%";><?=$pro->dormitorio?></strong>
					<div class="dropdown-divider" ></div>
				</div>
				<div>
					<strong style="font-size:100%;margin-left:5%";><?=$pro->bano?></strong>
					<div class="dropdown-divider" ></div>
				</div>
				</div>
				
			</div>
		<?php endif; ?>		
	</div>
	<div class="col-md-3 col-12" id="contienepago">
		<h3 class="tipografia" id="titulopago">Formas de Pago</h3>
		<div class="dropdown-divider w-100" id="divipago"></div>

	<div id="pago">
		<img id="imgpago"src="<?=base_url?>assets/img/redcompra.png"></a>
	</div>
	</div>
	
</div>
<!--********************************Modals Portada***********************************-->
<div class="modal fade" id="modalYT0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-5">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>"allowfullscreen>
				</div>
			</div>
				<button type="button" class="btn btn-warning btn-rounded btn-md m-auto mx-auto" data-dismiss="modal">Cerrar</button>
			<hr>
		</div>
	</div>
</div>
<!--**************************************Modals Foto 1*********************************-->
<div class="modal fade" id="modalYT1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-5">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>"allowfullscreen>
				</div>
			</div>
				<button type="button" class="btn btn-warning btn-rounded btn-md m-auto mx-auto" data-dismiss="modal">Cerrar</button>
			<hr>
		</div>
	</div>
</div>
<!--****************************************Modals Foto 2*********************************-->
<div class="modal fade" id="modalYT2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-5">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>"allowfullscreen>
				</div>
				</div>
					<button type="button" class="btn btn-warning btn-rounded btn-md m-auto mx-auto" data-dismiss="modal">Cerrar</button>
				<hr>
		</div>
	</div>
</div>
<!--******************************************Modals Foto 3************************************-->
<div class="modal fade" id="modalYT3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-body mb-0 p-5">
				<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
					<img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>"allowfullscreen>
				</div>
			</div>
					<button type="button" class="btn btn-warning btn-rounded btn-md m-auto mx-auto" data-dismiss="modal">Cerrar</button>
			<hr>
		</div>
	</div>
</div>

