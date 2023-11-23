<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "bdcolegio";

$conn = new mysqli($host, $usuario, $password, $basededatos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$numero_cuenta = $_POST['numero_cuenta'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
$rol = $_POST['rol'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, correo, numero_cuenta, contrasena, rol) VALUES ('$nombre', '$apellido', '$correo', '$numero_cuenta', '$contrasena', '$rol')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado con éxito";
} else {
    echo "Error al registrar usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
