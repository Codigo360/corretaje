<div class="container w-75 mb-5">
<h1 >Detalle de Publicación</h1>
<hr>
<div class="row">
	<div class="col-12 col-md-4">
		<?php if(isset($pro)):?>		
			<?php while ($cate = $categoria->fetch_object()):?>
				<?php if($cate->id == $pro->id_categoria):?>	
							<?='Tipo = '.$cate->nombre?><br/>
				<?php endif;?>						
			<?php endwhile;?>		
	</div>
	<div class="col-12 col-md-4">	
		<?='Id = '.$pro->id?><br/>
	</div>
	<div class="col-12 col-md-4">
		<?='Precio = '.$pro->precio?><br/>
	</div>
</div>	
<div class="row">
	<div class="col-12 col-md-4">	
		<?='Mt² = '.$pro->metros?><br/>
	</div>

	<div class="col-12 col-md-4">	
		<?='Dormitorios = '.$pro->dormitorio?><br/>
	</div>
	
	<div class="col-12 col-md-4">
		<?='Baños = '.$pro->bano?><br/>
	</div>
</div>
<br/>
<h4>Imagenes de la publicación</h4>
<hr>
<style type="text/css">
 .imgen{
  width: 250px;
  height: 200px;
  padding: 10px;
}
.fondo-modal
{
	background: #b3b3b3;

}
</style>

<div class="row">	
	<div class="col-12 col-md-3" style="text-align: center;">	
		<?php if(is_object($pro) && !empty($pro->imagen)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>" class="imgen"/> 
				</div>			
		<?php endif?>
		<!-- Button trigger modal-->
			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalYT">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/ver.svg" alt="Eliminar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			<!--Modal: modalYT-->
			<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			  aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <!--Content-->
			    <div class="modal-content">
			      <!--Body-->
			      <div class="modal-body mb-0 p-5">
			        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			          <img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>"
			            allowfullscreen></img>
			        </div>
			      </div>
			      <!--Footer-->
			        <button type="button" class="btn btn-warning btn-rounded btn-md m-auto"
			          data-dismiss="modal">Cerrar</button>
			             <hr>
			      </div>
			    </div>

			  </div>
	</div>

	
	<div class="col-12 col-md-3" style="text-align: center;">
		<?php if(is_object($pro) && !empty($pro->imagen1)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>" class="imgen"/>
				</div>
		<?php endif?>
		<!-- Button trigger modal-->
			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalYT1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/ver.svg" alt="Eliminar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			<!--Modal: modalYT-->
			<div class="modal fade" id="modalYT1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			  aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <!--Content-->
			    <div class="modal-content">
			      <!--Body-->
			      <div class="modal-body mb-0 p-5">
			        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			          <img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>"
			            allowfullscreen></img>
			        </div>
			      </div>
			      <!--Footer-->
			        <button type="button" class="btn btn-warning btn-rounded btn-md m-auto"
			          data-dismiss="modal">Cerrar</button>
			             <hr>
			      </div>
			    </div>
			  </div>
	</div>
	<div class="col-12 col-md-3" style="text-align: center;">
		<?php if(is_object($pro) && !empty($pro->imagen2)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>" class="imgen"/>
				</div>
		<?php endif?>
		<!-- Button trigger modal-->
			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalYT2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/ver.svg" alt="Eliminar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			<!--Modal: modalYT-->
			<div class="modal fade" id="modalYT2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			  aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <!--Content-->
			    <div class="modal-content">
			      <!--Body-->
			      <div class="modal-body mb-0 p-0">
			        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			          <img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>"
			            allowfullscreen></img>
			        </div>
			      </div>
			      <!--Footer-->
			        <button type="button" class="btn btn-warning btn-rounded btn-md m-auto"
			          data-dismiss="modal">Cerrar</button>
			             <hr>
			      </div>
			    </div>

			  </div>
	</div>
	<div class="col-12 col-md-3" style="text-align: center;">	
		<?php if(is_object($pro) && !empty($pro->imagen3)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>" class="imgen"/>
				</div>
		<?php endif?>
		<!-- Button trigger modal-->
			<button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalYT3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="assets/img/ver.svg" alt="Eliminar" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
			<!--Modal: modalYT-->
			<div class="modal fade" id="modalYT3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			  aria-hidden="true">
			  <div class="modal-dialog modal-lg" role="document">
			    <!--Content-->
			    <div class="modal-content">
			      <!--Body-->
			      <div class="modal-body mb-0 p-0">
			        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
			          <img class="embed-responsive-item img-fluid" src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>"
			            allowfullscreen></img>
			        </div>
			      </div>
			      <!--Footer-->
			        <button type="button" class="btn btn-warning btn-rounded btn-md m-auto"
			          data-dismiss="modal">Cerrar</button>
			             <hr>
			      </div>
			    </div>
			  </div>
	</div>
</div>	
	<?php endif; ?>
</div>
<hr>

</div>
</div>
