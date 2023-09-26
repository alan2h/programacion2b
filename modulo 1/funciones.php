<?php

    function mi_function($param){
        echo "desde la funcion $param";
    }

    function con_retorno($param){
        return 'conca '.$param;
    }

    echo con_retorno('prueba')
?>    