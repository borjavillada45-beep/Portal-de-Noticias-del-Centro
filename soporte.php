<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/Github/Portal-de-Noticias-del-Centro/style.css" />
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

    <div class="containerSoporte text-center mt-5 pt-5">
        <h1 class="titulo">¡Hola!</h1>
        <h1 class="subtitulo ">¿Necesitas ayuda?</h1>
    </div>

    <div class="container mt-5 mb-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label" id="nombre">Nombre: </label>
                <input type="text" class="form-control" placeholder="Escribe tu nombre y apellidos" required>
            </div>
            <div class="mb-3">
                <label class="form-label" id="correo">Correo: </label>
                <input type="email" class="form-control" placeholder="Escribe tu correo" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Número de teléfono</label>
                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="form-control"
                    placeholder="Escribe tu número de teléfono"
                    inputmode="numeric"
                    pattern="[0-9]{9}"
                    maxlength="9"
                    required>
            </div>
            <div class="mb-3">
                <label class="label-form" id="consulta">Consulta: </label>
                <textarea class="form-control mb-3" rows="5" placeholder="Escribe tu consulta aquí..." required></textarea>
            </div>

            <button type="submit" class="btn btn-danger mi-boton" id="boton">Enviar</button>
        </form>
    </div>
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