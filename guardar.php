<?php
include("conexion.php");

$nombre     = $_POST['nombre'];
$email      = $_POST['email'];    
$genero     = $_POST['genero'];
$carrera    = $_POST['carrera'];  
$comentario = $_POST['comentario'];



$sql = "INSERT INTO usuarios (nombre, email, genero, carrera, comentario) 
        VALUES ('$nombre', '$email', '$genero', '$carrera', '$comentario')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro guardado";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>