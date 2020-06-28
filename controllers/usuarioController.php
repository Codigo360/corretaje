<?php 
require_once 'models/usuario.php';
require_once 'models/tipo_usuario.php';

class usuarioController
{
	public function index()
	{
		$usuario = new Usuario();
		$usuario = $usuario->getAll();
		require_once 'views/usuario/gestion.php'; 
		
	}	
	public function registro()
	{
		$tipo = new Tipo_usuario();
		$tipo = $tipo->getAll();
		require_once 'views/usuario/registro.php';
	} 
	public function save(){
		if(isset($_POST)){
			
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
			$id_tipo_usuario = isset($_POST['tipo']) ? $_POST['tipo'] : false;
			
			if($nombre && $apellidos && $email && $password){
				$usuario = new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setEmail($email);
				$usuario->setPassword($password);
				$usuario->setId_tipo_usuario($id_tipo_usuario);

				$save = $usuario->save();
				if($save){
					$_SESSION['register'] = "complete";
				}else{
					$_SESSION['register'] = "failed";
				}
			}else{
				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}
		//header("Location:".base_url.'usuario/registro');
		echo("<script>location.href ='".base_url."usuario/registro';</script>");
	}

	public function login()
	{
		if(isset($_POST)){
			// Identificar al usuario
			// Consulta a la base de datos
			$usuario = new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setPassword($_POST['password']);		
			$identity = $usuario->login();
			if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				if($identity->rol == 1){					
					$_SESSION['admin'] = true;
				}	

			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
			}
			

		}
		//header("Location:".base_url);
		echo("<script>location.href ='".base_url."';</script>");
	} 
	public function logout()
	{
		if(isset($_SESSION['identity'])){
			unset($_SESSION['identity']);
		}
		
		if(isset($_SESSION['admin'])){
			unset($_SESSION['admin']);
		}
		//header("Location:".base_url);
		echo("<script>location.href ='".base_url."';</script>");
	} 


}
?>

