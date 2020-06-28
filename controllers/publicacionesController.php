<?php 
require_once 'models/propiedades.php';
require_once 'models/categoria.php';
class publicacionesController
{
	public function index()
	{
		$propiedades = new Propiedades();
		$propiedades = $propiedades->gelAll();
		require_once 'views/admin/publicaciones.php';
	}
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

			require_once 'views/admin/DetallePublicacion.php';	
		}
		else
		{
			//header("Location:".base_url."propiedades/gestion");	
		echo("<script>location.href ='http://localhost/mitchell/index.php?controller=publicaciones&action=publicaciones';</script>"); 
		}
		
	}

}

?>