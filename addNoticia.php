<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Noticias Arangoya</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Noticias Arangoya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php">Noticias</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="addNoticia.php">Añadir Noticia</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="contacto.php">Ayuda / Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <h2 class="text-center mt-4">Bienvenido a Noticias Arangoya</h2>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6VZ1GDZCBoYz9F1ZC1og6z4l5U5xU5z5x5z5x5z5x5z5" crossorigin="anonymous"></script>
</body>

</html>

<?php
  $paginaActiva = "todas"; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noticias</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Noticias DAW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaActiva == 'todas') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/index.php">Todas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaActiva == 'politica') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/Noticia.php">Política</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaActiva == 'tecnologia') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaDos.php">Tecnología</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaActiva == 'deportes') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaTres.php">Deportes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($paginaActiva == 'entretenimiento') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/addNoticia.php">Entretenimiento</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" />
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

</body>
</html> 