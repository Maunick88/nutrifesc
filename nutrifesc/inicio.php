<!DOCTYPE html>
<html lang="es">
    <?php include('headerb.php'); ?>
  
    <body>
        <main>
            <div class="row row-cols-1 row-cols-md-12 mb-12 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h2 class="my-0 fw-normal">Iniciar Sesión</h2>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light"></small></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <form action="verificar_login.php" method="post">
                                    <label for="correo">Correo Electrónico:</label>
                                    <input type="email" id="correo" name="correo" required><br>

                                    <label for="contrasena">Contraseña:</label>
                                    <input type="password" id="contrasena" name="contrasena" required><br>

                                    <input type="submit" value="Iniciar Sesión">
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
