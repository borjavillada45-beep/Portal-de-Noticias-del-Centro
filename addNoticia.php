<?php
// Definimos la página activa (puedes cambiar este valor dinámicamente)
$paginaActiva = "crear";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Portal de Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">


    <!-- Flatpickr Calendario -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>S
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/es.js"></script>



</head>

<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg fixed-top navbar2" id="navbar2">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center w-125" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Destacado</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Arangoya</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="addNoticia.php">Soporte</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <!--Formulario-->

    <div class="container mt-5 pt-5">
        <h2 class="mb-3">Añadir Nueva Noticia</h2>
        <?php if ($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control titulo" id="titulo" name="titulo" value="<?= htmlspecialchars($_POST['titulo'] ?? '')?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <input type="text" class="form-control autor" id="autor" name="autor" value="<?= htmlspecialchars($_POST['autor'] ?? '')?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha</label>
                <input type="text" class="form-control fecha" id="fecha" name="fecha" value="<?= htmlspecialchars($_POST['fecha'] ?? '')?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Noticia</label>
                <textarea class="form-control" id="noticia" rows="5" name="noticia" required><?= htmlspecialchars($_POST['noticia'] ?? '')?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mi-boton" id="boton" onclick="addNoticia()">Enviar</button>
        </form>

    </div>

    <!-- ===== FOOTER CON COLUMNAS ===== -->
    <footer class="footer footer-columns py-5">
        <div class="container">
            <div class="row text-white">
                <!-- Columna 1: Logo / info -->
                <div class="col-md-4 mb-3">
                    <h5>MiSitio</h5>
                    <p>Transformando ideas en soluciones digitales.</p>
                </div>

                <!-- Columna 2: Enlaces -->
                <div class="col-md-4 mb-3">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Portafolio</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>

                <!-- Columna 3: Redes sociales -->
                <div class="col-md-4 mb-3">
                    <h5>Síguenos</h5>
                    <a href="#" class="me-2">🐦</a>
                    <a href="#" class="me-2">📘</a>
                    <a href="#">📸</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaCript -->
    <script src="script.js"></script>


</body>

</html>