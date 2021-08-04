<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="sobremi">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md mb-4 mt-2">
            <div class="container">
                <button class="navbar-toggler px-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars p-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style>
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="index.php">Inicio</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4 pe-sm-4 py-1" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 pe-sm-4 py-1" href="contacto.php">Contacto</a>
                            <!-- class="nav-link active" son 2 clases distintas 'nav-link' y 'active' -->
                            <!-- la clase active se le pone solo al link de contacto porque estamos en la pagina contactos, en las otras paginas se pondra los otros correspondientes-->
                        </li>
                    </ul>
                    <form class="d-flex ms-4">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.php">ES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="en/projects.php">EN</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-5 col-12 mt-3">
                    <h1>Sobre mí</h1>
                    <p class="mt-4">Siempre me gustó la programación pero no me dediqué a eso. Nunca es tarde para
                        empezar!
                    </p>
                    <a href="contacto.php" class="btn btn-rojo mt-5">Descarga mi CV <i class="fas fa-download"></i></a>
                </div>
                <div class="col-sm-3 col-12 offset-sm-2 mt-4">
                    <img src="images/maricel.png" alt="Maricel Segal" class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologia" class="color-gradiente">
            <div class="container pb-4">
                <div class="row">
                    <div class="col-12 my-3 my-sm-5">
                        <h2 class="text-white">Stack tecnológico</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Python</h3>
                            <img src="images/Python.png" alt="Python" class="img-fluid d-block mx-auto" width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap-4-logo.png" alt="Python" class="img-fluid d-block mx-auto"
                                width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>HTML</h3>
                            <img src="images/HTML.png" alt="Python" class="img-fluid d-block mx-auto" width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Javascript</h3>
                            <img src="images/JavaScript-logo.png" alt="Python" class="img-fluid d-block mx-auto"
                                width="70px">
                        </div>
                    </div>
                </div>
                <div class="row my-sm-4">
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img src="images/CSS-logo.PNG" alt="Python" class="img-fluid d-block mx-auto" width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img src="images/git-logo.png" alt="Python" class="img-fluid d-block mx-auto" width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>PHP</h3>
                            <img src="images/php-logo.png.crdownload" alt="Python" class="img-fluid d-block mx-auto"
                                width="70px">
                        </div>
                    </div>
                    <div class="col-sm-3 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img src="images/react-1-logo-svg-vector.svg" alt="Python" class="img-fluid d-block mx-auto"
                                width="70px">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                </div>
            </div>
            <div class="row">
                <div class="border shadow bg-white rounded">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 p-5 my-auto d-none d-sm-block">
                                <img src="images/techint.png" alt="Techint" class="img-fluid gris" width="100px">
                            </div>
                            <div class="col-10 p-3">
                                <h3>Analista Contable</h3>
                                <h4>Grupo Techint</h4>
                                <h5>1998 - presente</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid consequuntur ea,
                                    sint ipsam ex est id nulla, perferendis alias doloremque quaerat quis commodi fugit
                                    optio numquam voluptates qui molestias cumque? Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Assumenda delectus illo similique explicabo,
                                    necessitatibus impedit quisquam porro dolores laudantium optio quibusdam tempore
                                    eligendi, quaerat magnam autem dolorem recusandae quae blanditiis? Lorem ipsum
                                    dolor, sit amet consectetur adipisicing elit. Sit necessitatibus consectetur quos
                                    quam, omnis maxime, praesentium soluta accusamus eveniet dignissimos quidem vitae
                                    officiis repellendus et aut. Necessitatibus, quos veniam. Ipsa! </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 p-5 my-auto d-none d-sm-block">  <!-- d-none hace que en mobile no se muestre (d=display) d-sm-block se muestra a partir de tablet -->
                                <img src="images/estudio contable.jpg" alt="Estudio Contable" class="img-fluid gris"
                                    width="100px">
                            </div>
                            <div class="col-10 p-3">
                                <h3>Impuesto y Balance</h3>
                                <h4>Estudio Contable</h4>
                                <h5>1995 - 1998</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid consequuntur ea,
                                    sint ipsam ex est id nulla, perferendis alias doloremque quaerat quis commodi fugit
                                    optio numquam voluptates qui molestias cumque? Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Assumenda delectus illo similique explicabo,
                                    necessitatibus impedit quisquam porro dolores laudantium optio quibusdam tempore
                                    eligendi, quaerat magnam autem dolorem recusandae quae blanditiis? Lorem ipsum
                                    dolor, sit amet consectetur adipisicing elit. Sit necessitatibus consectetur quos
                                    quam, omnis maxime, praesentium soluta accusamus eveniet dignissimos quidem vitae
                                    officiis repellendus et aut. Necessitatibus, quos veniam. Ipsa! </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2 p-5 my-auto d-none d-sm-block">
                                <img src="images/Logo-BBVA-1024x576.jpg" alt="BBVA" class="img-fluid gris" width="100px">
                            </div>
                            <div class="col-10 p-3">
                                <h3>Back Office</h3>
                                <h4>BBVA</h4>
                                <h5>1994 - 1995</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid consequuntur ea,
                                    sint ipsam ex est id nulla, perferendis alias doloremque quaerat quis commodi fugit
                                    optio numquam voluptates qui molestias cumque? Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Assumenda delectus illo similique explicabo,
                                    necessitatibus impedit quisquam porro dolores laudantium optio quibusdam tempore
                                    eligendi, quaerat magnam autem dolorem recusandae quae blanditiis? Lorem ipsum
                                    dolor, sit amet consectetur adipisicing elit. Sit necessitatibus consectetur quos
                                    quam, omnis maxime, praesentium soluta accusamus eveniet dignissimos quidem vitae
                                    officiis repellendus et aut. Necessitatibus, quos veniam. Ipsa! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación académica</h2>
                </div>
            </div>
            <div class="row border shadow bg-white rounded">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/uba.jpg" alt="Universidad de Buenos Aires" class="img-fluid gris"
                                width="100px">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Contadora Pública</h3>
                            <h4>Universidad de Buenos Aires</h4>
                            <h5>1994 - 1998</h5>
                            <a href="https://www.economicas.uba.ar/" target="_blank">https://www.economicas.uba.ar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="desarrollo" class="container">
            <div class="row">
                <div class="col-12 mt-5 mb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row border shadow bg-white rounded mb-5">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/Python.png" alt="Curso Phyton" class="img-fluid gris" width="100px">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Python Inicial</h3>
                            <h4>MDL Studio</h4>
                            <h5>Expedición: may 2021</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" alt="Programación Full stack" class="img-fluid gris"
                                width="100px">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>Programación Full Stack</h3>
                            <h4>DePc Suite</h4>
                            <h5>Expedición: jul 2021</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/casoc logo.JPG" alt="English Casoc" class="img-fluid gris" width="100px">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>English Intermediate B1</h3>
                            <h4>Casoc</h4>
                            <h5>Expedición: mar 2010</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="hobbies">
            <div class="container">
                <div class="row mx-0 py-5">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row bg-white card-hobbies shadow me-sm-1">
                            <div class="col-4 card text-center">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLES - Intermediate B1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row bg-white card-hobbies shadow ms-sm-1">
                            <div class="col-4 card text-center">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Fútbol</li>
                                    <li>Guitarra</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer fixed-bottom ms-4 ms-sm-0 mb-4">
        <div class="container">
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
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>