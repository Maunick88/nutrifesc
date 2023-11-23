<!DOCTYPE html>
<html>
<head>
    <style>
        .copyright {
            text-align: center;
            padding-top: 50px;
        }

        .navbar-brand {
            color: #25252b;
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            background: #777;
            color: #f7f;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
            $host = "localhost";
            $usuario = "root";
            $password = "";
            $basededatos = "bdcolegio";
            $conectar = new mysqli($host, $usuario, $password, $basededatos);
        
            if($conectar->connect_error){
                die('Error en la conexión: ' . $conectar->connect_error);
            }
            else{
                echo "Se ha establecido una conexión <br>";
            }
            $sql = "SELECT * FROM alumnos";
            $resultado = $conectar->query($sql);

            if ($resultado->num_rows > 0) {
                // Mostrar los datos de la tabla
                while ($fila = $resultado->fetch_assoc()) {
                    //echo "Expediente: " . $fila["expediente"] . " - Nombre: " . $fila["nombre"] . " - Localidad: " . $fila["localidad"] . "-Fecha nac".$fila["fechanac"] ."-direccion".$fila["direccion"] ."-Curso".$fila["curso"]."-Nivel".$fila["nivel"]."-Faltas".$fila["faltas"] ."<br>" ;
                }
            } else {
                echo "No se encontraron registros en la tabla 'usuarios'.";
            }

            // Cerrar la conexión
           
        ?>
    </div>
</body>
</html>
