<?php
class Tipo_usuario
{
    private $id;
    private $tipo;
    private $db;

 public function __construct() 
 	{
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }
    function setId($id) {
        $this->id = $id;
    }
    function getTipo() {
        return $this->tipo;
    }
    function setTipo($tipo) {
        $this->tipo = $this->db->real_escape_string($tipo);
    }
	
	 public function getAll()
    {
        $tipo = $this->db->query("SELECT * FROM tipo_usuario WHERE tipo <> 'admin' ORDER BY id ASC;");        
        return $tipo;
    }
}

?>    
