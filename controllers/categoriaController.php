<?php
require_once 'models/categoria.php';
class categoriaController{
	
	public function index(){
		//Utils::isAdmin();
		$categoria = new Categoria();
		$categoria = $categoria->getAll();
		require_once 'views/categoria/index.php';
	}
	
	
}