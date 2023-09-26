<?php
$servername = 'localhost';
$username = 'root';
$password = '';

$conn = new mysqli(
    $servername,
    $username,
    $password);

if ($conn->connect_error){
    die('conexion fallida');
}

echo 'va bien';
# echo $_GET['busqueda'];

?>