<?php 

class Uniforme{
    private array $colores;
    private string $lineas;
    private string $tipo_prenda;

    public function __construct($colores, $lineas, $tipo_prenda) {
        
    }
}

class Jugador{
    private string $nombre;
    private string $apellido;
    private Uniforme $uniforme;

    public function __construct(string $nombre, string $apellido, Uniforme $uniforme) {
        
    }

}
$uniforme = new Uniforme('violeta', 'rectas', 'remera');
$jugador = new Jugador('Alan', 'Beck', $uniforme);

?>