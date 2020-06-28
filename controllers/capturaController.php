
<?php 
require_once 'index.php';
require_once 'libreria/Dom/simple_html_dom.php';
require_once 'config/scraper.php';
require_once 'models/propiedades.php';
require_once 'config/parameters.php';
require_once 'models/captura.php';

class capturaController
{	
	public function captura()
	{
		require_once 'views/captura/captura.php';
	} 
	
	public function capturador()
	{
		$categoria = new Categoria();
		$categoria = $categoria->getAll();

		$context = stream_context_create();
		$proxyurl = '45.236.91.20';
		$context = stream_context_create();

		stream_context_set_params($context, array(
				'proxy' => $proxyurl,
				'ignore_errors' => true, 
				'max_redirects' => 3)
				);
		$html = file_get_html('https://www.portalinmobiliario.com/arriendo/departamento/metropolitana', 0, $context);
		$precios = array();		
		$detalles = array();
		$direcciones = array();
		$span= array();
		$div=$html->find('div[class="item__info-container]');
		$precios = $html->find('.item__price');
		$detalles  = $html->find('.item__attrs');
		$link = $html->find('a[class=item__info-title-link]');
		$datos=['precios'=>$precios,
				'detalles'=>$detalles,
				'link'=>$link];		
		?>
		<div class="container-fluid w-75" style="border: 1px solid black">
			<div class="row">
				<div class="col-md-12">
					<?php if ($div==$html->find('div[class="item__info-container]')):?>
					<?php foreach ($datos['precios'] as $key1=>$valor1):?>
					<?php foreach ($datos['detalles'] as $key2=>$valor2):?>
						<?php foreach ($datos['link'] as $key3=>$valor3):?>
							<?php if (is_array($datos['precios']) && (is_array($datos['detalles'])) && (is_array($datos['link']))):?>
							<?php if(($key1==$key2)&&($key1==$key3)&&($key2==$key3)):?>
				   					<?php
	
				   						$precio = $valor1->plaintext;
				   						$detalle = explode("|", $valor2->plaintext);
				   						$direccion = explode(",",$valor3->plaintext);
 
				   						$direcciones = str_replace("arriendo ","",(str_replace("en ","",(str_replace("Departamento","",$direccion[0])))))."<br/>";
				   						$ciudad = $direccion[1];
					       				$key1."<br/>".$precio."<br/>"; 
					       				$detalle1 = str_replace('m² útiles ','',$detalle[0]);
					       				$detalle2 = str_replace('dormitorio','',$detalle[1]);
					       				$detalle2s= str_replace('s','',$detalle2);
					       				$detalle3 = str_replace('baño','',$detalle[2]);
					       				$detalle3s = str_replace('s','',$detalle3);
					       				$key1."<br/>";	
					       				$key2."<br/>";
			       						$key3."<br/>";
										?>
									
			       			<form action="<?=base_url?>/captura/captura" method="POST">
				       			<div class="form-group">
									<label form="id_categoria" class="form-control-label">ID_C</label>
									<select name="id_categoria" class="form-control">									
									<?php while ($cate = $categoria->fetch_object()):?>											
												<option value="<?= $cate->id?>">	
													<?php echo $cate->nombre ?>
												</option>										
										<?php endwhile;?>		
									</select>
								</div>
				       			<div class="form-group">
				       				<label for="precio">Precio</label>
				       				<input type="text" class ="form-control" name="precio" value='<?php echo ltrim($precio)?>'> </input>
								</div>
								<div class="form-group">
									<label for="metros">Metros</label>
	               					<input type="text" class ="form-control" name="metros" value='<?php echo ltrim($detalle1) ?>'></input>
								</div>
										
				       			<div class="form-group">
				       				<label for="dormitorio">Dormitorios</label>
				       				<input type="text" class ="form-control" name="dormitorio" 
				       				value='<?php echo ltrim(str_replace('&nbp;','',$detalle2s)) ?>'></input>
				       			</div>
				       			<div class="form-group">
				       				<label for="bano">Baños</label>
				       			<input type="text" class ="form-control" name="bano" value='<?php echo str_replace('&nbp;','',$detalle3s)?>'></input>
				       			</div>
								<div class="form-group">
				       			<label for="direccion">Direccion</label>
								<input type="text" class ="form-control" name="direccion" value='<?php echo substr(str_replace('<br/>','',$direcciones), 11) ?>'></input>
								</div>	
								<div class="form-group">
				       			<label for="ciudad">Ciudad</label>
								<input type="text" class ="form-control" name="ciudad" value='<?php echo ltrim($ciudad) ?>'></input>
								</div>
								<input type="submit" class="btn btn-info" value="Pasar">
							</form>
							<hr>														
						
						<?php endif;?>
						<?php endif;?>
						<?php endforeach;?>
						<?php endforeach;?>	
						<?php endforeach;?>
				
					<?php endif;?>				
				</div>
			</div>
		</div>		
		<?php
		$html->clear();
		unset($html);
	}
	
	public function save()
	{
		if(isset($_POST))
		{
			$captura = new Propiedades();
			$captura->setId_categoria($_POST['id_categoria']);
			$captura->setPrecio($_POST['precio']);
			$captura->setMetros($_POST['metros']);
			$captura->setDormitorio($_POST['dormitorio']);
			$captura->setBano($_POST['bano']);
			$captura->setDireccion($_POST['direccion']);
			$captura->setCiudad($_POST['ciudad']);			
			$save = $captura->save();
			if($save)
			{
				$_SESSION['register'] = "Complete";
			}
			else
			{
				$_SESSION['register'] = "failed";
				
			}
		}
		else
		{	
			$_SESSION['register'] = "failed";	
		echo("<script>location.href ='http://localhost/mitchell/index.php?controller=captura&action=captura';</script>"); 	
		}
		//header("Location:".base_url."captura/captura");	
		echo("<script>location.href ='http://localhost/mitchell/index.php?controller=captura&action=captura';</script>"); 	
	}
	
	public function ver()
	{
		if (isset($_POST['buscador']))
		{
			$id = $_POST['busca'];

			// Conseguir departamento
			$captura = new Propiedades();
			$captura->setId($id);
			$captura = $captura->getOne();
			
			// Conseguir departamentos;
			$captura2 = new Propiedades();
			$captura2->setId($id);
			$captura2 = $captura2->getAll();
			
		}
		require_once 'views/propiedades/muestra.php';
	}
}	
?>
