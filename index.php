<?php

session_start();
// Esta variable de sesión simula una base de datos de noticias y hace que no se pierdan los datos al recargar la página.
if (!isset($_SESSION["noticias"])) { //Inicializamos las noticias si no existen
    $_SESSION['noticias'] = [
        [
            'id' => 1,
            'titulo' => 'Noticia 1',
            'autor' => 'Autor 1',
            'fecha' => '2025-10-01',
            'texto' => 'Descubre qué está pasando en el mundo. Esta es la noticia número uno.'
        ],
        [
            'id' => 2,
            'titulo' => 'Card 2',
            'autor' => 'Autor 2',
            'fecha' => '2025-09-15',
            'texto' => 'Descripción del card 2. Segunda noticia interesante.'
        ],
        [
            'id' => 3,
            'titulo' => 'Card 3',
            'autor' => 'Autor 3',
            'fecha' => '2025-08-20',
            'texto' => 'Descripción del card 3. Tercera noticia para mostrar.'
        ]
    ];
}
// -- Funciones --
function extracto($texto, $long = 50)
{
    return strlen($texto) > $long ? substr($texto, 0, $long) . "..." : $texto;
}
function addNoticia($titulo, $autor, $fecha, $noticia)
{
    $id = count($_SESSION['noticias']) + 1;
    $_SESSION['noticias'][] = [
        'id' => $id,
        'titulo' => $titulo,
        'autor' => $autor,
        'fecha' => $fecha,
        'texto' => $noticia
    ];
}

// --- Filtros y orden ---
$filtrarTexto = trim($_GET['buscar'] ?? '');
$filtrarMes = trim($_GET['mes'] ?? '');
$ordenar = isset($_GET['ordenar']) ? true : false;

// --- Filtrar noticias ---
$noticias = $_SESSION['noticias'];
if ($filtrarTexto) {
    $noticias = array_filter($noticias, function ($n) use ($filtrarTexto) {
        return stripos($n['titulo'], $filtrarTexto) !== false || stripos($n['texto'], $filtrarTexto) !== false;
    });
}
if ($filtrarMes) {
    $noticias = array_filter($noticias, function ($n) use ($filtrarMes) {
        return substr($n['fecha'], 5, 2) === $filtrarMes;
    });
}
if ($ordenar) {
    usort($noticias, function ($a, $b) {
        return strcmp($b['fecha'], $a['fecha']);
    });
}

// --- Transformar título a mayúsculas ---
if (isset($_GET['mayus']) && isset($_GET['id'])) {
    foreach ($_SESSION['noticias'] as &$n) {
        if ($n['id'] == $_GET['id']) {
            $n['titulo'] = strtoupper($n['titulo']);
        }
    }
    header('Location: index.php');
    exit;
}

// --- Ver detalle ---
if (isset($_GET['detalle'])) {
    $id = $_GET['detalle'];
    foreach ($_SESSION['noticias'] as $n) {
        if ($n['id'] == $id) {
            echo '<div class="container mt-5 pt-5">';
            echo '<h2>' . htmlspecialchars($n['titulo']) . '</h2>';
            echo '<p><strong>Autor:</strong> ' . htmlspecialchars($n['autor']) . '</p>';
            echo '<p><strong>Fecha:</strong> ' . htmlspecialchars($n['fecha']) . '</p>';
            echo '<p>' . nl2br(htmlspecialchars($n['texto'])) . '</p>';
            echo '<a href="index.php" class="btn btn-secondary">Volver</a> ';
            echo '<a href="index.php?mayus=1&id=' . $n['id'] . '" class="btn btn-warning">Título mayúsculas</a>';
            echo '</div>';
            exit;
        }
    }
}

// --- Procesar alta ---
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor = trim($_POST['autor'] ?? '');
    $fecha = trim($_POST['fecha'] ?? '');
    $texto = trim($_POST['noticia'] ?? '');

    if (strlen($titulo) < 5) {
        $error = 'El título debe tener al menos 5 caracteres.';
        header('Location: index.php?error=' . urlencode($error));
    } else {
        addNoticia($titulo, $autor, $fecha, $texto);
        header('Location: index.php?sucess=1');
        exit;
    }
}

