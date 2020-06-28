<div class="align-items-center ml-auto mr-auto w-50" >
	<h4 class="text-center mt-4">Registro</h4>
	<hr>
<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">								
					<div class="modal-body">
						<img class="img-fluid" src="assets/img/casa.png" width="40" height="40">Usuarios
						<div class="modal-dialog">
							<p class="text-info alert-info" style="font-size: 25px">Registro completado correctamente..</p>
						</div>	
						<div class="modal-footer">
							<a href="<?=base_url?>usuario/registro" class="btn btn-info">
								Cerrar
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>			
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
	<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">								
					<div class="modal-body">
						<img class="img-fluid" src="assets/img/casa.png" width="40" height="40">Usuarios
						<div class="modal-dialog">
							<p class="text-danger alert-danger" style="font-size: 25px">Registro fallido, introduce bien los datos</p>
						</div>	
						<div class="modal-footer">
							<a href="<?=base_url?>usuario/registro" class="btn btn-info">
								Cerrar
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>		
<?php endif; ?>
<?php Utils::deleteSession('register');?>
	<form action="<?=base_url?>usuario/save" method="post" class="mt-3">
 						

						<div class="form-group">
							<label for="nombre" class="form-control-label">Nombre</label>
							<input type="text" name="nombre" class="form-control" required />
						</div>

      					<div class="form-group">
							<label for="apellidos" class="form-control-label">Apellidos</label>
							<input type="text" name="apellidos" class="form-control" required />
						</div>

						<div class="form-group">
							<label for="email" class="form-control-label">Email</label>
							<input type="email" name="email" class="form-control" required/>
						</div>

						<div class="form-group">
							<label for="password" class="form-control-label">Contraseña</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<div>
						
							<select name="tipo" class="form-control" placeholder="Tipo">	
								<?php while ($tip = $tipo->fetch_object()):?>
									<option type="number" value="<?=$tip->id ?>">	
										<?=$tip->tipo ?>
									</option>
								<?php endwhile;?>		
							</select>
					
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-outline-primary pointer">Registrar</button>
						</div>	
					</form>
</div>
		