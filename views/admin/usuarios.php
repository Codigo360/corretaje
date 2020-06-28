<div class="container">
	<h1>Usuarios</h1>
	<hr>
	<?php if ($usuario):?>
	<table class="table letras">	
		<thead style="text-align: center;">
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellidos</th>	
				<th>Email</th>
				<th>rol</th>
				<th>Foto</th>
			</tr>	
		</thead>
		<?php while($user = $usuario->fetch_object()):?>
		<tbody style="text-align: center;">
			<tr>
				<td>	
					<?=$user->id;?>	
				</td>
				<td>	
					<?=$user->nombre;?>
				</td>
				<td>	
					<?=$user->apellidos;?>
				</td>
				<td>	
					<?=$user->email;?>
				</td>
				<td>
				<?php if($user->id_tipo_usuario==1):?>	
					<?='Administrador';?>
				<?php elseif($user->id_tipo_usuario==2):?>
					<?='Arrendatario';?>
				<?php elseif($user->id_tipo_usuario==3):?>		
					<?='Arrendador'?>
				<?php endif;?>	
				</td>
				<td>		
					<?=$user->imagen;?>
				</td>
			</tr>
		<tbody>				
		<?php endwhile;?>
	</table>
	<?php endif;?>
</div>
</div>	