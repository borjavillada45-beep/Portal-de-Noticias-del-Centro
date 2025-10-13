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
        'texto' => 'Texto actualizado de la noticia 1'
    ],
    [
        'id' => 2,
        'titulo' => 'Noticia 2 modificada',
        'autor' => 'Autor 2',
        'fecha' => '2025-09-15',
        'texto' => 'Texto actualizado de la noticia 2'
    ],
    [
        'id' => 3,
        'titulo' => 'Noticia 3 modificada',
        'autor' => 'Autor 3',
        'fecha' => '2025-08-20',
        'texto' => 'Texto actualizado de la noticia 3'
    ]
];

// ======================================================
// === FUNCIONES ===
// ======================================================
function extracto($texto, $long = 50) {
    return strlen($texto) > $long ? substr($texto, 0, $long) . "..." : $texto;
}

function addNoticia($titulo, $autor, $fecha, $noticia) {
    $id = max(array_column($_SESSION['noticias'], 'id')) + 1;
    $_SESSION['noticias'][] = [
        'id' => $id,
        'titulo' => $titulo,
        'autor' => $autor,
        'fecha' => $fecha,
        'texto' => $noticia
    ];
}

// ======================================================
// === INICIALIZAR SESIÓN CON NOTICIAS PREDETERMINADAS ===
// ======================================================
if (!isset($_SESSION['noticias'])) {
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

    $_SESSION['noticias'] = $noticiasPredeterminadas;
    addNoticia($titulo, $autor, $fecha, $texto);
    header('Location: index.php?success=1');
    exit;
}

// ======================================================
// === FILTROS ===
// ======================================================
$filtrarTexto = trim($_GET['buscar'] ?? '');
$filtrarMes   = trim($_GET['mes'] ?? '');
$ordenar      = isset($_GET['ordenar']) ? true : false;

$noticias = $_SESSION['noticias'];

if ($filtrarTexto) {
    $noticias = array_filter($noticias, fn($n) =>
        stripos($n['titulo'], $filtrarTexto) !== false || stripos($n['texto'], $filtrarTexto) !== false
    );
}

if ($filtrarMes) {
    $noticias = array_filter($noticias, fn($n) =>
        substr($n['fecha'], 5, 2) === $filtrarMes
    );
}

if ($ordenar) {
    usort($noticias, fn($a, $b) => strcmp($b['fecha'], $a['fecha']));
}

// ======================================================
// === CONVERTIR A MAYÚSCULAS ===
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<link rel="icon" href="img/logo.png">
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
  <div class="container">
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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

<!-- ===== MODAL DE ÉXITO ===== -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="successModalLabel">¡Éxito!</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">¡Noticia añadida correctamente!</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!-- ===== CARRUSEL ===== -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/1920/1080?random=1" class="d-block w-100" alt="">
      <div class="carousel-caption">
        <h1>Bienvenido a</h1>
        <p>Noticias Arangoya</p>
        <button class="btn btn-shadow">Inicio</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/1920/1080?random=2" class="d-block w-100" alt="">
      <div class="carousel-caption">
        <h1>Trending</h1>
        <p>Visita las noticias trending actuales</p>
        <button class="btn btn-shadow">Trending</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/1920/1080?random=3" class="d-block w-100" alt="">
      <div class="carousel-caption">
        <h1>DAW2</h1>
        <p>Descubre las noticias de la clase de DAW2</p>
        <button class="btn btn-shadow">Descúbrelo</button>
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

<!-- ===== SECCIÓN DESCRIPTIVA ===== -->
<section class="content py-5 text-center">
  <div class="container">
    <h2>Visita nuestras secciones de noticias</h2>
    <p>Bienvenido a Noticias Arangoya, un portal donde podrás crear, compartir y explorar las noticias más recientes.</p>
  </div>
</section>

<!-- ===== FILTROS ===== -->
<div class="container mt-4">
  <h2>Filtrar Noticias</h2>
  <form method="GET" class="row g-2 mb-4">
    <div class="col-md-4">
      <input type="text" class="form-control" name="buscar" placeholder="Buscar..." value="<?= htmlspecialchars($filtrarTexto) ?>">
    </div>
    <div class="col-md-4">
      <select name="mes" class="form-select">
        <option value="">Filtrar por mes</option>
        <?php for ($m=1; $m<=12; $m++): $mes = str_pad($m, 2, '0', STR_PAD_LEFT); ?>
          <option value="<?= $mes ?>" <?= ($filtrarMes==$mes)?'selected':'' ?>><?= $mes ?></option>
        <?php endfor; ?>
      </select>
    </div>
    <div class="col-md-2"><button type="submit" class="btn btn-danger">Filtrar</button></div>
    <div class="col-md-2"><a href="index.php?ordenar=1" class="btn btn-danger">Ordenar ↓</a></div>
  </form>
</div>

<!-- ===== CARDS ===== -->
<section class="cards py-5">
  <div class="container">
    <div class="row g-4">
      <?php foreach($noticias as $n): ?>
      <div class="col-md-4">
        <div class="card-hover">
          <img src="https://picsum.photos/400/250?random=<?= $n['id'] ?>" alt="">
          <div class="overlay">
            <h3><?= htmlspecialchars($n['titulo']) ?></h3>
            <p><?= htmlspecialchars(extracto($n['texto'])) ?></p>
            <small>Por <?= htmlspecialchars($n['autor']) ?> (<?= htmlspecialchars($n['fecha']) ?>)</small><br>
            <a href="index.php?detalle=<?= $n['id'] ?>" class="btn btn-sm btn-danger mt-2">Ver detalle</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer class="footer footer-columns py-5 text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4"><h5>Arangoya News</h5><p>Transformando ideas en soluciones digitales.</p></div>
      <div class="col-md-4">
        <h5>Enlaces</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="text-white">Inicio</a></li>
          <li><a href="addNoticia.php" class="text-white">Formulario</a></li>
          <li><a href="soporte.php" class="text-white">Soporte</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Síguenos</h5>
        <a href="#" class="text-white me-2">🐦</a>
        <a href="#" class="text-white me-2">📘</a>
        <a href="#" class="text-white">📸</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
