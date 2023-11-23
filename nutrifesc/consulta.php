<?php
 include('header.php'); 

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

// Consultar citas del usuario actual
$sql_citas_usuario = "SELECT c.id, c.fecha, c.hora, c.detalles, u.nombre 
                      FROM citas c
                      JOIN usuarios u ON c.usuario_id = u.id 
                      WHERE c.usuario_id = '$usuario_id'";
$result_citas_usuario = $conn->query($sql_citas_usuario);

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas del Usuario</title>
</head>

<main>
    <body>
    <div class="row row-cols-12 row-cols-md-12 mb-12 text-center">
      <div class="col">
        <div class="card mb-12 rounded-12 shadow-sm">
          <div class="card-header py-12">
            <h4 class="my-0 fw-normal">    Citas Programadas</h4>
          </div>
          <div class="card-body">
            
               <?php
    if ($result_citas_usuario->num_rows > 0) {
        // Mostrar tabla si hay citas programadas
echo "<table border='5' style='width: 100%;'>";
echo "<tr><th>Nombre</th><th>Fecha</th><th>Hora</th><th>Detalles</th></tr>";

while ($row = $result_citas_usuario->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['nombre']}</td>"; // Mostrar el nombre en lugar del ID
    echo "<td>{$row['fecha']}</td>";
    echo "<td>{$row['hora']}</td>";
    echo "<td>{$row['detalles']}</td>";
    echo "</tr>";
}

echo "</table>";
    } else {
        // Mostrar mensaje si no hay citas programadas
        echo "<p>No hay citas programadas.</p>";
    }
    ?>
            
           
          </div>

        </div>
      </div>
    </div>   

    <!-- Enlaces o botones adicionales según sea necesario -->


    <?php include('footer.php'); ?>
</body>
</html>
