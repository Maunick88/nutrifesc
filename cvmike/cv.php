<!DOCTYPE html>
<html lang="en">
<head>
    <!--header start-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

 <header class="head-section" style="background-color: #08245a">
   <div class="navbar navbar-default navbar-static-top container" style="background-color: #08245a">
        <div class="navbar-header">
        
       <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
         
        <a class="navbar-brand" href="https://www.dgae-siae.unam.mx/frm_cpan.html">
            <img src="logo_3.png" width="100" height="110"></a>

        <a class="navbar-brand" href="https://profile.indeed.com/?hl=es_MX&co=MX&from=gnav-passport--passport-webapp&_ga=2.203394328.804691806.1695778031-1954298756.1695674899">   
            <img src="logo_4.png" width="130" height="110"></a>
            <br>
            <br>
        <a class="navbar-brand" style="font-size: 23px; color:#FFF; font-family: Arial; text-align:left">Curriculum Vitae (Desarrollo Profesional y Académico)<br>
         Perfil Técnico en Programación</a>
      
   </div>
   <br>
   <br>
     <!--termina header-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Currículum Vitae - Miguel Ángel Valdez Bautista</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos CSS personalizados -->
    <link rel="stylesheet" href="styles.css">
    <!-- Estilos CSS para los colores y la animación -->
    <style>
        body {
            background-color: #f3e8e8; /* Fondo azul claro */
        }
        .container {
            background-color: #fff; /* Contenedor blanco */
            border-radius: 10px; /* Bordes redondeados */
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra ligera */
            position: relative; /* Para la posición de la imagen */
        }
        h1, h2, h3 {
            color: #002e63; /* Texto azul oscuro */
            transition: color 0.3s; /* Transición de color */
        }
        h1:hover, h2:hover, h3:hover {
            color: #F33535 ; /* Cambia el color al hacer hover */
        }
        .logo {
            position: absolute;
            top: 0;
            right: 0;
            max-width: 150px; /* Tamaño del logo */
            margin-top: 20px;
        }
        /* Animación de entrada */
        @keyframes fade-in {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .fade-in {
            animation: fade-in 1s ease-in-out;
        }
        /* Estilos para las imágenes de los apartados */
        .section-image {
            max-width: 100px; /* Tamaño de la imagen */
            margin-right: 20px; /* Espacio entre la imagen y el título */
            vertical-align: middle;
        }
        /* Animación de entrada para los títulos */
        @keyframes text-slide-in {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="container fade-in" >   
        <img class="logo" src="logo.jpeg" >
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <header class="text-center mt-4">
                    <h1 class="text-body">Miguel Ángel Valdez Bautista</h1>
                    
                    <p class="text-decoration-underline"></p>
                </header>
                
                    <section>
                <br>
                    <h2>Resumen</h2>
                    <p>Soy estudiante de Informática en la UNAM con experiencia diversa. He trabajado en soporte técnico, logística y ventas. Mi pasión es la programación. Estoy comprometido con el aprendizaje constante y ansío desafíos en tecnología. Soy un candidato versátil y resolutivo.
                    </p>
                </section>
                <hr class="border border-danger border-2 opacity-50">
                    <h2>Datos Personales</h2>
                    <ul>
                        <li><strong>Discapacidad:</strong> No</li>
                        <li><strong>Dispuesto a Viajar:</strong> No</li>
                        <li><strong>Fecha de Nacimiento:</strong> 2001-11-02</li>
                        <!-- Resto de los detalles de Datos Personales -->
                    </ul>
                </section>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <h2> Experiencia Laboral</h2>
                    <div class="experience">
                        <h3>Asociado - SERVICIOS COMERCIALES AMAZON MEXICO</h3>
                        <p><em>Enero 2023 - Agosto 2023</em></p>
                        <ul>
                            <li>Recepción de mercancías.</li>
                            <li>Registro y documentación.</li>
                            <li>Etiquetado y clasificación.</li>
                            <li>Inspección de calidad.</li>
                            <li>Almacenamiento y distribución.</li>
                            <li>Colaboración con otros departamentos.</li>
                            <li>Seguridad y cumplimiento de normativas.</li>
                        </ul>
                    </div>
                    <hr class="border border-danger border-2 opacity-50">
                   <div class="experience">
                        <h3>Ventas - TECATE SIX</h3>
                        <p><em>Julio 2022 - Enero 2023</em></p>
                        <ul>
                            <li>Procesamiento de transacciones.</li>
                            <li>Registro de compras.</li>
                            <li>Manejo de efectivo.</li>
                            <li>Control de inventario.</li>
                        </ul>
                    </div>
                    <hr class="border border-danger border-2 opacity-50">
                    <div class="experience">
                        <h3>Soporte Técnico - Codeman Company</h3>
                        <p><em>Septiembre 2020 - Julio 2021</em></p>
                        <ul>
                            <li>Atención al cliente.</li>
                            <li>Asistencia remota.</li>
                            <li>Documentación.</li>
                            <li>Configuración y mantenimiento de hardware y software.</li>
                            <li>Capacitación de usuarios.</li>
                            <li>Seguridad de la información.</li>
                            <li>Actualización de conocimientos.</li>
                        </ul>
                    </div>
                </section>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <h2>Educación y Formación</h2>
                    <ul>
                        <li>Licenciatura en curso en Informática - Universidad Nacional Autónoma de México</li>
                        <li>Bachillerato técnico o Certificación profesional técnica en Tecnologías de la información - Colegio de Estudios Científicos y Tecnológicos del Estado de México</li>
                    </ul>
                </section>
                <br>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <h2>Habilidades y Conocimientos</h2>
                    <ul>
                        <li>Microsoft Office Specialist (MOS)</li>
                        <li>Técnico en Programación (3 años)</li>
                        <li>Dominio de idioma inglés al 70%</li>
                        <li>C++ (3 años) </li>
                        <li>C# (3 años)</li>
                        <li>SQL (2 años)</li>
                        <li>PHP (3 años)</li>
                        <li>HTML5</li>
                        <li>Redes IP</li>
                    </ul>
                </section>
                <br>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <section>

                  </section>
                <br>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <h2>Contacto</h2>
                    <ul>
                        <li>Telefono 5530838042</li>
                        <li>Correo mikevaldez1782@gmail.com</li>                       
                    </ul>
                </section>
                <br>
                <hr class="border border-danger border-2 opacity-50">
                <section>
                    <section>
    <h2>Resumen</h2>
    <p>Soy estudiante de Informática en la UNAM con experiencia diversa. He trabajado en soporte técnico, logística y ventas. Mi pasión es la programación. Estoy comprometido con el aprendizaje constante y ansío desafíos en tecnología. Soy un candidato versátil y resolutivo.</p>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Eliminamos los botones de control -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="logo_7.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="logo_6.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="logo_5.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>

<script>
    // Agregamos JavaScript para cambiar automáticamente las imágenes
    $(document).ready(function () {
        // Inicializamos el carrusel
        $('#carouselExampleIndicators').carousel();

        // Configuramos el intervalo de cambio de imagen (5000 milisegundos = 5 segundos)
        $('#carouselExampleIndicators').carousel({
            interval: 1000
        });
    });
</script>
</section>

    


            </div>
        </div>
    </div>
</body>


</html>
