<!DOCTYPE html>
<html>
<head>
    <title>Modificar Registro</title>
</head>
<body>
    <h1>Modificar Registro</h1>
    
    <form method="post" action="modificador.php">
       <label for="expediente">Ingresa el expediente a modificar:</label>
        <input type="text" name="expediente" id="expediente" required>
        <br><br>
            <!-- Agrega más opciones según los registros de tu base de datos -->
        </select>
        <br><br>

        <label for="nombre">Nuevo nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <br><br>

        <!-- Agrega más campos para editar según tus necesidades -->
        
        <input type="submit" value="Modificar">
    </form>
</body>
</html>
