<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Formulario de Inserción</title>
</head>
<body>
    <center>
    <h1>Formulario de Inserción de Alumnos</h1>
    <form method="post" action="insertar.php">
        <label for="expediente">Expediente:</label>
        <input type="text" id="expediente" name="expediente" required><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad" required><br><br>

        <label for="fechanac">Fecha de Nacimiento:</label>
        <input type="date" id="fechanac" name="fechanac" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required><br><br>

        <label for="nivel">Nivel:</label>
        <input type="text" id="nivel" name="nivel" required><br><br>

        <label for="faltas">Faltas:</label>
        <input type="number" id="faltas" name="faltas" required><br><br>

        <input type="submit" value="Insertar">
    </form>
    </center>
</body>
</html>
