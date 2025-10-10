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
          <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Destacado</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaDos.php">DAW2</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaTres.php">Arangoya</a></li>
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
        <h2 class="title_class">¡Ningun alumno de 2º de DAW se va de erasmus!</h2>
        <p class="p_notice">
          Después de dos años de guerra que dejaron más de 67.000 muertos, Israel y Hamás han aceptado la primera fase del plan de paz impulsado por Estados Unidos. El acuerdo fue anunciado por Donald Trump a través de su red social Truth Social, donde afirmó que “todos los rehenes serán liberados muy pronto” y que Israel retirará sus tropas a una línea acordada como primer paso hacia una paz “fuerte, duradera y eterna”.
          El pacto incluye el intercambio de prisioneros, con la liberación de 48 rehenes israelíes —la mayoría fallecidos— a cambio de unos 2.000 presos palestinos. También contempla la retirada del Ejército israelí de la Franja de Gaza, la entrada de ayuda humanitaria y la creación de un Gobierno tecnócrata palestino para administrar Gaza. Hamás ha aceptado el acuerdo, aunque ha expresado reservas sobre su exclusión política en el futuro gobierno de la Franja.
          Las negociaciones se llevaron a cabo en Egipto, con la participación de representantes de Israel, Hamás, Qatar, Turquía, Egipto y Estados Unidos. El acuerdo fue posible gracias a la mediación internacional, y se espera que en los próximos días se liberen los rehenes y se inicie la retirada militar israelí.
          Hamás ha pedido garantías de que Israel no reanudará los bombardeos tras recuperar a los rehenes, y ha instado a los países garantes —incluidos Catar y Turquía— a vigilar el cumplimiento del pacto. Por su parte, Estados Unidos se ha comprometido a enviar ayuda humanitaria a través de la ONU.
          Este tratado representa el primer avance diplomático tangible desde el inicio del conflicto en octubre de 2023. Aunque aún quedan fases por definir, como la reconstrucción de Gaza y el desarme de Hamás, el acuerdo marca un punto de inflexión en la guerra y abre una vía hacia la desescalada y la paz duradera
        </p>
      </div>
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
        <img src="../img/Palestina.jpg" alt="noticia1" class="img-fluid rounded shadow mb-3">
        <img src="../img/Donald Trump.webp" alt="noticia1" class="img-fluid rounded shadow">
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

</body>

</html>