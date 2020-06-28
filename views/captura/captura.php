<div class="align-items-center ml-auto mr-auto w-75" >
<?php

if ($_POST)
{
	?>
	<h4 class="text-info ml-1" >Datos Deptos/Casas</h4>
	<hr>
	<div class="row">
		<div class="col-md-3">
			<?php
				echo "ID_Categoria = ".$categoria = $_POST['id_categoria'];
			?>
		</div>
		<div class="col-md-3">
			<?php
				echo "Precio = ".$precio = $_POST['precio'];
			?>
		</div>
		<div class="col-md-3">	
			<?php		
			echo "Metros = ".$metros = $_POST['metros'];
			?>
		</div>		
		<div class="col-md-3">
			<?php
			echo "Dormitorios = ".$dormitorios=$_POST['dormitorio'];
			?>
		</div>
	</div>	
	<div class="row">	
		<div class="col-md-4">
			<?php
			echo "Baños = ".$banos=$_POST['bano'];
			?>
		</div>
		<div class="col-md-4">
			<?php
			echo "Direccion = ".$direccion=$_POST['direccion'];
			?>
		</div>
		<div class="col-md-4">
			<?php
			echo "Ciudad = ".$ciudad=$_POST['ciudad'];
			?>
		</div>
	</div>
	<?php
}
else
{
	$categoria=null;
	$precio=null;
	$metros=null;
	$dormitorios=null;
	$banos=null;
	$direccion=null;
	$ciudad=null;	
}
?>
	<hr>
	
<div class="align-items-center ml-auto mr-auto w-75" >
	<h4 class="text-center mt-4">Registro de Depto/Casa</h4>
	<hr>
	<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'Complete'): ?>
	<strong class="alert-info">Registro completado correctamente.</strong>		
	<script type="text/javascript">
		$(document).ready(function() {
   		alert("jQuery esta funcionando !!");
 		});
	</script>

	<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<strong class="alert-danger">Registro fallido, introduce bien los datos</strong>
	<?php endif; ?>
	<?php Utils::deleteSession('register');?>
	<form action="index.php?controller=captura&action=save" method="post" class="mt-3">

						<div class="form-group">
							<label for="id_categoria" class="form-control-label">ID_C</label>
							<input type="text" name="id_categoria" class="form-control" readonly="readonly" value="<?=$categoria?>" required/>
						</div>

										
						<div class="form-group">
							<label for="precio" class="form-control-label">Precio</label>
							<input type="text" name="precio" class="form-control" readonly="readonly" value="<?=$precio?>" required/>
						</div>

      					<div class="form-group">
							<label for="metros" class="form-control-label">Metros</label>
							<input type="text" name="metros" class="form-control" readonly="readonly" value="<?=$metros?>" required/>
						</div>

						<div class="form-group">
							<label for="dormitorio" class="form-control-label">Dormitorios</label>
							<input type="text" name="dormitorio" class="form-control" readonly="readonly" value="<?=$dormitorios?>" required/>
						</div>

						<div class="form-group">
							<label for="bano" class="form-control-label">Baños</label>
							<input type="text" name="bano" class="form-control" readonly="readonly" value="<?=$banos?>" required/>
						</div>

						<div class="form-group">
							<label for="direccion" class="form-control-label">Direccion</label>
							<input type="text" name="direccion" class="form-control" readonly="readonly" value="<?=$direccion?>" required/>
						</div>

						<div class="form-group">
							<label for="ciudad" class="form-control-label">Ciudad</label>
							<input type="text" name="ciudad" class="form-control" readonly="readonly" value="<?=$ciudad?>" required/>
						</div>

						<div class="form-group">
						<button type="submit" class="btn btn-outline-primary pointer" onClick="this.disabled=true" value="enviar">Guardar</button>
						</div>

					</form>
					<div class="btn btn-info"> 
						<a href="http://localhost/mitchell/index.php?controller=captura&action=capturador">Insertar nuevo registro</a>
	</div> 
</div>
</div>
