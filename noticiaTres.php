<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Noticias</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="/Github/Portal-de-Noticias-del-Centro/style.css" />
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/logo.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../style.css">
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
        <h2 class="titleSecondary_class m-3">Innovación educativa en Arangoya: Realidad Virtual aplicada a la Logística</h2>
        <p class="p_notice m-3">
          El Centro Educativo Arangoya ha incorporado a su metodología docente la herramienta LLOG VR, un simulador de almacén en realidad virtual que permite a los estudiantes experimentar en primera persona procesos logísticos como recepción, almacenamiento, preparación de pedidos y gestión de inventarios. Esta iniciativa busca ofrecer una formación más práctica y adaptada a las necesidades del sector logístico actual.
          Según el docente Alejandro Rodríguez Villalobos, esta herramienta complementa las lecciones teóricas y prepara a los alumnos para su futuro profesional en un entorno digitalizado. La implementación de LLOG VR en el centro representa un paso hacia la modernización de la formación en logística, alineándose con las tendencias actuales del sector.
          Además de la integración de tecnologías avanzadas, Arangoya ofrece una amplia gama de ciclos formativos de grado medio y superior en áreas como Educación Infantil, Anatomía Patológica y Citodiagnóstico, Transporte y Logística, Comercio Internacional, y Desarrollo de Aplicaciones Multiplataforma y Web. El centro se distingue por su enfoque en la innovación, la formación integral de la persona y el compromiso con la empleabilidad de su alumnado.
          Con esta incorporación, Arangoya continúa consolidándose como un referente en la formación profesional, adaptándose a las demandas del mercado laboral y ofreciendo a sus estudiantes herramientas que les permitan destacarse en un entorno profesional cada vez más digitalizado.
      </div>
      <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
        <img src="img/logistica.jpg" alt="noticia1" class="img-fluid rounded shadow mb-3">
        <img src="img/logisticaDos.jpg" alt="noticia1" class="img-fluid rounded shadow">
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

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="navbarUno" style: padding-top="50px">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#"></a>
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center w-125" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaUno.php">Destacado</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaDos.php">DAW2</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="Noticias/noticiaTres.php">Arangoya</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="addNoticia.php">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="soporte.php">Soporte</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- ===== NAVBAR ===== -->

    <div class="container my-4">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <h2 class="title_class">Tratado de paz entre Isarel y Palestina</h2>
                <p class="p_notice">
                    Después de dos años de guerra que dejaron más de 67.000 muertos, Israel y Hamás han aceptado la
                    primera fase del plan de paz impulsado por Estados Unidos. El acuerdo fue anunciado por Donald Trump
                    a través de su red social Truth Social, donde afirmó que “todos los rehenes serán liberados muy
                    pronto” y que Israel retirará sus tropas a una línea acordada como primer paso hacia una paz
                    “fuerte, duradera y eterna”.
                    El pacto incluye el intercambio de prisioneros, con la liberación de 48 rehenes israelíes —la
                    mayoría fallecidos— a cambio de unos 2.000 presos palestinos. También contempla la retirada del
                    Ejército israelí de la Franja de Gaza, la entrada de ayuda humanitaria y la creación de un Gobierno
                    tecnócrata palestino para administrar Gaza. Hamás ha aceptado el acuerdo, aunque ha expresado
                    reservas sobre su exclusión política en el futuro gobierno de la Franja.
                    Las negociaciones se llevaron a cabo en Egipto, con la participación de representantes de Israel,
                    Hamás, Qatar, Turquía, Egipto y Estados Unidos. El acuerdo fue posible gracias a la mediación
                    internacional, y se espera que en los próximos días se liberen los rehenes y se inicie la retirada
                    militar israelí.
                    Hamás ha pedido garantías de que Israel no reanudará los bombardeos tras recuperar a los rehenes, y
                    ha instado a los países garantes —incluidos Catar y Turquía— a vigilar el cumplimiento del pacto.
                    Por su parte, Estados Unidos se ha comprometido a enviar ayuda humanitaria a través de la ONU.
                    Este tratado representa el primer avance diplomático tangible desde el inicio del conflicto en
                    octubre de 2023. Aunque aún quedan fases por definir, como la reconstrucción de Gaza y el desarme de
                    Hamás, el acuerdo marca un punto de inflexión en la guerra y abre una vía hacia la desescalada y la
                    paz duradera
                </p>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <img src="../img/Palestina.jpg" alt="noticia1" class="img-fluid rounded shadow mb-3">
                <img src="../img/Donald Trump.webp" alt="noticia1" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
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
    </footer>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>