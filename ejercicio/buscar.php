<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Registros</title>
</head>
<body>
    <center>
    <h1>Buscar Registros</h1>
    
    <form method="post" action="buscador.php">
        <label for="campo">Selecciona el campo de búsqueda:</label>
        <select name="campo" id="campo">
            <option value="expediente">Expediente</option>
            <option value="nombre">Nombre</option>
            <!-- Agrega más opciones según los campos de tu base de datos -->
        </select>
        <br><br>

        <label for="valor">Ingresa el valor a buscar:</label>
        <input type="text" name="valor" id="valor" required>
        <br><br>

        <input type="submit" value="Buscar">
    </form>
    <br>
      <a href='../ejercicio/index.php'>Página Principal</a>
    </center>
</body>
</html>
