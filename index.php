<?php
session_start();

// ======================================================
// === NOTICIAS PREDETERMINADAS ===
// ======================================================
$noticiasPredeterminadas = [
    [
        'id' => 1,
        'titulo' => 'Noticia 1 modificada',
        'autor' => 'Autor 1',
        'fecha' => '2025-10-01',
        'texto' => 'Texto actualizado de la noticia 1',
        'categoria' => 'Internacional',
        'imagen' => 'https://picsum.photos/400/250?random=1'
    ],
    [
        'id' => 2,
        'titulo' => 'Noticia 2 modificada',
        'autor' => 'Autor 2',
        'fecha' => '2025-09-15',
        'texto' => 'Texto actualizado de la noticia 2',
        'categoria' => 'Arangoya',
        'imagen' => 'https://picsum.photos/400/250?random=2'
    ],
    [
        'id' => 3,
        'titulo' => 'Noticia 3 modificada',
        'autor' => 'Autor 3',
        'fecha' => '2025-08-20',
        'texto' => 'Texto actualizado de la noticia 3',
        'categoria' => 'Arangoya',
        'imagen' => 'https://picsum.photos/400/250?random=3'
    ]
];

// ======================================================
// === FUNCIONES ===
// ======================================================
function extracto($texto, $long = 50)
{
    return strlen($texto) > $long ? substr($texto, 0, $long) . "..." : $texto;
}

function listar($noticias, $categoria = '')
{
    foreach ($noticias as $n) {
        if ($categoria && (!isset($n['categoria']) || stripos($n['categoria'], $categoria) === false)) {
            continue;
        }
        echo '<div class="col-md-4">';
        echo '<div class="card-hover">';
        echo '<img src="' . ($n['imagen'] ?? 'https://picsum.photos/400/250?random=' . $n['id']) . '" alt="' . htmlspecialchars($n['titulo']) . '">';
        echo '<div class="overlay">';
        echo '<h3>' . htmlspecialchars($n['titulo']) . '</h3>';
        echo '<p>' . htmlspecialchars(extracto($n['texto'])) . '</p>';
        echo '<small>Por ' . htmlspecialchars($n['autor']) . ' el ' . htmlspecialchars($n['fecha']) . '</small><br>';
        if (!empty($n['categoria'])) {
            echo '<small>Categoría: ' . htmlspecialchars($n['categoria']) . '</small><br>';
        }
        echo '<a href="detalleNoticia.php?id=' . $n['id'] . '" class="btn btn-sm btn-danger rounded-pill mt-2">Ver detalle</a>';
        echo '<a href="index.php?mayus=1&id=' . $n['id'] . '" class="btn btn-sm btn-danger rounded-pill mt-2">Título mayúsculas</a>';
        echo '</div></div></div>';
    }
}

function addNoticia($titulo, $autor, $fecha, $texto, $categoria, $imagen)
{
    $id = count($_SESSION['noticias']) > 0 ? max(array_column($_SESSION['noticias'], 'id')) + 1 : 1;
    $_SESSION['noticias'][] = [
        'id' => $id,
        'titulo' => $titulo,
        'autor' => $autor,
        'fecha' => $fecha,
        'texto' => $texto,
        'categoria' => $categoria,
        'imagen' => $imagen ?: 'https://picsum.photos/400/250?random=' . $id
    ];
}

// ======================================================
// === INICIALIZAR SESIÓN CON NOTICIAS PREDETERMINADAS ===
// ======================================================
if (!isset($_SESSION['noticias']) || empty($_SESSION['noticias'])) {
    $_SESSION['noticias'] = $noticiasPredeterminadas;
}

