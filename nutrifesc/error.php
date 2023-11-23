<?php


// Verifica si el usuario ha iniciado sesión y es un administrador

    // Si no es un administrador, muestra un mensaje y termina el script
    include('headerd.php');
    ?>

    <div class="container">
        <div class="alert alert-danger" role="alert">
            No tienes permiso para acceder a esta página.
        </div>
    </div>

    <?php
    include('footer.php');
    exit();
