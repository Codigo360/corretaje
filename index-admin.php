<?php 
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'config/parametersAdmin.php';
require_once 'helpers/utils.php';
require_once 'views/layout/headerAdmin.php';
require_once 'views/layout/sidebarAdmin.php';


function show_error()
{
  $error= new errorController();
  $error->index();
}

$db = DataBase::connect();
if(isset($_GET['controller'])){
  $nombre_controlador = $_GET['controller'].'Controller';
}
elseif(!isset($_GET['controller']) && !isset($_GET['action']))
{
  $nombre_controlador = controller_defaultAdmin;
}
else
{
  show_error();
  exit();
}

if (class_exists($nombre_controlador)){
  $controlador = new $nombre_controlador(); 
  
  if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
  {
    $action = $_GET['action'];
    $controlador->$action();
  }
  elseif(!isset($_GET['controller']) && !isset($_GET['action']))
  {
    $action_default = action_defaultAdmin;
    $controlador->$action_default();
  }
  else
  {
    show_error();
  }
}
else
{
  show_error();
}
require_once 'views/layout/footerAdmin.php';
?>

  