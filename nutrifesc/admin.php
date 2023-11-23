<?php
include('nav.php');

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

// Obtener la lista de citas agendadas con información de usuario
$sql_citas = "SELECT citas.id, citas.fecha, citas.hora, citas.detalles, usuarios.nombre
              FROM citas
              JOIN usuarios ON citas.usuario_id = usuarios.id";
$result_citas = $conn->query($sql_citas);

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Administración</title>
</head>
<main>
    <body>

    <div class="row row-cols-12 row-cols-md-12 mb-12 text-center">
        <h2>Bienvenido, Administrador</h2>
      <div class="col">
        <div class="card mb-12 rounded-12 shadow-sm">
          <div class="card-header py-12">
            <h3 class="my-0 fw-normal"> Listado de Citas Agendadas</h3>
          </div>
          <div class="card-body">

            <table border="1" style="width: 100%;">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nombre del Usuario</th>
                    <th>Detalles</th>
                    <th>Acciones</th>
                </tr>

                <?php
                while ($row = $result_citas->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['fecha']}</td>";
                    echo "<td>{$row['hora']}</td>";
                    echo "<td>{$row['nombre']}</td>";
                    echo "<td>{$row['detalles']}</td>";
                    echo "<td><a href='cancelar_cita.php?id={$row['id']}'>Cancelar</a></td>";
                    echo "<td>";
                    echo "<form method='post' action='guardar_detalles.php'>";
                    echo "<input type='hidden' name='id_cita' value='{$row['id']}'>";
                    echo "<input type='text' name='detalles' placeholder='Detalles'>";
                    echo "<input type='submit' value='Guardar Detalles'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>

          </div>
        </div>
      </div>
    </div> 

    <!-- Enlaces o botones para cerrar sesión -->
    <?php include('footer.php'); ?>
</body>
</html>
