<?php
$paginaActiva = "noticias";
?>

<!DOCTYPE html>
<html lang="es">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Noticias</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/Github/Portal-de-Noticias-del-Centro/style.css" />
=======
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noticias</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="/Github/Portal-de-Noticias-del-Centro/style.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.png">
>>>>>>> 5b7ef0bda485b967ecc1301b73d30779b8d769bb

</head>

<body>
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Noticias DAW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'todas') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/index.php">Todas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'politica') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/Noticia.php">Política</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'tecnologia') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaDos.php">Tecnología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'deportes') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/Noticias/noticiaTres.php">Deportes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaActiva == 'entretenimiento') ? 'active' : ''; ?>"
                            href="http://localhost/Github/Portal-de-Noticias-del-Centro/addNoticia.php">Entretenimiento</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" />
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
=======
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
  <h1 class="mt-5 pt-5 title_class text-center">Noticias Destacadas</h1>
  <div class="container my-4">
    <div class="row d-flex align-items-center">
      <div class="col-md-8">
        <h2 class="title_class m-3">¡Del barrio bajo a Polonia!</h2>
        <p class="p_notice m-3">
          <b>Bermeo, Bizkaia</b>– Enertiz, una joven estudiante de segundo curso de Desarrollo de Aplicaciones Web (DAW), ha sido seleccionada como la única alumna de su clase para participar en el programa Erasmus en Oświęcim, Polonia. Lo que podría parecer una simple beca internacional, para ella representa mucho más: un giro inesperado en una vida marcada por la lucha, la incertidumbre y la esperanza. <br>
          Enertiz vive en condiciones de extrema precariedad. Su hogar, en una zona humilde de Bermeo, apenas cuenta con lo básico. A pesar de ello, cada mañana se levanta con la determinación de cambiar su destino. “Hay días en los que no sé si podré comer caliente, pero nunca he dejado de estudiar”, confiesa con la voz entrecortada. <br>
          Lo más sorprendente de su selección es que no alcanzó la media mínima exigida de 7 puntos. Sin embargo, el comité del centro educativo decidió mirar más allá de los números. Vieron en ella una historia de superación, una voluntad férrea y un potencial que no puede medirse con una nota.
          “Enertiz no solo merece esta oportunidad, la necesita”, declaró emocionada la directora del centro. “Sabemos que este viaje puede marcar un antes y un después en su vida, y por eso hemos decidido cubrir los siguientes gastos: desde el desplazamiento hasta el alojamiento en un apartamento en Oświęcim”. <br>
          La ciudad polaca, conocida por su historia y su entorno académico, será el nuevo hogar de Enertiz durante los próximos meses. Allí podrá estudiar, crecer y, sobre todo, respirar un aire nuevo, lejos de las dificultades que la han acompañado desde pequeña.
          “Es como si alguien me hubiera dicho: ‘No estás sola. Mereces algo mejor’”, dice Enertiz, con lágrimas en los ojos. “No sé qué me espera en Polonia, pero sé que este es el primer paso hacia una vida distinta”.
        </p>
      </div>
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
        <img src="img/Enerica.jpeg" alt="noticia1" class="img-fluid rounded shadow mb-3">
        <img src="img/oswiecim.webp" alt="noticia1" class="img-fluid rounded shadow">
      </div>
      <div class="m-3">
        <?php echo date("Y:m:d") ?>
      </div>
    </div>
  </div>

  <footer class="footer footer-columns py-5 ">
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
>>>>>>> 5b7ef0bda485b967ecc1301b73d30779b8d769bb

</body>

</html>