<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">


    <!-- CSS personalizado -->
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.png">
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
    <h1 class="mt-5 pt-5 title_class text-center">Arangoya</h1>
    <div class="container my-4">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <h2 class="titleSecondary_class m-3">Innovación educativa en Arangoya: Realidad Virtual aplicada a la
                    Logística</h2>
                <p class="p_notice m-3">
                    El Centro Educativo Arangoya ha incorporado a su metodología docente la herramienta LLOG VR, un
                    simulador de almacén en realidad virtual que permite a los estudiantes experimentar en primera
                    persona procesos logísticos como recepción, almacenamiento, preparación de pedidos y gestión de
                    inventarios. Esta iniciativa busca ofrecer una formación más práctica y adaptada a las necesidades
                    del sector logístico actual.
                    Según el docente Alejandro Rodríguez Villalobos, esta herramienta complementa las lecciones teóricas
                    y prepara a los alumnos para su futuro profesional en un entorno digitalizado. La implementación de
                    LLOG VR en el centro representa un paso hacia la modernización de la formación en logística,
                    alineándose con las tendencias actuales del sector.
                    Además de la integración de tecnologías avanzadas, Arangoya ofrece una amplia gama de ciclos
                    formativos de grado medio y superior en áreas como Educación Infantil, Anatomía Patológica y
                    Citodiagnóstico, Transporte y Logística, Comercio Internacional, y Desarrollo de Aplicaciones
                    Multiplataforma y Web. El centro se distingue por su enfoque en la innovación, la formación integral
                    de la persona y el compromiso con la empleabilidad de su alumnado.
                    Con esta incorporación, Arangoya continúa consolidándose como un referente en la formación
                    profesional, adaptándose a las demandas del mercado laboral y ofreciendo a sus estudiantes
                    herramientas que les permitan destacarse en un entorno profesional cada vez más digitalizado.
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

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>

</html>