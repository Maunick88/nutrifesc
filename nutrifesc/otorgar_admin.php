<?php
// Conexión a la base de datos (ajusta las credenciales según tu configuración)
$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "bdcolegio";

$conn = new mysqli($host, $usuario, $password, $basededatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir el ID del usuario al que se le otorgarán permisos de administrador
$usuario_id = $_POST['usuario_id'];

// Actualizar el rol del usuario a 'administrador'
$sql = "UPDATE usuarios SET rol='administrador' WHERE id=$usuario_id";

if ($conn->query($sql) === TRUE) {
    echo "Permisos de administrador otorgados con éxito.";
} else {
    echo "Error al otorgar permisos de administrador: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