// ======================================================
// === PROCESAR ALTA DE NOTICIA ===
// ======================================================
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor  = trim($_POST['autor'] ?? '');
    $fecha  = trim($_POST['fecha'] ?? '');
    $texto  = trim($_POST['noticia'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $imagen = $_FILES['imagen']['name'] ?? '';

    // Validaciones
    if (strlen($titulo) < 5) {
        $error = 'El título debe tener al menos 5 caracteres.';
        header('Location: index.php?error=' . urlencode($error));
        exit;
    }

    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $error = 'La fecha no tiene un formato válido (YYYY-MM-DD).';
        header('Location: index.php?error=' . urlencode($error));
        exit;
    }

    addNoticia($titulo, $autor, $fecha, $texto, $categoria, $imagen);
    header('Location: index.php?success=1');
    exit;
}

// ======================================================
// === FILTROS Y ORDENACIÓN ===
// ======================================================
$filtrarTexto = trim($_GET['buscar'] ?? '');
$filtrarMes   = trim($_GET['mes'] ?? '');
$ordenar      = isset($_GET['ordenar']);
$filtrarCategoria = trim($_GET['categoria'] ?? '');

$noticias = $_SESSION['noticias'];

// --- Filtro por texto ---
if ($filtrarTexto) {
    $noticias = array_filter($noticias, fn($n) =>
        stripos($n['titulo'], $filtrarTexto) !== false || stripos($n['texto'], $filtrarTexto) !== false
    );
}

// --- Filtro por mes ---
if ($filtrarMes) {
    $noticias = array_filter($noticias, fn($n) =>
        substr($n['fecha'], 5, 2) === $filtrarMes
    );
}

// --- Filtro por categoría ---
if ($filtrarCategoria) {
    $noticias = array_filter($noticias, fn($n) =>
        isset($n['categoria']) && stripos($n['categoria'], $filtrarCategoria) !== false
    );
}

// --- Ordenar por fecha descendente ---
if ($ordenar) {
    usort($noticias, fn($a, $b) => strcmp($b['fecha'], $a['fecha']));
}

// ======================================================
// === TÍTULO A MAYÚSCULAS ===
// ======================================================
if (isset($_GET['mayus']) && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($_SESSION['noticias'] as &$n) {
        if ($n['id'] == $id) {
            $n['titulo'] = strtoupper($n['titulo']);
        }
    }
    header('Location: index.php');
    exit;
}

