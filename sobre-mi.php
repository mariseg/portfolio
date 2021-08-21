<?php
$page = "sobre-mi";
?>

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
<?php include_once("header.php");?>
    <main>
        <div class="container">
            <div class="row mb-4 d-flex">
                <div class="col-sm-5 col-12 mt-3">
                    <h1>Sobre mí</h1>
                    <p class="mt-4">Siempre me gustó la programación pero no me dediqué a eso. Nunca es tarde para
                        empezar!
                    </p>
                    <a href="files/CV-Maricel Segal.pdf" class="btn btn-rojo mt-5" target="_blank">Descarga mi CV <i class="fas fa-download"></i></a>
                </div>
                <div class="col-sm-7 col-12 mt-4">
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
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Python</h3>
                            <img src="images/Python.png" alt="Python" class="img-fluid d-block mx-auto" width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap-4-logo.png" alt="Bootstrap" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>HTML5</h3>
                            <img src="images/HTML.png" alt="HTML5" class="img-fluid d-block mx-auto" width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Javascript</h3>
                            <img src="images/JavaScript-logo.png" alt="Javascript" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>JQuery</h3>
                            <img src="images/jquery.png.crdownload" alt="Jquery" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Apache</h3>
                            <img src="images/apache.png" alt="Apache" class="img-fluid d-block mx-auto"
                                width="74px">
                        </div>
                    </div>
                </div>
                <div class="row my-lg-4">
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>CSS</h3>
                            <img src="images/CSS-logo.PNG" alt="CSS" class="img-fluid d-block mx-auto" width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Git</h3>
                            <img src="images/git-logo.png" alt="Git" class="img-fluid d-block mx-auto" width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>PHP</h3>
                            <img src="images/php-logo.png.crdownload" alt="PHP" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>React.js</h3>
                            <img src="images/react-1-logo-svg-vector.svg" alt="React.js" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>Laravel</h3>
                            <img src="images/laravel-logo.png" alt="Laravel" class="img-fluid d-block mx-auto"
                                width="60px">
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 text-center">
                        <div class="card px-4 py-5 mx-0 mb-4 mb-lg-0">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png.crdownload" alt="MySQL" class="img-fluid d-block mx-auto"
                                width="60px">
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
                    <div class="col-lg-6 col-12 pb-3 pb-lg-0">
                        <div class="row bg-white card-hobbies shadow me-lg-1">
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
                    <div class="col-lg-6 col-12">
                        <div class="row bg-white card-hobbies shadow ms-lg-1">
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
    <?php include_once("footer.php");?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>