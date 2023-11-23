<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isaac André Castellanos Romero - Líder de proyectos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Estilos omitidos para brevedad, mantenidos tal cual */
    </style>
</head>
<body>
    <?php $sections = [
        [
            'id' => 'perfil',
            'title' => 'Perfil',
            'content' => '<p>Soy estudiante de la licenciatura de Informática, orientado a la especialización en el ámbito liderazgo-administrativo. Enfocado a los resultados y con excelentes dotes comunicativas, de igual manera cuento con suficiente conocimiento en áreas como tecnologías de la información, sistemas digitales y mercadotecnia intermedia.</p>'
        ],
        [
            'id' => 'experiencia_laboral',
            'title' => 'Experiencia Laboral',
            'content' => '<p>Trabajé como mesero en el restaurante italiano Caciato desde el 2021 hasta enero del 2023, donde desarrollé habilidades como tolerancia a la frustración, trabajo en equipo y servicio al cliente.</p>'
        ],
        [
            'id' => 'competencias',
            'title' => 'Competencias',
            'content' => '<ul>
                <li>Liderazgo</li>
                <li>Competencias digitales</li>
                <li>Creatividad</li>
                <li>Adaptabilidad</li>
                <li>Resolución de problemas</li>
            </ul>'
        ],
        [
            'id' => 'valores',
            'title' => 'Valores',
            'content' => '<ul>
                <li>Puntualidad</li>
                <li>Resiliencia</li>
                <li>Compañerismo y trabajo en equipo</li>
                <li>Tolerancia y respeto</li>
                <li>Productividad y compromiso</li>
            </ul>'
        ],
        [
            'id' => 'formacion_academica',
            'title' => 'Formación Académica',
            'content' => '<p>Estudiante de 7° semestre de la carrera de Informática.</p>
                <ul>
                    <li>Facultad de Estudios Superiores Cuautitlán.</li>
                    <li>Universidad Nacional Autónoma de México</li>
                </ul>
                <p>Certificado en Clientes potenciales con anuncios en FaceBook</p>
                <p>Certificado en Aprendamos Marketing</p>'
        ],
        [
            'id' => 'idiomas',
            'title' => 'Idiomas',
            'content' => '<p>Español: Nativo</p>
                <p>Inglés: Básico</p>
                <p>Italiano: Básico</p>'
        ],
        [
            'id' => 'contacto',
            'title' => 'Contacto',
            'content' => '<p><strong>E-mail:</strong> andregrr27@gmail.com</p>
                <p><strong>Cel:</strong> 5520656162</p>'
        ]
    ]; ?>

    <div class="container">
        <div class="btn-container">
            <?php foreach ($sections as $section): ?>
                <a class="btn btn-primary" href="#<?php echo $section['id']; ?>">
                    <?php echo $section['title']; ?>
                    <?php if ($section['id'] === 'perfil'): ?>
                        <i class="fas fa-user"></i>
                    <?php elseif ($section['id'] === 'experiencia_laboral'): ?>
                        <i class="fas fa-briefcase"></i>
                    <?php elseif ($section['id'] === 'competencias'): ?>
                        <i class="fas fa-chart-line"></i>
                    <?php elseif ($section['id'] === 'valores'): ?>
                        <i class="fas fa-heart"></i>
                    <?php elseif ($section['id'] === 'formacion_academica'): ?>
                        <i class="fas fa-graduation-cap"></i>
                    <?php elseif ($section['id'] === 'idiomas'): ?>
                        <i class="fas fa-language"></i>
                    <?php elseif ($section['id'] === 'contacto'): ?>
                        <i class="fas fa-envelope"></i>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>

        <h1 class="text-center">Isaac André Castellanos Romero</h1>
        <h2 class="text-center">Líder de proyectos</h2>
        <hr>

        <?php foreach ($sections as $section): ?>
            <div id="<?php echo $section['id']; ?>" class="section">
                <h2><?php echo $section['title']; ?></h2>
                <?php echo $section['content']; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
