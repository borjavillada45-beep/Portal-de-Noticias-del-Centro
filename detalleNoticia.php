<?php
session_start();

// Verificar que nos pasan un id
if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$id = intval($_GET['id']);

// Buscar la noticia en la sesión
$noticia = null;
foreach ($_SESSION['noticias'] as $n) {
    if ($n['id'] === $id) {
        $noticia = $n;
        break;
    }
}

if (!$noticia) {
    echo "<p>Noticia no encontrada.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noticias</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">

</head>

<body class="d-flex flex-column min-vh-100">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbarUno">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center w-125" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaUno.php">Destacado</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaDos.php">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaTres.php">Arangoya</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="addNoticia.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="soporte.php">Soporte</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-grow-1">
        <div class="detalle-card">
            <div class="row align-items-center">
                <!-- TEXTO -->
                <div class="col-md-8">
                    <h2><?= htmlspecialchars($noticia['titulo']) ?></h2>
                    <div class="info">
                        <p><?= nl2br(htmlspecialchars($noticia['texto'])) ?></p>
                        <p><strong>Autor:</strong> <?= htmlspecialchars($noticia['autor']) ?></p>
                        <p><strong>Fecha:</strong> <?= htmlspecialchars($noticia['fecha']) ?></p>
                        <?php if (!empty($noticia['categoria'])): ?>
                        <p><strong>Categoría:</strong> <?= htmlspecialchars($noticia['categoria']) ?></p>
                        <?php endif; ?>
                        <p><?= date("Y:m:d") ?></p>
                    </div>
                    <a href="index.php" class="btn btn-secondary">Volver a Noticias</a>
                </div>

                <!-- IMAGEN -->
                <div class="col-md-4 text-center">
                    <?php if (!empty($noticia['imagen'])): ?>
                    <img src="<?= htmlspecialchars($noticia['imagen']) ?>"
                        alt="<?= htmlspecialchars($noticia['titulo']) ?>"
                        class="img-fluid rounded shadow mb-3 detalle-img">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>


    <!-- ===== FOOTER ===== -->
    <footer class="footer footer-columns py-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Arangoya News</h5>
                    <p>Transformando ideas en soluciones digitales.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Enlaces</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Inicio</a></li>
                        <li><a href="addNoticia.php" class="text-white">Formulario</a></li>
                        <li><a href="soporte.php" class="text-white">Soporte</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Síguenos</h5>
                    <div class="icons">
                        <a href="https://x.com/?lang=es" class="social x me-2" target="_blank">
                            <i class="bi bi-x-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="social instagram me-2" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.facebook.com/" class="social facebook me-2" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://wa.me/1234567890" class="social whatsapp" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>