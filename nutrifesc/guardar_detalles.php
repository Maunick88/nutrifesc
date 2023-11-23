<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta a la base de datos
    $host = "localhost";
    $usuario = "root";
    $password = "";
    $basededatos = "bdcolegio";

    $conn = new mysqli($host, $usuario, $password, $basededatos);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtiene los datos del formulario
    $idCita = $_POST['id_cita'];
    $detalles = $_POST['detalles'];

    // Actualiza la base de datos con los detalles
    $sql = "UPDATE citas SET detalles = '$detalles' WHERE id = $idCita";

    if ($conn->query($sql) === TRUE) {
        echo "Detalles guardados correctamente.";
    } else {
        echo "Error al guardar detalles: " . $conn->error;
    }

    // Cierra la conexión
    $conn->close();
} else {
    header("Location: admin.php"); // Redirige si se accede directamente al script sin datos POST
}
?>
