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

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.svg" alt="Logo"> Noticias
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'inicio') ? 'active' : ''; ?>"
                            href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'noticias') ? 'active' : ''; ?>"
                            href="Noticias/noticiaUno.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'crear') ? 'active' : ''; ?>"
                            href="Noticias/noticiaDos.php">Añadir Noticia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'tecnologia') ? 'active' : ''; ?>"
                            href="Noticias/noticiaTres.php">Tecnología</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <h2 class="mb-3">Añadir Nueva Noticia</h2>
        <form action="procesarNoticia.php" method="POST" enctype="multipart/form-data">
            <form>
                <div class="mb-3">
                    <label class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="titulo">
                </div>
                <div class="mb-3">
                    <label class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor">
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha">
                </div>

                <div class="mb-3">
                    <label class="form-label">Noticia</label>
                    <textarea class="form-control" id="noticia" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary bg-danger">Enviar</button>
            </form>

        </form>

    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; <?php echo date("Y"); ?> Mini Portal de Noticias
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>