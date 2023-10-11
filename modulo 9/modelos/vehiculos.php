<?php

require_once('motores.php');

class Vehiculo {
    private string $modelo;
    private string $marca;
    private Motor $motor;

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of motor
     */ 
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function guardar(){
        $query = 'insert into vehiculos';
        echo 'vehiculo guardado';
    }
}

$motor = new Motor();
$motor->setCilindrada(14);
$motor->setPeso(14);
$motor->setSerie('asdasd12313');
$motor->guardar();

$vehiculo = new Vehiculo();
$vehiculo->setModelo('UP');
$vehiculo->setMarca('VolksWagen');
$vehiculo->setMotor($motor);
$vehiculo->guardar();
?>