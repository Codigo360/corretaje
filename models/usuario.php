<?php

class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $id_tipo_usuario;
    private $imagen;
    private $db;
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    function getId_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    function getImagen() {
        return $this->imagen;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setId_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}',{$this->getId_tipo_usuario()}, null);";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    
    public function login(){
        $result = false;
        $email = $this->email;
        $password = $this->password;
        
        // Comprobar si existe el usuario
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $login = $this->db->query($sql);
     
        
        if($login && $login->num_rows == 1){
            $usuario = $login->fetch_object();
            
            // Verificar la contraseña
            $verify = password_verify($password, $usuario->password);
            if($verify){
               $result = $usuario;
            }
        }    
        return $result;
    }
    /************************************/
     public function getOne()
    {
      $usuario = $this->db->query("SELECT * FROM usuarios  WHERE email= '{$this->getEmail()}'");
      return $usuario->fetch_object();
     }
    /****************************************/
    public function getAll()
    {
        $usuarios = $this->db->query("SELECT * FROM usuarios ORDER BY id ASC;");        
        return $usuarios;
    }
    
    
    
}