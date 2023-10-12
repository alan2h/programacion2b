<?php

class Documento{
    private string $titulo;
    private string $texto;

    public function __construct($titulo, $texto) {
       $this->setTexto($texto);
       $this->setTitulo($titulo); 
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of texto
     */ 
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set the value of texto
     *
     * @return  self
     */ 
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }
}

class Impresora{

    private string $marca;
    private string $modelo;

    public function __construct($marca, $modelo) {
        
    }

    public function imprimir(Documento $documento){
        echo $documento->getTexto();
    }

}


?>