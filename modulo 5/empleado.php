<?php

    class Persona{
        // private - public - protected
        private $nombre = '';
        private $apellido = '';
        private $documento = '';
        private $total_sueldo = '';

        function __construct($nombre, $apellido)
        {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function set_nombre($nombre){
            $this->nombre = $nombre;
        }

        public function get_nombre(){
            return $this->nombre;
        }

        public function get_total_sueldo(){
           $this->total_sueldo = 'asdasddasd';
           return $this->total_sueldo;
        }

        function show_name(){
            echo $this->nombre;
        }
    }

    class Empleado extends Persona{

        private $legajo = '';
        private $cargo = '';

        public function set_legajo($legajo){
            $this->legajo = $legajo;
        }

        function show_name(){
            echo 'otra cosa';
        }

    }

    $empledo1 = new Empleado('Alan', 'Beck');
    echo $empledo1->show_name();
?>