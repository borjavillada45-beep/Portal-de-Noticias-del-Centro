<?php
$paginaActiva = "todas";
// Definimos la página activa (puedes cambiar este valor dinámicamente)
$paginaActiva = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noticias</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <favicon class="ico"></favicon>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Portal de Noticias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img width="50px" height="50px" src="img/logo.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'todas') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/index.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'politica') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/Noticia.php">Añadir
                            Noticia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'tecnologia') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaDos.php">Tecnología</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.svg" alt="Logo"> Noticias
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
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
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
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
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <a class="btn btn-primary" href="#" role="button">Noticia</a>
                            <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            <a class="btn btn-primary" href="#" role="button">Noticia</a>
                            <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>
    </nav>


    <div id="carouselNoticias" class="carousel slide" data-bs-ride="carousel">
        <!-- margin-top = altura navbar -->
        <!-- Indicadores -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselNoticias" data-bs-slide-to="2"></button>
        </div>
    </div>
    <div class="col-md-4">
        <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            <a class="btn btn-primary" href="#" role="button">Noticia</a>
            <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/IMAGEN.jpg" class="d-block w-100" alt="Noticia 1">
                    <div class="carousel-caption">
                        <h1 class="fw-bold">Últimas Noticias del Centro</h1>
                        <p>Descubre las novedades más importantes de hoy.</p>
                        <a href="noticias.php" class="btn btn-primary btn-lg">Ver Noticias</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/IMAGEN.jpg" class="d-block w-100" alt="Noticia 2">
                    <div class="carousel-caption">
                        <h1 class="fw-bold">Tecnología en el Centro</h1>
                        <p>Innovación y aprendizaje con lo último en IT.</p>
                        <a href="tecnologia.php" class="btn btn-light btn-lg">Leer más</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/IMAGEN.jpg" class="d-block w-100" alt="Noticia 3">
                    <div class="carousel-caption">
                        <h1 class="fw-bold">Participa en nuestra comunidad</h1>
                        <p>Comparte tus experiencias y opiniones con todos.</p>
                        <a href="crear.php" class="btn btn-danger btn-lg">Publicar Noticia</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselNoticias" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselNoticias" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    </div>
    </div>
    <div class="container p-4 ">
        <div class="row">
            <div class="col-md-4">
                <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    <a class="btn btn-primary" href="#" role="button">Noticia</a>
                    <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>

                    <main class="container py-5">
                        <h1 class="text-center mb-5">Noticias destacadas</h1>

                        <div class="row justify-content-center gx-4 gy-4">
                            <!-- Card 1 -->
                            <div class="col-md-4">
                                <div class="card news-card h-100">
                                    <img src="img/IMAGEN.jpg" class="card-img-top" alt="Noticia 1">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">Título de Noticia 1</h5>
                                        <p class="card-text text-truncate">Resumen breve de la noticia número uno para
                                            enganchar al lector y mostrar lo más relevante.</p>
                                        <p class="text-muted mb-2"><small>Autor: Juan Pérez | 03/10/2025</small></p>
                                        <a href="Noticias/noticiaUno.php" class="btn btn-primary mt-auto">Leer más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small>
                                </p>
                                <a class="btn btn-primary" href="#" role="button">Noticia</a>
                                <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>

                                <!-- Card 2 -->
                                <div class="col-md-4">
                                    <div class="card news-card h-100">
                                        <img src="img/IMAGEN.jpg" class="card-img-top" alt="Noticia 2">
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">Título de Noticia 2</h5>
                                            <p class="card-text text-truncate">Resumen breve de la noticia dos,
                                                mostrando lo más relevante y manteniendo la información concisa.</p>
                                            <p class="text-muted mb-2"><small>Autor: María López | 02/10/2025</small>
                                            </p>
                                            <a href="Noticias/noticiaDos.php" class="btn btn-primary mt-auto">Leer
                                                más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="img/IMAGEN.jpg" class="img-fluid rounded-start" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p>
                                    <a class="btn btn-primary" href="#" role="button">Noticia</a>
                                    <a class="btn btn-primary" onclick="" href="#" role="button">Extraer</a>

                                    <!-- Card 3 -->
                                    <div class="col-md-4">
                                        <div class="card news-card h-100">
                                            <img src="img/IMAGEN.jpg" class="card-img-top" alt="Noticia 3">
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">Título de Noticia 3</h5>
                                                <p class="card-text text-truncate">Resumen breve de la noticia tres.
                                                    Mantén el texto corto para que todas las cards tengan altura
                                                    uniforme.</p>
                                                <p class="text-muted mb-2"><small>Autor: Carlos García |
                                                        01/10/2025</small></p>
                                                <a href="Noticias/noticiaTres.php" class="btn btn-primary mt-auto">Leer
                                                    más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </main>



                <div class="vh-100 d-flex flex-column">
                    <footer class="h-50 mt-auto d-flex justify-content-center">
                        @copy
                        <!-- Footer -->
                        <footer class="bg-dark text-white text-center py-3">
                            &copy; <?php echo date("Y"); ?> Mini Portal de Noticias
                        </footer>
                </div>

                <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>