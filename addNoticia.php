<?php
session_start();

// ======================================================
// === FUNCIONES Y SESIÓN ===
// ======================================================
if (!isset($_SESSION['noticias'])) {
    $_SESSION['noticias'] = [];
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
// === PROCESAR FORMULARIO ===
// ======================================================
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $autor  = trim($_POST['autor'] ?? '');
    $fecha  = trim($_POST['fecha'] ?? '');
    $texto  = trim($_POST['noticia'] ?? '');
    $categoria = trim($_POST['categoria'] ?? '');
    $imagen = '';

    if (strlen($titulo) < 5) {
        $error = 'El título debe tener al menos 5 caracteres.';
    } elseif (empty($categoria)) {
        $error = 'Debe seleccionar una categoría.';
    } elseif (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $fecha)) {
        $error = 'La fecha no tiene un formato válido (YYYY-MM-DD).';
    } else {
        // Procesar imagen si se sube
        if (isset($_FILES['imagen']) && $_FILES['imagen']['name']) {
            $imagen = 'img/' . basename($_FILES['imagen']['name']);
            move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen);
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>

</head>

<body>

    <!-- ===== NAVBAR ===== -->
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

    <!-- ===== FORMULARIO ===== -->
    <div class="container mt-5 pt-5">
        <h2 class="mb-3 text-center">Añadir Nueva Noticia</h2>

        <?php if ($error): ?>
        <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="addNoticia.php" enctype="multipart/form-data" class="p-4 rounded ">
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
                <label class="form-label">Categoría</label>
                <select name="categoria" class="form-select" required>
                    <option value="" disabled <?= !isset($_POST['categoria']) ? 'selected' : '' ?>>Seleccione una
                        categoría</option>
                    <?php
                $categorias = ['Internacional','Arangoya','Deportes','Cultura','Otros'];
                foreach ($categorias as $cat):
                    $selected = (isset($_POST['categoria']) && $_POST['categoria'] === $cat) ? 'selected' : '';
                    echo "<option value=\"$cat\" $selected>$cat</option>";
                endforeach;
                ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen" required
            </div>
            <div class="mb-3">
                <label class="form-label">Noticia</label>
                <textarea class="form-control" name="noticia" rows="5"
                    required><?= htmlspecialchars($_POST['noticia'] ?? '') ?></textarea>
            </div>
            <button type="submit" class="btn btn-danger w-100">Publicar Noticia</button>
        </form>
    </div>

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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    flatpickr("#fecha", {
        dateFormat: "Y-m-d",
        locale: "es"
    });
    </script>
</body>

</html>