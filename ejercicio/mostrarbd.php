<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Manipulando una BD</title>
</head>
<body>
    <h1 style="text-align: center;">Listado de Alumnos</h1>
    <br>
    <center>
        <table border="1">
            <tr bgcolor="#336699" style="color: #FF6;">
                <td>Expediente</td>
                <td>Nombre</td>
                <td>Localidad</td>
                <td>Fecha de Nacimiento</td>
                <td>Dirección</td>
                <td>Curso</td>
                <td>Nivel</td>
                <td>Faltas</td>
            </tr>
        <?php       
            include "coneccion.php"; // Asegúrate de que este archivo existe y contiene la conexión a la base de datos.

            $myconsulta = $conectar->query("SELECT * FROM alumnos");
            $filas = $myconsulta->num_rows;

            if ($filas >= 1) {
                while ($lafila = $myconsulta->fetch_assoc()) {
                    ?>

                    <tr bgcolor="#CEF6F5" onmouseover="this.style.background='#FFD961';"
                        onmouseout="this.style.background='#CEF6F5';">
                        <td><?php echo $lafila['expediente']; ?></td>
                        <td><?php echo $lafila["nombre"]; ?></td>
                        <td><?php echo $lafila['localidad']; ?></td>
                        <td><?php echo $lafila['fechanac']; ?></td>
                        <td><?php echo $lafila['direccion']; ?></td>
                        <td><?php echo $lafila['curso']; ?></td>
                        <td><?php echo $lafila['nivel']; ?></td>
                        <td><?php echo $lafila['faltas']; ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
        <br>
        <a href='../ejercicio/index.php'>Página Principal</a>
    </center>
</body>
</html>