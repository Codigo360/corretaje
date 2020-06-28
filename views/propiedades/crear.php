<?php if(isset($editar) && isset($pro) && is_object($pro)):?>
	<h1 class="display-4">Editar Propiedad <?=$pro->id?></h1>
	<?php $url_action = base_url."propiedades/save&id=".$pro->id;?>
<?php else:?>
	<h1 class="tipografia mb-md-5" style="text-align: center;">Crear Propiedad</h1>
	<?php $url_action = base_url."propiedades/save";?>
<?php endif;?>	
					
<form action="<?=$url_action?>" class="w-50 mx-auto cuadroForm pt-md-5" method="post" enctype="multipart/form-data">
		<div class="row w-100 ml-auto mr-auto">	
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<select name="id_categoria" class="form-control" placeholder="Tipo">
				<?php while ($cate = $categoria->fetch_object()):?>
					<option value="<?= $cate->id?>" <?php isset($pro) && is_object($pro) && $cate->id == $pro->id_categoria ? 'selected':'';?>>	
						<?php echo $cate->nombre ?>
					</option>
				<?php endwhile;?>		
				</select>
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="number" class="form-control" name="precio" placeholder="Precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio:' '; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="number" class="form-control" name="metros" placeholder="Metros" value="<?=isset($pro) && is_object($pro) ? $pro->metros:' '; ?>">
			</div>
		</div>
		<hr>	
		<div class="row ml-auto mr-auto">						
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">			
				<input type="number" class="form-control" name="dormitorio" placeholder="Dormitorios" value="<?=isset($pro) && is_object($pro) ? $pro->dormitorio:' '; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="number" class="form-control" name="bano" placeholder="Baños" value="<?=isset($pro) && is_object($pro) ? $pro->bano:' '; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
			<input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?=isset($pro) && is_object($pro) ? $pro->direccion:''; ?>">
			</div>
		</div>
		<hr>	
		<div class="row ml-auto mr-auto mb-5">				
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="<?=isset($pro) && is_object($pro) ? $pro->ciudad:''; ?>">
			</div>	
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="text" class="form-control" name="xxx" placeholder="Xxxx"></input>

			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mr-auto">
				<input type="text" class="form-control" name="xxx" placeholder="Xxxx"></input>
			</div>
		</div>
		<hr>
	<p class="tipografia">Subir Imagenes</p>
	<div class="row ml-auto mr-auto mb-5">				
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mr-auto">	
			<label for="imagen" class="tipografia2">Portada</label>	
			<?php if(isset($pro) && is_object($pro)&& !empty($pro->imagen)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen?>" style="width: 80%; min-height: 200px;max-height: 200px;" />	
				</div>
			<?php endif?>		
			<input type="file" class="form-control-file" name="imagen" style="width: 80%">
		</div>		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mr-auto">
			<label form="imagen1" class="tipografia2">Detalle</label>
			<?php if(isset($pro) && is_object($pro)&& !empty($pro->imagen1)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen1?>" style="width: 80%; min-height: 200px;max-height: 200px;"/>
				</div>
			<?php endif?>
				
			<input type="file" class="form-control-file"  name="imagen1" style="width: 80%">			
			
		</div>
	</div>

	<div class="row ml-auto mr-auto mb-5">		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mr-auto">
			<label form="imagen2" class="tipografia2">Detalle</label>
			<?php if(isset($pro) && is_object($pro)&& !empty($pro->imagen2)):?>								
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen2?>" style="width: 80%;min-height: 200px; max-height: 200px;" />				
				</div>
			<?php endif?>		
			<input type="file" class="form-control-file"  name="imagen2" style="width: 80%">
		</div>	
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mr-auto">
			<label form="imagen3" class="tipografia2">Detalle</label>
			<?php if(isset($pro) && is_object($pro)&& !empty($pro->imagen3)):?>
				<div>
					<img src="http://localhost/mitchell/uploads/images/<?=$pro->imagen3?>" style="width: 80%;min-height: 200px; max-height: 200px;"/>
				</div>
			<?php endif?>		
			<input type="file" class="form-control-file" name="imagen3" style="width: 80%"> 
		</div>
	</div>
	<div class="row ml-auto mr-auto mt-5 mb-5">	
		<div class="col">
			<button type="submit" id="crearPropiedad" class="btn btn-primary pointer" value="Guardar" title="Guardar">Guardar</button>
		</div>
	</div>
	</div>
</form>
</div>
