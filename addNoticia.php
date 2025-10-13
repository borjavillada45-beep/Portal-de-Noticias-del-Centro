<?php
session_start();

// ======================================================
// === INICIALIZAR FUNCIONES Y DATOS ===
// ======================================================

// Si no existen noticias en la sesión, las inicializamos (por seguridad)
if (!isset($_SESSION['noticias'])) {
    $_SESSION['noticias'] = [];
}

// Función para añadir una noticia (misma que en index.php)
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
        'imagen' => $imagen
    ];
}

// ======================================================
// === PROCESAR ENVÍO DEL FORMULARIO ===
// ======================================================
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor  = trim($_POST['autor'] ?? '');
    $fecha  = trim($_POST['fecha'] ?? '');
    $texto  = trim($_POST['noticia'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $imagen = trim($_POST['imagen'] ?? '');

    if (strlen($titulo) < 5) {
        $error = 'El título debe tener al menos 5 caracteres.';
    } elseif (empty($categoria)) {
        $error = 'Debe seleccionar una categoria';
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $error = 'La fecha no tiene un formato válido (YYYY-MM-DD).';
    } else {
        $imagen = $_FILES['imagen']['name'] ?? '';
        if(!$imagen)$imagen = 'sin_imagen.jpg';
        addNoticia($titulo, $autor, $fecha, $texto, $categoria, $imagen);
        header('Location: index.php?success=1');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Noticia - Arangoya News</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">

    <!-- Flatpickr Calendario -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.13/dist/l10n/es.js"></script>
</head>

<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg fixed-top bg-dark" id="navbar2">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="index.php">Arangoya News</a>
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
                    <li class="nav-item"><a class="nav-link text-white active" href="addNoticia.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="soporte.php">Soporte</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ===== FORMULARIO ===== -->
    <div class="container mt-5 pt-5">
        <h2 class="mb-3 text-center">Añadir Nueva Noticia</h2>

        <?php if ($error): ?>
            <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="addNoticia.php" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo"
                    value="<?= htmlspecialchars($_POST['titulo'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor"
                    value="<?= htmlspecialchars($_POST['autor'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha</label>
                <input type="text" class="form-control" id="fecha" name="fecha"
                    value="<?= htmlspecialchars($_POST['fecha'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <select name="categoria" class="form-select" required>
                    <option value="" disabled selected>Seleccione una categoría</option>
                    <option value="Internacional" <?= (isset($_POST['categoria']) && $_POST['categoria'] === 'Internacional') ? 'selected' : '' ?>>Internacional</option>
                    <option value="Arangoya" <?= (isset($_POST['categoria']) && $_POST['categoria'] === 'Arangoya') ? 'selected' : '' ?>>Arangoya</option>
                    <option value="Deportes" <?= (isset($_POST['categoria']) && $_POST['categoria'] === 'Deportes') ? 'selected' : '' ?>>Deportes</option>
                    <option value="Cultura" <?= (isset($_POST['categoria']) && $_POST['categoria'] === 'Cultura') ? 'selected' : '' ?>>Cultura</option>
                    <option value="Otros" <?= (isset($_POST['categoria']) && $_POST['categoria'] === 'Otros') ? 'selected' : '' ?>>Otros</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen"
                    value="<?= htmlspecialchars($_POST['imagen'] ?? '') ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Noticia</label>
                <textarea class="form-control" name="noticia" rows="5" required><?= htmlspecialchars($_POST['noticia'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100">Publicar Noticia</button>
        </form>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer class="footer footer-columns py-5 bg-dark text-white mt-5">
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
                    <a href="#" class="me-2 text-white">🐦</a>
                    <a href="#" class="me-2 text-white">📘</a>
                    <a href="#" class="text-white">📸</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Flatpickr configuración -->
    <script>
        flatpickr("#fecha", {
            dateFormat: "Y-m-d",
            locale: "es"
        });
    </script>

</body>

</html>