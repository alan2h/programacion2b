<?php

require_once('jugadores.php');

class Equipo{
    private string $nombre;
    private array $jugadores;

    public function __construct($nombre, $jugadores) {
        
    }
}

$jugador1 = new Jugador('rodrigo', 'palacios', 14);
$jugador2 = new Jugador('juan roman', 'riquelme', 10);
$jugador3 = new Jugador('Martin', 'Palermo', 9);

$jugadores = array($jugador1, $jugador2, $jugador3);

$equipo = new Equipo('Boca', $jugadores);

?>