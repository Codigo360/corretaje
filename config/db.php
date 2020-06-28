<?php 
class DataBase
{
	public static function connect()
	{
		$db = new mysqli("localhost","administrador","administrador","pruebas");
		$db->query("SET NAME 'utf8'");

		return $db;
	}

}
?>