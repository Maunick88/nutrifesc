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

// Recibir datos del formulario
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$detalles = $_POST['detalles'];
$usuario_id = $_POST['usuario_id'];  // Obtener el ID del usuario desde el formulario

// Verificar las restricciones de horario
$dia_semana = date('N', strtotime($fecha)); // Obtener el día de la semana (1 = lunes, 2 = martes, ..., 7 = domingo)

if (($dia_semana == 1 || $dia_semana == 3 || $dia_semana == 5) && ($hora < '10:00' || $hora > '14:00')) {
    echo "Error: Los horarios de fisioterapia son lunes, miércoles y viernes de 10 a 14 horas.";
} elseif (($dia_semana == 2 || $dia_semana == 4) && ($hora < '14:00' || $hora > '20:00')) {
    echo "Error: Los horarios de fisioterapia son martes y jueves de 14 a 20 horas.";
} elseif ($hora < '10:00' || $hora > '20:00') {
    echo "Error: Los horarios de nutrición son toda la semana de 10 a 20 horas.";
} else {
    // Insertar datos en la base de datos
    $sql_insertar = "INSERT INTO citas (fecha, hora, detalles, usuario_id) VALUES ('$fecha', '$hora', '$detalles', '$usuario_id')";

    if ($conn->query($sql_insertar) === TRUE) {
        echo "Cita generada con éxito";
    } else {
        echo "Error al generar cita: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
