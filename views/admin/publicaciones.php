<div class="container">
<h1>Publicaciones</h1>
<hr>
<div class="row">	
		<div class="col-12">
			<table class="table table-responsive letras tabla ml-md-2">
				<thead>
					<tr>
						<th style="text-align: center;">Id</th>
						<th style="text-align: center;">Id_c</th>
						<th style="text-align: center;">Precio</th>
						<th style="text-align: center;">Mt²</th>
						<th style="text-align: center;">Dormitorios</th>
						<th style="text-align: center;">Baños</th>
						<th style="text-align: center;">Dirección</th>
						<th style="text-align: center;">Ciudad</th>
						<th style="text-align: center;">Portada</th>
						<th style="text-align: center;">Detalle1</th>
						<th style="text-align: center;">Detalle2</th>
						<th style="text-align: center;">Detalle3</th>
						<th style="text-align: center;">Publicación</th>
						<th style="text-align: center;">Detalle</th>
						<th style="text-align: center;">Eliminar</th>
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
							<td>
								<?php if(is_object($pro) && !empty($pro->imagen)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>" style="width: 50px"/> 
								</div>			
								<?php endif?>
							</td>
							<td><?php if(is_object($pro) && !empty($pro->imagen1)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>" style="width: 50px"/> 
								</div>			
								<?php endif?></td>
							<td><?php if(is_object($pro) && !empty($pro->imagen2)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>" style="width: 50px"/> 
								</div>			
								<?php endif?></td>
							<td><?php if(is_object($pro) && !empty($pro->imagen3)):?>
								<div>
									<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>" style="width: 50px"/> 
								</div>			
								<?php endif?></td>

							<td><?php 
							if ($newDate=="31/12/1969")
							{
								echo "00/00/00";
							}
							else
							{	
								echo $newDate;
							}
							?></td>
							<td>
								<a href="http://localhost/mitchell/index-admin.php?controller=publicaciones&action=detalle&id=<?=$pro->id?>"  title="Editar"><img width="30px" src="assets/img/editar.png" alt="Detalle" /></a>
							</td>
							<td>	
								<a href="http://localhost/mitchell/index-admin.php?controller=publicaciones&action=detalle&id=<?=$pro->id?>" title="Eliminar" ><img width="30px" src="assets/img/eliminar.svg" alt="Eliminar" /></a>
							</td>

						</tr>
					</tbody>
				<?php endwhile; ?>
			</table>
		</div>	
	</div>
</div>
</div>	