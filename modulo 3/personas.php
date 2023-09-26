<?php
class Persona {
    public $nombre = 'ALan';
    public $apellido = 'Beck';

    public function shows(){
        echo $this->nombre;
    }
}

$alan = new Persona();
$alan->shows();


class Empleado extends Persona {

}

$empleado = new Empleado();

$empleado->shows();

?>