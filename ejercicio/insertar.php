<?php
$host = "localhost";
$usuario = "root";
$password = "";
$basededatos = "bdcolegio";

// Conectar a la base de datos
$conectar = new mysqli($host, $usuario, $password, $basededatos);

if($conectar->connect_error){
    die('Error en la conexión: ' . $conectar->connect_error);
}

// Recuperar los datos del formulario
$expediente = $_POST['expediente'];
$nombre = $_POST['nombre'];
$localidad = $_POST['localidad'];
$fechanac = $_POST['fechanac'];
$direccion = $_POST['direccion'];
$curso = $_POST['curso'];
$nivel = $_POST['nivel'];
$faltas = $_POST['faltas'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO alumnos (expediente, nombre, localidad, fechanac, direccion, curso, nivel, faltas)
        VALUES ('$expediente', '$nombre', '$localidad', '$fechanac', '$direccion', '$curso', '$nivel', '$faltas')";

if ($conectar->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error al insertar el registro: " . $conectar->error;
}

// Cerrar la conexión
$conectar->close();
?>
