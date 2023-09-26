<?php

    class Persona{

        public $nombre = '';
        public $apellido = '';
        public $documento = '';
        private $total = 0;

        public function formula(){
            $this->total = 12;
            return $this->total;
        }

        function show_lastname(){
            echo $this->nombre;
        }

    }

    class Empleado extends Persona{
        private $legajo = '';
        private $cargo = '';

        function __construct($legajo, $cargo){
            $this->legajo = $legajo;
            $this->cargo = $cargo;
        }

        function set_legajo($legajo){
            $this->legajo = $legajo;
        }

        function show_lastname(){
            echo 'modificado';
        }

        function get_legajo(){
            return $this->legajo;
        }

    }

    $empleado = new Empleado('le23123', 'Profesor');
    $empleado2 = new Empleado('le32434', 'Rector');
    $empleado3 = new Empleado('le55555', 'Preceptor');
    
    
?>