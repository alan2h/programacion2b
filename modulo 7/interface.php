<?php

    interface Modelo{

        public function guardar();
        public function eliminar($id);
        public function actualizar($id);
        public function mostrar();

    }

?>