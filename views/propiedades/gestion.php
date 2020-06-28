<div>
	<h1 class="tipografia" style="text-align: center;">Gestion de Propiedades</h1>
	<a href="<?=base_url?>propiedades/crear">
		<p class="pl-5"><img width="30px" src="<?=base_url?>assets/img/nuevo.png" alt="Nueva propiedad" title="Nueva propiedad" />Nueva propiedad..</p>
	</a>
	<hr>   
	
	<?php if(isset($_SESSION['propiedad'])&& $_SESSION['propiedad']=='complete'):?>	
	<div id="popup" class="popup panel panel-primary">
        <div id="popup" class="popup panel panel-primary">
        	<div class="modal-body">
				<p class="tipografia">Propiedad guardada..</p>
        	</div>	
        	<div class="modal-footer">
            	<button id="close" class="btn btn-lg btn-primary">Cerrar</button>
        	</div>
    	</div>
    </div>

		<!--***************-->	
	<?php elseif (isset($_SESSION['propiedad']) && $_SESSION['propiedad']=='failed'):?>
		<div id="popup" class="popup panel panel-primary">
        	<div class="modal-body">
				<p class="tipografia">No se ha registrado su propiedad..</p>
        	</div>	
        	<div class="modal-footer">
            	<button id="close" class="btn btn-lg btn-primary">Cerrar</button>
        	</div>
    	</div>						
	<?php endif;?>
	<!--***************-->	
	<?php if(isset($_SESSION['propiedad'])):?>
			<?php $_SESSION['propiedad'] = null;
			unset($_SESSION['propiedad']);?>
	<?php endif;?>
	<?php if(isset($_SESSION['delete'])&& $_SESSION['delete']=='complete'):?>		
		<div id="popup" class="popup panel panel-primary">
        	<div class="modal-body">
				<p class="tipografia">Propiedad a sido eliminada..</p>
        	</div>	
        	<div class="modal-footer">
            	<button id="close" class="btn btn-lg btn-primary">Cerrar</button>
        	</div>
    	</div>			
	<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete']=='failed'):?>	
		<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div id="popup" class="popup panel panel-primary">
	        	<div class="modal-body">
					<p class="tipografia">No se ha podido eliminar la propiedad..</p>
	        	</div>	
	        	<div class="modal-footer">
	            	<button id="close" class="btn btn-lg btn-primary">Cerrar</button>
	        	</div>
	    	</div>
    	</div>
    	</div>						
	<?php endif;?>	
	<!--***************-->	
	<?php if(isset($_SESSION['delete'])):?>
		<?php $_SESSION['delete'] = null;
		unset($_SESSION['delete']);?>
	<?php endif;?>	

	<div class="row">	
		<div class="col-12 mr-md-4">
			<table class="table table-responsive ml-md-5 p-md-5 p-0 ml-0">
				<thead>
					<tr>
						<th style="text-align: center;">ID</th>
						<th style="text-align: center;">ID_C</th>
						<th style="text-align: center;">PRECIO</th>
						<th style="text-align: center;">MT²</th>
						<th style="text-align: center;">DORMITORIOS</th>
						<th style="text-align: center;">BAÑOS</th>
						<th style="text-align: center;">DIRECCION</th>
						<th style="text-align: center;">CIUDAD</th>
						<th style="text-align: center;">IMAGEN</th>
						<th style="text-align: center;">IMG1</th>
						<th style="text-align: center;">IMG2</th>
						<th style="text-align: center;">IMG3</th>
						<th style="text-align: center;">FECHA</th>
						<th style="text-align: center;">EDITAR</th>
						<th style="text-align: center;">ELIMINAR</th>
					</tr>
				</thead>   
				<?php while($pro = $propiedades->fetch_object()):?>
					<?php $originalDate = $pro->fecha;	
					$newDate = date("d/m/Y", strtotime($originalDate));?>
					<tbody>
						<tr style="text-align: center;">
							<td><?=$pro->id?></td>
							<td><?=$pro->id_categoria?></td>
							<td><?=$pro->precio?></td>
							<td><?=$pro->metros?></td>
							<td><?=$pro->dormitorio?></td>
							<td><?=$pro->bano?></td>
							<td><?=$pro->direccion?></td>
							<td><?=$pro->ciudad?></td>
							<td><?=$pro->imagen?></td>
							<td><?=$pro->imagen1?></td>
							<td><?=$pro->imagen2?></td>
							<td><?=$pro->imagen3?></td>
							<td><?php if ($newDate=="31/12/1969"):?>								
								<?="00/00/00";?>
							<?php else: ?>
								<?=$newDate;?>
							<?php endif; ?>	
							</td>
							<td>
								<a href="http://localhost/mitchell/index.php?controller=propiedades&action=editar&id=<?=$pro->id?>"  title="Editar"><img width="30px" src="<?=base_url?>assets/img/editar.png" alt="Eliminar"/></a>
							</td>
							<td>	
								<a href="http://localhost/mitchell/index.php?controller=propiedades&action=eliminar&id=<?=$pro->id?>" title="Eliminar" ><img width="30px" src="<?=base_url?>assets/img/eliminar.svg" alt="Eliminar" /></a>
							</td>
						</tr>
					</tbody>
				<?php endwhile; ?>
			</table>
		</div>	
	</div>
</div>


