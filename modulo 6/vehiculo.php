<?php

    class Vehiculo{
        private $color = '';
        private $patente = '';
        private $modelo = '';
        private $marca = '';

        public function setColor($color){
            $this->color = $color;
        }

        public function getColor(){
            return $this->color;
        }

        public function setPatente($patente){
            $this->patente = $patente;
        }

        public function getPatente(){
            return $this->patente;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getModelo(){
            return $this->modelo;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function getAllData(){
            return $this->color.' '.$this->marca.' '.$this->modelo.' '.$this->patente;
        }

    }

    $auto = new Vehiculo();
    $auto->setColor('Rojo');
    $auto->setMarca('Volkswagen');
    $auto->setModelo('UP');
    $auto->setPatente('LNI435');

    $moto = new Vehiculo();
    $moto->setColor('Azul');
    $moto->setMarca('Yamaha');
    $moto->setModelo('FZ');
    $moto->setPatente('LJ67');

    echo $auto->getAllData().'<br>'.$moto->getAllData();

?>