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

// Recibir datos del formulario
$correo = $_POST['correo'];
$contrasena_ingresada = $_POST['contrasena'];

// Obtener la información del usuario desde la base de datos
$sql = "SELECT id, contrasena, rol FROM usuarios WHERE correo='$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $contrasena_hash = $row['contrasena'];

    // Verificar la contraseña ingresada con la almacenada en la base de datos
    if (password_verify($contrasena_ingresada, $contrasena_hash)) {
        echo "Inicio de sesión exitoso";

        // Puedes almacenar la información del usuario en sesiones o cookies según tus necesidades
        // Ejemplo de almacenamiento de información en una sesión
        session_start();
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['usuario_rol'] = $row['rol'];
        header("Location: /NUTRIFESC/index.php"); // Redirigir a la página principal después del inicio de sesión
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

// Cerrar la conexión
$conn->close();
?>
