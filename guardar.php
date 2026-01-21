<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['password'];

$insertar = "INSERT INTO usuarios
(nombre, apellido, usuario, email, telefono, password)
VALUES
('$nombre', '$apellido', '$usuario', '$email', '$telefono', '$password')";

if (mysqli_query($conexion, $insertar)) {
    header("Location: hamburguesas.php");
    exit();
} else {
    echo "❌ Error al guardar datos";
}

mysqli_close($conexion);
?>
