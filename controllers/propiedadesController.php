<?php
require_once 'models/propiedades.php';
require_once 'models/categoria.php';
require_once 'models/usuario.php'; 
class propiedadesController
{
	
	public function index()
	{
		$propiedad = new Propiedades();
		$propiedades=$propiedad->getRandom(9);

		require_once 'views/propiedades/destacado.php';
	} 	
	public function gestion()
	{	
		if (isset($_SESSION['identity']))
		{
		$usuario = $_SESSION['identity'];
		$rol = $usuario->rol;
			if ($rol=='arrendador')
			{	
				$propiedades = new Propiedades();
				$propiedades = $propiedades->gelAll();
				require_once 'views/propiedades/gestion.php';
			}
			else
			{
				echo("<script>location.href ='".base_url."';</script>");
			}
		}
		else
		{
			echo("<script>location.href ='".base_url."';</script>");
		}			
	}
	public function crear()
	{
		if (isset($_SESSION['identity']))
		{
		$usuario = $_SESSION['identity'];
		$rol = $usuario->rol;
			if ($rol=='arrendador')
			{					
			$categoria = new Categoria();
			$categoria = $categoria->getAll();
			require_once 'views/propiedades/crear.php';
			}
			else
			{
				echo("<script>location.href ='http://localhost/mitchell';</script>");
			}
		}
		else
		{
			echo("<script>location.href ='".base_url."';</script>");			
		}			
	}
	public function save()
	{
		if (isset($_POST))
		{
			$id_categoria = isset($_POST['id_categoria']) ? $_POST['id_categoria'] : false;
			$precio = isset($_POST['precio']) ? $_POST['precio'] : false;
			$metros = isset($_POST['metros']) ? $_POST['metros'] : false;
			$dormitorio = isset($_POST['dormitorio']) ? $_POST['dormitorio'] : false;
			$bano = isset($_POST['bano']) ? $_POST['bano'] : false;
			$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
			$ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : false;
			//$imagen = isset($_POST['imagen']) ? $_POST['imagen'] : false;
			
			if($id_categoria && $precio && $metros && $dormitorio && $bano && $direccion && $ciudad)
			{
				$propiedad = new Propiedades();
				$propiedad->setId_categoria($id_categoria);
				$propiedad->setPrecio($precio);
				$propiedad->setMetros($metros);
				$propiedad->setDormitorio($dormitorio);
				$propiedad->setBano($bano);
				$propiedad->setDireccion($direccion);
				$propiedad->setCiudad($ciudad);

				//Guardar Imagen
				if((isset($_FILES['imagen']))||(isset($_FILES['imagen1']))||(isset($_FILES['imagen2']))||(isset($_FILES['imagen3'])))
				{
					$file = $_FILES['imagen'];
					$filename = $file['name'];
					$mimetype = $file['type'];
					/***************************/
					$file1 = $_FILES['imagen1'];
					$filename1 = $file1['name'];
					$mimetype1 = $file1['type'];
					/***************************/
					$file2 = $_FILES['imagen2'];
					$filename2 = $file2['name'];
					$mimetype2 = $file2['type'];
					/***************************/
					$file3 = $_FILES['imagen3'];
					$filename3 = $file3['name'];
					$mimetype3 = $file3['type']; 

					if(($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') /**/||/**/ ($mimetype1 == "image/jpg" || $mimetype1 == 'image/jpeg' || $mimetype1 == 'image/png' || $mimetype1 == 'image/gif')/**/||/**/ ($mimetype2 == "image/jpg" || $mimetype2 == 'image/jpeg' || $mimetype2 == 'image/png' || $mimetype2 == 'image/gif')/**/||/**/ ($mimetype3 == "image/jpg" || $mimetype3 == 'image/jpeg' || $mimetype3 == 'image/png' || $mimetype3 == 'image/gif'))
					{

						if(!is_dir('uploads/images'))
						{
							mkdir('uploads/images', 0777, true);
						}

							$propiedad->setImagen($filename);
							$propiedad->setImagen1($filename1);
							$propiedad->setImagen2($filename2);
							$propiedad->setImagen3($filename3);
							move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
							move_uploaded_file($file1['tmp_name'], 'uploads/images/'.$filename1);
							move_uploaded_file($file2['tmp_name'], 'uploads/images/'.$filename2);
							move_uploaded_file($file3['tmp_name'], 'uploads/images/'.$filename3);
					}
				}
				
				if (isset($_GET['id']))
				{
					$id=$_GET['id'];

					$propiedad->setId($id);
          
					$save = $propiedad->edit();
					
				}
				else
				{	
					$save = $propiedad->save();
				}
				if ($save)
				{
					$_SESSION['propiedad'] = "complete";
				}
				else
				{
					$_SESSION['propiedad'] = "failed";
				}
			}
			else
			{
				$_SESSION['propiedad'] = "failed";
			}
		}
		else
		{
			$_SESSION['propiedad'] = "failed";
		}
		//header("Location:".base_url."propiedades/gestion");	
		echo("<script>location.href ='".base_url."propiedades/gestion';</script>");	
	}
	public function editar()
	{
		if (isset($_SESSION['identity']))
		{
			$usuario = $_SESSION['identity'];
			$rol = $usuario->rol;
				if ($rol=='arrendador')
				{
					$editar = true;
					$categoria = new Categoria();
					$categoria = $categoria->getAll();
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						$edit = true;

						$propiedad = new Propiedades();
						$propiedad->setId($id);

						$pro = $propiedad->getOne();

						require_once 'views/propiedades/crear.php';	
					}
					else
					{
						//header("Location:".base_url."propiedades/gestion");	
					echo("<script>location.href ='".base_url."'propiedades/gestion';</script>"); 
					}
				}
				else
				{
					echo("<script>location.href ='".base_url."';</script>");
				}
		}
		else
		{
			echo("<script>location.href ='".base_url."';</script>");			
		}	
		
	}
	//*************************************
	public function eliminar()
	{
		if (isset($_SESSION['identity']))
		{
			$usuario = $_SESSION['identity'];
			$rol = $usuario->rol;
				if ($rol=='arrendador')
				{
					if(isset($_GET['id']))
					{
						$id = $_GET['id'];
						$propiedad = new Propiedades();
						$propiedad->setId($id);
						$delete = $propiedad->delete();
						if($delete)
						{
							$_SESSION['delete'] = 'complete';
						}
						else
						{
							$_SESSION['delete'] = 'failed';
						}
					}
					else
					{
						$_SESSION['delete'] = 'failed';
					}
					//header("Location:".base_url."propiedades/gestion");	
					echo("<script>location.href ='".base_url."'propiedades/gestion';</script>"); 
				}
				else
				{
					echo("<script>location.href ='".base_url."';</script>");
				}
		}
		else
		{
			echo("<script>location.href ='".base_url."';</script>");			
		}	

	}
	//*************************************
	public function buscaCiudad()
	{
		 
		if (!empty($_POST['busca'] ))
		{

			$propiedad = new Propiedades();
			$propiedad->setCiudad($_POST['busca']);
			$prop = $propiedad->buscarCiudad();
			require_once 'views/propiedades/detalle.php';
		}
		
	}
	//*************************************
	public function detalle()
	{
		$editar = true;
		$categoria = new Categoria();
		$categoria = $categoria->getAll();
		if(isset($_GET['id']))			
		{
			
			$id = $_GET['id'];
			$edit = true;

			$propiedad = new Propiedades();
			$propiedad->setId($id);

			$pro = $propiedad->getOne();

			require_once 'views/propiedades/detallePropiedad.php';	
		}
		else
		{
			//header("Location:".base_url."propiedades/gestion");	
		echo("<script>location.href ='".base_url."'propiedades/index';</script>"); 
		}
		
	}	
}	

