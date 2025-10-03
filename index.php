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
  <favicon class="ico"></favicon>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand"  href="index.php"><img width="50px" height="50px" src="img/logo.svg"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaActiva == 'todas') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/index.php">Noticias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaActiva == 'politica') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/Noticia.php">Añadir Noticia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo ($paginaActiva == 'tecnologia') ? 'active' : ''; ?>" href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaDos.php">Tecnología</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/imagen.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imagen.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/imagen.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container p-4 ">
    <div class="row">
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container p-4 ">
    <div class="row">
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
      <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <a class="btn btn-primary" href="#" role="button">Noticia</a>
          <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="vh-100 d-flex flex-column">
    <footer class="h-50 mt-auto d-flex justify-content-center">
      @copy
    </footer>
  </div>

</body>

</html>