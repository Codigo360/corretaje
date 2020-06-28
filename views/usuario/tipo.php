<h1 class="tipografia" style="text-align: center;">Tipo Usuario</h1>
<div class="dropdown-divider" id="divimagen"></div>

<?php if ($tipo):?>
	<?php while($tip = $tipo->fetch_object()):?>
		<?=$tip->id;?>
		<?=$tip->tipo;?>
	<?php endwhile; ?>
<?php endif;?>	