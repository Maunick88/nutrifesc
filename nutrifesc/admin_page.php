<?php
session_start(); // Asegúrate de iniciar la sesión en todas las páginas que utilicen sesiones

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['usuario_rol'])) {
    // Si el usuario tiene un rol de administrador, redirige a admin.php
    if ($_SESSION['usuario_rol'] === 'administrador') {
        header('Location: admin.php');
        exit();
    } else {
        // Si el usuario no tiene un rol de administrador, redirige a error.php
        header('Location: error.php');
        exit();
    }
} else {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header('Location: inicio.php');
    exit();
}
?>
    