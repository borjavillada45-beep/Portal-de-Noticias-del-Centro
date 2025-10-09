<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Arangoya News</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
=======
    <title>Sitio Moderno</title>
>>>>>>> f75a56800a94d6a74ccf2a99ea33567326d2ea98

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ===== NAVBAR ===== -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container">
<<<<<<< HEAD
            <a class="navbar-brand justify-content-center w-150" href="index.php">
                <img src="img/logo.svg" alt="Logo"> Arangoya News
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center w-100">
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
=======
            <a class="navbar-brand text-white fw-bold" href="#"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center w-125" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Destacado</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Arangoya</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Soporte</a></li>

>>>>>>> f75a56800a94d6a74ccf2a99ea33567326d2ea98
                </ul>
            </div>
        </div>
    </nav>

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
                mñvsjosdvpojadvskjavd`pksdabkavejDPOJOSIJGVSO´JGMODBJM`SDBSBHS
                DRHMRSGPOSNBSNM`VBSKJPVMSGK`SOEBMP`pksoina`vm kstr
                dojbesifbnsvñsebiufoepk´mlaokfafo
            </p>
        </div>
    </section>

    <!-- ===== CARDS ===== -->
    <section class="cards py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card-hover">
                        <img src="https://picsum.photos/400/250?random=10" alt="Card 1">
                        <div class="overlay">
                            <h3>Card 1</h3>
                            <p>Descripción del card 1</p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card-hover">
                        <img src="https://picsum.photos/400/250?random=11" alt="Card 2">
                        <div class="overlay">
                            <h3>Card 2</h3>
                            <p>Descripción del card 2</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card-hover">
                        <img src="https://picsum.photos/400/250?random=12" alt="Card 3">
                        <div class="overlay">
                            <h3>Card 3</h3>
                            <p>Descripción del card 3</p>
                        </div>
                    </div>
                </div>
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
<<<<<<< HEAD

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card news-card h-100">
                <img src="img/IMAGEN.jpg" class="card-img-top" alt="Noticia 3">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Título de Noticia 3</h5>
                    <p class="card-text text-truncate">Resumen breve de la noticia tres. Mantén el texto corto para que todas las cards tengan altura uniforme.</p>
                    <p class="text-muted mb-2"><small>Autor: Carlos García | 01/10/2025</small></p>
                    <a href="Noticias/noticiaTres.php" class="btn btn-primary mt-auto">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</main>



    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 footer-custom fixed-bottom">
        &copy; <?php echo date("Y"); ?> Portal de noticias Arangoya
=======
>>>>>>> f75a56800a94d6a74ccf2a99ea33567326d2ea98
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
