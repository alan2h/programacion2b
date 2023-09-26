<?php
require_once('conexion.php');

class Usuario{
    private $nombre_usuario='';
    private $email='';
    private $password='';
     
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

     
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

     
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

     
    public function setNombre_usuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;

        return $this;
    }

    public function guardar(){
        $mysql = new Conection();
        $query = 'INSERT INTO usuarios VALUES(null,"'.$this->nombre_usuario.'","'.$this->password.'","'.$this->email.'")';
        $resultado = $mysql->insertar($query);
        return $resultado;
    }

}

?>