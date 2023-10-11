<?php

include_once('marcas.php');

class Producto{

    private string $nombre;
    private Marca $marca;
    private float $precio;
    private int $stock;


    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
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
        // lo seguimos en el taller
        $id_marca = $this->getMarca()->getID();
        $query = 'insert into ';
        //$this->setID(lastid);
    }

}

$marca = new Marca();
$marca->setNombre('Coca-Cola');
$marca->guardar(); // y nos va a devolver un id

$producto = new Producto();
$producto->setNombre('gaseosa 3 litros');
$producto->setPrecio(1300);
$producto->setMarca($marca);
$producto->setStock(40);
$producto->guardar();
?>