<!DOCTYPE html>
<html lang="es">
    <?php include('nav.php'); ?>
  
    <body>
        <main>
            <div class="row row-cols-1 row-cols-md-12 mb-12 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal"> Registro de Usuario</h2>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <form action="registrar_usuario.php" method="post">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" id="nombre" name="nombre" required><br>

                                    <label for="apellido">Apellido:</label>
                                    <input type="text" id="apellido" name="apellido" required><br>

                                    <label for="correo">Correo Electrónico:</label>
                                    <input type="email" id="correo" name="correo" required><br>

                                    <label for="numero_cuenta">Número de Cuenta:</label>
                                    <input type="text" id="numero_cuenta" name="numero_cuenta" required><br>

                                    <label for="contrasena">Contraseña:</label>
                                    <input type="password" id="contrasena" name="contrasena" required><br>

                                    <!-- Agregar campo oculto para el rol, asumiendo 'usuario' por defecto -->
                                    <input type="hidden" id="rol" name="rol" value="usuario">

                                    <input type="submit" value="Registrar">
                                </form>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php include('footer.php'); ?>
        </main>
    </body>
</html>
