<?php
if (isset($_POST['expediente'])) {
    $expediente = $_POST['expediente'];

    // Realiza la conexión a la base de datos aquí
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $basededatos = "bdcolegio";

    $conectar = new mysqli($host, $usuario, $password, $basededatos);

    if($conectar->connect_error){
        die('Error en la conexión: ' . $conectar->connect_error);
    }

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM alumnos WHERE expediente = '$expediente'";
    
    if ($conectar->query($sql) === TRUE) {
        echo "Registro eliminado correctamente.";
    } else {
        echo "Error al eliminar el registro: " . $conectar->error;
    }

    // Cierra la conexión
    $conectar->close();
}
?>
