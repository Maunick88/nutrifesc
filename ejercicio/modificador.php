<?php
if (isset($_POST['expediente']) && isset($_POST['nombre'])) {
    $expediente = $_POST['expediente'];
    $nuevoNombre = $_POST['nombre'];

    // Realiza la conexión a la base de datos aquí
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $basededatos = "bdcolegio";

    $conectar = new mysqli($host, $usuario, $password, $basededatos);

    if($conectar->connect_error){
        die('Error en la conexión: ' . $conectar->connect_error);
    }

    // Consulta SQL para actualizar el registro
    $sql = "UPDATE alumnos SET nombre = '$nuevoNombre' WHERE expediente = '$expediente'";
    
    if ($conectar->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conectar->error;
    }

    // Cierra la conexión
    $conectar->close();
}
?>
