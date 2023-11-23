<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administración</title>
</head>
<body>
    <h2>Interfaz de Administración</h2>
    
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

    // Obtener la lista de usuarios
    $sql = "SELECT id, nombre, apellido, correo, numero_cuenta, rol FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Número de Cuenta</th><th>Rol</th><th>Acciones</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['numero_cuenta'] . "</td>";
            echo "<td>" . $row['rol'] . "</td>";

            // Agregar un botón para otorgar permisos de administrador
            echo "<td><form action='otorgar_admin.php' method='post'>";
            echo "<input type='hidden' name='usuario_id' value='" . $row['id'] . "'>";
            echo "<input type='submit' value='Otorgar Administrador'>";
            echo "</form></td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No hay usuarios registrados.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>

</body>
</html>