?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arangoya news</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
</head>
<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center w-125" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
<<<<<<< HEAD
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Destacado</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaDos.php">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaTres.php">Arangoya</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="addNoticia.php">Soporte</a></li>
                    
=======
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaUno.php">Destacado</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaDos.php">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="noticiaTres.php">Arangoya</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="addNoticia.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="soporte.php">Soporte</a></li>

>>>>>>> ad2de7e4400937136c026686d65c7b8481bf4188
                </ul>
            </div>
        </div>
    </nav>
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="alert alert-success text-center mt-5" role="alert">
            ¡Noticia añadida correctamente!
        </div>
    <?php endif; ?>

    <!-- ===== CARRUSEL ===== -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1920/1080?random=1" class="d-block w-100" alt="slide1">
                <div class="carousel-caption">
                    <h1>Bienvenido a</h1>
                    <p>Noticias Arangoya</p>
                    <button class="btn btn-shadow">Inicio</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1920/1080?random=2" class="d-block w-100" alt="slide2">
                <div class="carousel-caption">
                    <h1>Trending</h1>
                    <p>Visita las noticias trending actuales</p>
                    <button class="btn btn-shadow">Trending</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1920/1080?random=3" class="d-block w-100" alt="slide3">
                <div class="carousel-caption">
                    <h1>DAW2</h1>
                    <p>Descubre las noticias de la clase de DAW2</p>
                    <button class="btn btn-shadow">Descubrelo</button>

                </div>
            </div>

            <div class="carousel-item">
                <img src="https://picsum.photos/1920/1080?random=3" class="d-block w-100" alt="slide3">
                <div class="carousel-caption">
                    <h1>Soporte</h1>
                    <p>Tienes alguna duda o problema? Contacta con nosotros</p>
                    <button class="btn btn-shadow">Preguntanos</button>

                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- ===== CONTENIDO ===== -->
    <section class="content py-5 text-center">
        <div class="container">
            <h2>Visita nuestras secciones de noticias</h2>
            <p>
                Bienvenido a Noticias Arangoya, un portal dinámico donde podrás crear,
                compartir y explorar las noticias más recientes de nuestra comunidad educativa.
                Aquí los estudiantes y docentes publican artículos,
                comparten novedades y se mantienen informados de todo lo que ocurre en el entorno académico y tecnológico.
            </p>
        </div>
    </section>

    <!-- ===== FILTROS ===== -->
    <div class="container mt-4">
        <h2>Filtrar Noticias</h2>
        <form method="GET" class="row g-2 mb-4">
            <div class="col-md-4">
                <input type="text" class="form-control" name="buscar" placeholder="Buscar por texto..." value="<?= htmlspecialchars($filtrarTexto) ?>">
            </div>
            <div class="col-md-4">
                <select name="mes" class="form-select">
                    <option value="">Filtrar por mes</option>
                    <?php
                    for ($m = 1; $m <= 12; $m++) {
                        $mes = str_pad($m, 2, '0', STR_PAD_LEFT);
                        echo '<option value="' . $mes . '"' . ($filtrarMes == $mes ? ' selected' : '') . '>' . $mes . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-danger">Filtrar</button>
            </div>
            <div class="col-md-2">
                <a href="index.php?ordenar=1" class="btn btn-danger">Ordenar por fecha ↓</a>
            </div>
        </form>
    </div>

    <!-- ===== CARDS DINÁMICAS ===== -->
    <section class="cards py-5">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($noticias as $n): ?>
                    <div class="col-md-4">
                        <div class="card-hover">
                            <img src="https://picsum.photos/400/250?random=<?= $n['id'] ?>" alt="<?= htmlspecialchars($n['titulo']) ?>">
                            <div class="overlay">
                                <h3><?= htmlspecialchars($n['titulo']) ?></h3>
                                <p><?= htmlspecialchars(extracto($n['texto'])) ?></p>
                                <small>Por <?= htmlspecialchars($n['autor']) ?> el <?= htmlspecialchars($n['fecha']) ?></small><br>
                                <a href="index.php?detalle=<?= $n['id'] ?>" class="btn btn-sm btn-danger align-items-center rounded-pill mt-2">Ver detalle</a>
                                <a href="index.php?mayus=1&id=<?= $n['id'] ?>" class="btn btn-sm btn-danger align-items-center rounded-pill mt-2">Título mayúsculas</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>