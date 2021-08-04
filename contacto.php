<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="contacto">
    <header>
        <!-- Fixed navbar de Bootstrap -->
        <nav class="navbar navbar-expand-md mb-4 mt-2">  <!-- navbar-expand-md es la clase que define que el menu se colapse o expanda segun la pantalla -->
            <div class="container">
                <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">  
                    <i class="fas fa-bars p-1"></i>     <!-- icono del menu -->
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style>  <!-- contenedor de las opciones del menu -->
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4 pe-sm-4 py-1" href="contacto.php">Contacto</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                            <!-- la clase active se le pone solo al link de contacto porque estamos en la pagina contactos, en las otras paginas se pondra los otros correspondientes-->
                        </li>
                    </ul>
                    <form class="d-flex ms-4">  <!-- parte de ES/EN -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.html">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="en/contact.html">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mx-sm-auto ms-3 mt-2">
        <div class="row">
            <div class="col-12 py-1 py-sm-3">
                <h1>Contacto</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
                    <div class="col-12 pt-ms-5 pt-3">
                        <p>Escaneá el código y escribime!</p>
                        <img src="images/WhatsApp QR.jpeg" alt="QR" class="img-fluid ms-4">
                    </div>
                </div>

                <div class="col-12 col-sm-6 pt-4 pt-sm-0 mb-5">
                    <form action="" method="POST"></form>
                    <div>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <input type="email" name="txtCorreo" id="txtCorre" placeholder="Correo"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <textarea name=”txtMensaje” id=”txtMensaje” cols="30" rows="6"
                            placeholder="Escribe aquí tu mensaje" class="form-control py-1.5 mb-3 shadow"></textarea>
                        <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-4 shadow">ENVIAR</button>
                        <!-- class de bootstrap btn -->
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer container">
        <div class="ms-5 mt-5 pb-4">
            <div class="row">
                <div class="col-12 col-sm-3">
                    <a href="https://github.com" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com/in/maricel-segal-071113218/" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-12 col-sm-3">
                    Sponsor <a href="https://depcsuite.com">DePc Suite</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a href="mailto:maricelsegal@gmail.com">maricelsegal@gmail.com</a>
                </div>
            </div>
    </footer>
    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541156654836" target="_blank"
            title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>  <!-- script de bootstrap que maneja el colapso del menu -->
    <!-- Many of our components require the use of JavaScript to function. Specifically, they require our own JavaScript plugins and Popper. 
        Place one of the following <script>s near the end of your pages, right before the closing </body> tag, to enable them. 
        Include every Bootstrap JavaScript plugin and dependency with one of our two bundles. Both bootstrap.bundle.js and bootstrap.bundle.min.js 
        include Popper for our tooltips and popovers.-->
    <!-- los sripts se colocan al final antes del cierre del body -->
</body>

</html>