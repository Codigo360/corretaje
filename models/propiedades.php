<?php 

class Propiedades
{
	private $id;
    private $id_categoria;
	private $precio;
	private $metros;
	private $dormitorio;
	private $bano;
	private $direccion;
    private $ciudad;
    private $imagen;
    private $imagen1;
    private $imagen2;
    private $imagen3;
    private $fecha;
	private $db;

	public function __construct()
	{
		$this->db = DataBase::connect(); 
	}

    public function getId()
    {
        return $this->id;
    } 
    public function setId($id)
    {
        $this->id = $id;
    }
    /*************************************/
    public function getId_categoria()
    {
        return $this->id_categoria;
    } 
    public function setId_categoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }
    /***********************************/
    public function getPrecio()
    {
        return $this->precio;
    }
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);
    }
    /***********************************/
    public function getMetros()
    {
        return $this->metros;
    }
    public function setMetros($metros)
    {
        $this->metros = $this->db->real_escape_string($metros);
    }
    /***********************************/
    public function getDormitorio()
    {
        return $this->dormitorio;
    }
    public function setDormitorio($dormitorio)
    {
        $this->dormitorio = $this->db->real_escape_string($dormitorio);
    }
    /***********************************/
    public function getBano()
    {
        return $this->bano;
    }
    public function setBano($bano)
    {
        $this->bano = $this->db->real_escape_string($bano);
    }
    /***********************************/
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
    }
    /***********************************/
    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setCiudad($ciudad)
    {
        $this->ciudad = $this->db->real_escape_string($ciudad);
    }
    /***********************************/  
    function getImagen() {
        return $this->imagen;
    }
    function setImagen($imagen) {
        $this->imagen = $imagen;
    }
    /*********************************/
    function getImagen1() {
        return $this->imagen1;
    }
    function setImagen1($imagen1) {
        $this->imagen1 = $imagen1;
    }
    /*********************************/
    function getImagen2() {
        return $this->imagen2;
    }
    function setImagen2($imagen2) {
        $this->imagen2 = $imagen2;
    }
    /*********************************/
    function getImagen3() {
        return $this->imagen3;
    }
    function setImagen3($imagen3) {
        $this->imagen3 = $imagen3;
    }
    /*********************************/
    function getFecha() {
        return $this->fecha;
    }
    function setFecha($fecha) {
        $this->fecha = $fecha;
    }
    /****************************/ 
    
    public function gelAll()
    {
      $propiedades = $this->db->query("SELECT id,id_categoria,precio,metros,dormitorio,bano,direccion,ciudad,imagen,imagen1,imagen2,imagen3,fecha FROM propiedades  ORDER BY id DESC");
      return $propiedades;
     }
     /**********************************/
       public function getOne()
    {
      $propiedad = $this->db->query("SELECT id,id_categoria,precio,metros,dormitorio,bano,direccion,ciudad,imagen,imagen1,imagen2,imagen3,fecha FROM propiedades  WHERE id= {$this->getId()}");
      return $propiedad->fetch_object();
     }
     /*************************************/
     public function getRandom($limit)
     {
        $propiedad = $this->db->query("SELECT * FROM propiedades ORDER BY RAND() LIMIT $limit");
        return $propiedad;
     }
     /***********************************/
    public function save()
    {
        $sql = "INSERT INTO propiedades VALUES(NULL,{$this->getId_categoria()} ,'{$this->getPrecio()}', '{$this->getMetros()}', '{$this->getDormitorio()}', '{$this->getBano()}','{$this->getDireccion()}','{$this->getCiudad()}','{$this->getImagen()}','{$this->getImagen1()}','{$this->getImagen2()}','{$this->getImagen3()}',CURDATE());";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    /***********************************/
     public function edit()
    {
        $sql = "UPDATE propiedades SET id_categoria={$this->getId_categoria()},precio='{$this->getPrecio()}',metros='{$this->getMetros()}',dormitorio='{$this->getDormitorio()}',bano='{$this->getBano()}',direccion='{$this->getDireccion()}',ciudad='{$this->getCiudad()}' ";

        if($this->getImagen() != null){
            $sql .= ", imagen='{$this->getImagen()}'";
           
        }
         if($this->getImagen1() != null){
            $sql .= ", imagen1='{$this->getImagen1()}'";
           
        }
         if($this->getImagen2() != null){
            $sql .= ", imagen2='{$this->getImagen2()}'";
           
        }
         if($this->getImagen3() != null){
            $sql .= ", imagen3='{$this->getImagen3()}'";
           
        }

        $sql .= " WHERE id={$this->getId()};";
        
       
        $save = $this->db->query($sql);
    
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
        
    }
    /***********************************/
    public function delete()
    {
        $sql = "DELETE FROM propiedades WHERE id = {$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }
    /***************************************/
    public function buscarCiudad()
    {
        $busca = $this->db->query("SELECT * from propiedades where ciudad like '%{$this->ciudad}%'");
        return $busca;
    }
}
?>