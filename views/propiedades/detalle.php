<div class="container w-75">
	<h1 class="display-4">Detalle de Propiedad</h1>
	<?php if(isset($prop)):?>
		<table class="table">
			<?php while($propiedad=$prop->fetch_object()):?>			
				<tbody>	
					<tr>
						<td>		
						<?="ID 			=".$propiedad->id;?>		
						</td>
						<td>
						<?="ID_C		=".$propiedad->id_categoria;?>
						</td>
					</tr>
					<tr>	
						<td>
						<?="PRECIO		=".$propiedad->precio;?>
						</td>
						<td>
						<?="MT²			=".$propiedad->metros;?>
						</td>
					</tr>
					<tr>	
						<td>
						<?="DORMITORIOS	=".$propiedad->dormitorio;?>
						</td>
						<td>
						<?="BAÑOS		=".$propiedad->bano;?>
						</td>
					</tr>
					<tr>
						<td>
						<?="DIRECCIÓN	=".$propiedad->direccion;?>
						</td>
						<td>
						<?="CIUDAD		=".$propiedad->ciudad;?>
						</td>
					</tr>
					<tr>	
						<td>
						<?="FECHA PUBLICACIÓN =".$propiedad->fecha;?>
						</td>
						<td>
						</td>	
					</tr>
					<tr>
						<td>	
						<!--Inicio de Imagen de Portada -->
						<?php if(isset($propiedad) && is_object($propiedad)&& !empty($propiedad->imagen)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen?>" style="max-width:200px;max-height:200px;" />	
								</div>
							<?php endif?>
						<!--Fin de Imagen de Portada -->
						<!--Inicio de Imagen1 de Detalle -->
						</td>
						<td>
						<?php if(isset($propiedad) && is_object($propiedad)&& !empty($propiedad->imagen1)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen1?>" style="max-width:200px;max-height:200px;" />	
								</div>
							<?php endif?>
						<!--Fin de Imagen1 de Detalle -->
						<!--Inicio de Imagen2 de Detalle -->
						</td>
					</tr>
					<tr>
						<td>			
						<?php if(isset($propiedad) && is_object($propiedad)&& !empty($propiedad->imagen2)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen2?>" style="max-width:200px;max-height:200px;" />	
								</div>
						<?php endif?>
						</td>
						<td>		
						<!--Fin de Imagen2 de Detalle -->
						<!--Inicio de Imagen3 de Detalle -->
						<?php if(isset($propiedad) && is_object($propiedad)&& !empty($propiedad->imagen3)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$propiedad->imagen?>" style="max-width:200px;max-height:200px;" />	
								</div>
							<?php endif?>
						<!--Fin de Imagen3 de Detalle -->
						</td>
					</tr>
				</tbody>
			<?php endwhile;?>
					
		</table>		
	<?php endif;?>		
</div>
</div>