<?php
$paginaActiva = "noticias";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noticias</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="/Github/Portal-de-Noticias-del-Centro/style.css" />
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" href="../img/logo.png">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="../img/logo.svg" alt="Logo"> Arangoya News
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaActiva == 'inicio') ? 'active' : ''; ?>"
              href="../index.php">Inicio</a>
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
<p>Prueba papa</p>
<p>Prueba papa</p>

<p>Prueba papa</p>

<p>Prueba papa</p>

<p>Prueba papa</p>



  <footer class="bg-dark text-white text-center py-3 footer-custom fixed-bottom">
    &copy; <?php echo date("Y"); ?> Portal de noticias Arangoya
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>