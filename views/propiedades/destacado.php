	
<h3 class="tipografia" style="text-align: center;">Propiedades destacadas</h3>
	
<div class="row ml-md-1 mr-md-1">
	<?php while($propiedad = $propiedades->fetch_object()):?>				
		<div class="col-md-4 col-sm-12 mb-3">				
		    <div class="ch-item">				
				<div class="ch-info-wrap">
					<div class="ch-info">									
						<div class="ch-info-front"></div>									
									<div class="ch-info-back">
										<h4 class="tipografia" style="text-align: center;">Arriendo</h4>
										<p class="tipografia2" style="text-align: center;"><?="Id_Propiedad: ".$propiedad->id;?><br/>				
										<?="Precio : ".$propiedad->precio;?><br/>
										<p style="text-align: center;"><a href="<?=base_url?>propiedades/detalle&id=<?=$propiedad->id?>"  title="Editar">Mas Detalles</a></p>
										
									</div>	
					</div>
			</div>
			<img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen?>"  style="width: 100%; height: 100%;">
			</div>
					
        </div>
    <?php endwhile; ?>
</div>

     

 

 
