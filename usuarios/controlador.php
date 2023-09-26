<?php
require_once('modelo.php');

if (isset($_POST['nombre_usuario']) && isset($_POST['password']) && isset($_POST['email'])){
    
    $usuario = new Usuario();
    $usuario->setNombre_usuario($_POST['nombre_usuario']); 
    $usuario->setPassword($_POST['password']); 
    $usuario->setEmail($_POST['email']); 
    $usuario->guardar();
    header('Location: listado.php?mensaje=guardado');//redireccionar
    exit();
}

?>