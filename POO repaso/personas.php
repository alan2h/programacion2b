<?php 

class Persona{
    private string $nombre;
    private string $apellido;

    public function __construct($nombre, $apellido) {
        $this->setNombre($nombre);
        $this->setApellido($apellido);
    }     

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }
}

class Empleado extends Persona{
    private string $legajo;
    private string $documento;
    
    public function __construct($nombre, $apellido, $legajo, $documento) {
        parent::__construct($nombre, $apellido);
        echo $legajo;
        
    }
}

$empleado = new Empleado();

?>