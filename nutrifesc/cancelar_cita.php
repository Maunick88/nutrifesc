<?php
// Verificar si se ha proporcionado el ID de la cita a cancelar
if (isset($_GET['id'])) {
    $cita_id = $_GET['id'];

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

    // Cancelar la cita
    $sql_cancelar = "DELETE FROM citas WHERE id='$cita_id'";

    if ($conn->query($sql_cancelar) === TRUE) {
        echo "Cita cancelada con éxito";
    } else {
        echo "Error al cancelar la cita: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Error: No se proporcionó el ID de la cita.";
}
?>
