<!DOCTYPE html>
<html>
<head>
    <title>Resultados de la Búsqueda</title>
</head>
<body>
    <h1>Resultados de la Búsqueda</h1>
    
    <?php
    if (isset($_POST['campo']) && isset($_POST['valor'])) {
        $campo = $_POST['campo'];
        $valor = $_POST['valor'];

        // Realiza la conexión a la base de datos aquí
        $host = "localhost";
        $usuario = "root";
        $password = "";
        $basededatos = "bdcolegio";

        $conectar = new mysqli($host, $usuario, $password, $basededatos);

        if($conectar->connect_error){
            die('Error en la conexión: ' . $conectar->connect_error);
        }

        // Consulta SQL para buscar registros
        $sql = "SELECT * FROM alumnos WHERE $campo LIKE '%$valor%'";
        $resultado = $conectar->query($sql);

        if ($resultado->num_rows > 0) {
            // Mostrar los resultados
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Expediente</th>";
            echo "<th>Nombre</th>";
            // Agrega más encabezados según tus campos
            echo "</tr>";

            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['expediente'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                // Agrega más celdas según tus campos
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }

        // Cierra la conexión
        $conectar->close();
    }
    ?>
      <a href='../ejercicio/index.php'>Página Principal</a>
</body>
</html>