// ======================================================
// === DETALLE DE NOTICIA ===
// ======================================================
if (isset($_GET['detalle'])) {
    $id = intval($_GET['detalle']);
    foreach ($_SESSION['noticias'] as $n) {
        if ($n['id'] == $id) {
            echo '<div class="container mt-5 pt-5">';
            echo '<h2>' . htmlspecialchars($n['titulo']) . '</h2>';
            echo '<p><strong>Autor:</strong> ' . htmlspecialchars($n['autor']) . '</p>';
            echo '<p><strong>Fecha:</strong> ' . htmlspecialchars($n['fecha']) . '</p>';
            echo '<p><strong>Categoría:</strong> ' . htmlspecialchars($n['categoria']) . '</p>';
            echo '<p>' . nl2br(htmlspecialchars($n['texto'])) . '</p>';
            echo '<a href="index.php" class="btn btn-secondary">Volver</a> ';
            echo '<a href="index.php?mayus=1&id=' . $n['id'] . '" class="btn btn-warning">Título mayúsculas</a>';
            echo '</div>';
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arangoya News</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
</head>

<body>
    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center w-100" id="navbarNav">
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

    <!-- ===== MENSAJES ===== -->
    <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger text-center mt-5"><?= htmlspecialchars($_GET['error']) ?></div>
    <?php endif; ?>
    <!-- Modal de éxito -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-success">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="successModalLabel">¡Éxito!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    ¡La noticia se ha añadido correctamente!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CARRUSEL -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/Bienvenido.jpg" class="d-block w-100" alt="slide1">
                <div class="carousel-caption">
                    <h1>Bienvenido a</h1>
                    <p>Noticias Arangoya</p>
                    <a href="index.php">
                        <button class="btn btn-shadow">Inicio</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/destacadosDos.jpg" class="d-block w-100" alt="slide2">
                <div class="carousel-caption">
                    <h1>Destacado</h1>
                    <p>Visita las noticias trending actuales</p>
                    <a href="noticiaUno.php">
                        <button class="btn btn-shadow">Destacado</button>
                    </a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/dawDos.jpg" class="d-block w-100" alt="slide3">
                <div class="carousel-caption">
                    <h1>DAW2</h1>
                    <p>Descubre las noticias de la clase de DAW2</p>
                    <a href="noticiaDos.php">
                        <button class="btn btn-shadow">Descúbrelo</button>
                    </a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/arangoya.jpg" class="d-block w-100" alt="slide2">
                <div class="carousel-caption">
                    <h1>Arangoya</h1>
                    <p>Visita las noticias de el centro</p>
                    <a href="noticiaTres.php">
                        <button class="btn btn-shadow">Haz click</button>
                    </a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/Formulario.webp" class="d-block w-100" alt="slide2">
                <div class="carousel-caption">
                    <h1>Formulario</h1>
                    <p>Añade aqui tu noticia</p>
                    <a href="addNoticia.php">
                        <button class="btn btn-shadow">Añadir</button>
                    </a>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/soporte.webp" class="d-block w-100" alt="slide4">
                <div class="carousel-caption">
                    <h1>Soporte</h1>
                    <p>¿Tienes alguna duda o problema? Contacta con nosotros</p>
                    <a href="soporte.php">
                        <button class="btn btn-shadow">Pregúntanos</button>
                    </a>

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

    <!-- SECCIÓN DE BIENVENIDA -->
    <section class="content py-5 text-center">
        <div class="container">
            <h2>Visita nuestras secciones de noticias</h2>
            <p>
                Bienvenido a Noticias Arangoya, un portal dinámico donde podrás crear,
                compartir y explorar las noticias más recientes de nuestra comunidad educativa.
                Aquí los estudiantes y docentes publican artículos,
                comparten novedades y se mantienen informados de todo lo que ocurre en el entorno académico y
                tecnológico.
            </p>
        </div>
    </section>

    <!-- ===== FILTROS DE CATEGORÍA ===== -->
    <div class="container mt-4">
        <h2>Filtrar Noticias</h2>
        <form method="GET" class="row g-2 mb-4">
            <div class="col-md-4">
                <input type="text" class="form-control" name="buscar" placeholder="Buscar por texto..."
                    value="<?= htmlspecialchars($filtrarTexto) ?>">
            </div>
            <div class="col-md-4">
                <select name="mes" class="form-select">
                    <option value="">Filtrar por mes</option>
                    <?php for ($m = 1; $m <= 12; $m++): 
                        $mes = str_pad($m, 2, '0', STR_PAD_LEFT); ?>
                    <option value="<?= $mes ?>" <?= ($filtrarMes == $mes) ? 'selected' : '' ?>><?= $mes ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="col-md-4">
                <select name="categoria" class="form-select">
                    <option value="">Filtrar por categoría</option>
                    <?php 
                    $categorias = array_unique(array_map(fn($n) => $n['categoria'] ?? '', $_SESSION['noticias']));
                    foreach ($categorias as $cat):
                        if ($cat): ?>
                    <option value="<?= htmlspecialchars($cat) ?>" <?= ($filtrarCategoria == $cat) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($cat) ?>
                    </option>
                    <?php 
                        endif;
                    endforeach; ?>
                </select>
            </div>
            <div class="row mt-3">
                <div class="col-md-2"><button type="submit" class="btn btn-danger w-100">Filtrar</button></div>
                <div class="col-md-2"><a href="index.php?ordenar=1" class="btn btn-danger w-100">Ordenar por fecha ↓</a>
                </div>
            </div>
        </form>
    </div>

    <!-- ===== CARDS DINÁMICAS ===== -->
    <section class="cards py-5">
        <div class="container">
            <div class="row g-4">
                <?php listar($noticias, $filtrarCategoria); ?>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>