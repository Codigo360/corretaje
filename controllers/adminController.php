<?php 
require_once 'models/usuario.php';

class adminController
{
	public function index()
	{
		require_once 'views/admin/index.php'; 
	}
	public function gestion()
	{
		$usuario = new Usuario();
		$usuario = $usuario->getAll();
		require_once 'views/admin/usuarios.php';
	}
	
	
}
?>