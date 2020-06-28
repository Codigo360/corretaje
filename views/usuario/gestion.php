<h1>Gestion Usuarios</h1>
<hr>
<div class="row">
	<div class="col-12">
		<table class="table" style="text-align: center;">
			<thead>
				<tr>
					<th style="text-align: center;">ID</th>
					<th style="text-align: center;">NOMBE</th>
					<th style="text-align: center;">APELLIDOS</th>
					<th style="text-align: center;">EMAIL</th>
					<th style="text-align: center;">ROL</th>
					<th style="text-align: center;">FOTO</th>

				</tr>	
			</thead>	
		<?php while ($user = $usuario->fetch_object()):?>
			<tbody>
				<tr>
					<td> 
						<?=$user->id?>
					</td>
					<td>
						<?=$user->nombre?>
					</td>
					<td>
						<?=$user->apellidos?>
					</td>
					<td>
						<?=$user->email?>
					</td>
					<td>
						<?php if($user->rol=='admin'):?>
							<?='Administrador'?>
						<?php else:?>
							<?=$user->rol?>	
						<?php endif;?>	
					</td>
					<td>
						<?=$user->imagen?>
					</td>
				</tr>
			</tbody>
		<?php endwhile; ?>				
		</table>	
		
	
	</div>
</div>	

