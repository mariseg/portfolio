<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="inicio">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md mb-4 mt-2">
            <div class="container">
                <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars p-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link  active px-4 pe-sm-4 py-1" href="index-en.php">Home</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="about-me.php">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="contact.php">Contact</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                            <!-- la clase active se le pone solo al link de contacto porque estamos en la pagina contactos, en las otras paginas se pondra los otros correspondientes-->
                        </li>
                    </ul>
                    <form class="d-flex ms-4">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index-en.php">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-sm-1 pt-sm-4 div-cohete">  <!-- clase text-center a la caja del cohete para despues darle alineacion center en CSS-->
                    <div>
                        <a href="projects.php"><img src="../images/cohete.svg" alt="Projects" class="cohete"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-sm-5 text-center offset-sm-3 mb-3">  <!-- clase text-center a la caja del mensaje para despues darle alineacion center en CSS-->
                    <div class="bienvenido">
                        <p class="p-1 bienvenido">Welcome to my website about my IT learnings.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">  <!-- clase text-center a la caja del boton para despues darle alineacion center en CSS-->
                    <div>
                        <a href="projects.php"><button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-3 shadow">Take a look to my projects</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer container">
        <div class="ms-sm-0 ms-5 mt-4 pb-4">
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
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>