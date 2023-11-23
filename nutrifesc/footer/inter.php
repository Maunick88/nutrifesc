<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('../nav.php'); 
    include('../estilos.css')?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Registro de Citas</title>
    <!-- Agrega tus estilos CSS aquí -->
</head>
<body>
    <header>
        <!-- Aquí puedes incluir tu encabezado común -->
        <h1>Bienvenido al Sistema de Registro de Citas</h1>
    </header>

    <main>
        <section>
            <h2>Interfaz Intuitiva</h2>
            <!-- Puedes agregar un párrafo que destaque la facilidad de uso -->
            <p>
                Nuestra interfaz intuitiva ha sido diseñada pensando en la simplicidad y facilidad de uso tanto para alumnos como para administradores.
                Los elementos de navegación son claros y las funciones están organizadas de manera lógica para una experiencia fluida.<br>
                Esta página de inicio es un archivo HTML que utiliza PHP para incluir archivos comunes, como la barra de navegación y el pie de página. Aquí hay una descripción de las secciones clave de la página:
            </p>
            <!-- También puedes incluir imágenes o capturas de pantalla de la interfaz -->
            <img src="/img/cap1.png" alt="Interfaz del Sistema">
        </section>
            <section>
            <h2>Registro de usuarios</h2>
            <!-- Puedes agregar un párrafo que destaque la facilidad de uso -->
            <p>
                <strong>Registro de usuarios</strong><br>Esta página contiene un formulario en el cual el usuario puede darse de alta <br> <strong>Tanto usuarios como administradores crean su cuenta en este apartado</strong>
            </p>
            <img src="/img/cap2.png" alt="Interfaz del Sistema">
            <p>
                <strong>Etiqueta html:lang="es":</strong>Especifica que el idioma utilizado en la página es español.
            </p>
            <p>
                <strong>Etiqueta head: include('../nav.php'); ?:</strong>ncluye el archivo PHP "nav.php", que contiene la barra de navegación de la página.
            1   <br>Configuración del conjunto de caracteres y la escala de la vista.
                <br>Título de la página: "Sistema de Registro de Citas".
                <br>Comentario para agregar estilos CSS (actualmente vacío).
            </p>
            <p>
                <strong>Etiqueta body:</strong>
                <br>Encabezado <strong>(header):</strong> Contiene el título principal "Bienvenido al Sistema de Registro de Citas".
                <br>Contenido principal <strong>(main):</strong> Contiene secciones que describen características del sistema.
                <br>Primera sección: "Interfaz Intuitiva" con un párrafo que destaca la simplicidad y facilidad de uso, junto con una imagen de la interfaz del sistema.
                <br>Segunda sección: "Inicio de sesión" con un párrafo similar y otra imagen de la interfaz.
                <br>Pueden agregarse más secciones según sea necesario.
                <br>Pie de página <strong>(footer):</strong> Incluye el archivo PHP "footer.php", que probablemente contenga información común del pie de página.
            </p>
            <!-- También puedes incluir imágenes o capturas de pantalla de la interfaz -->
            <img src="/img/cap1.png" alt="Interfaz del Sistema">
        </section>


        <!-- Otras secciones de tu página -->
    </main>

    <footer>
        <!-- Aquí puedes incluir tu pie de página común -->
                    <?php include('../footer.php'); ?>
    </footer>
</body>
</html>
