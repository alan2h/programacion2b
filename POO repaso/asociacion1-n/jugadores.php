<?php

class Jugador{

    private string $nombre;
    private string $apellido;
    private int $numero;

    public function __construct($nombre, $apellido, $numero) {
        echo $nombre.$apellido;
    }

}
?>