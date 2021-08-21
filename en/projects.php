<?php
$page = "projects";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="proyectos">
<?php include_once("header-en.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Projects</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <p>Here below you can find some of my projects:</p>
            </div>
        </div>
        <div class="row bloque">
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="../images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">CRUD CUSTOMERS SYSTEM</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Create, read, update and delete customer records. Performed in HTML, CSS, PHP, Bootstrap
                            y
                            Json.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Online view</a>
                    </div>
                    <div class="col-6 my-5 pe-5 pt-1 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Source code</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="../images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">SALES MANAGEMENT SYSTEM</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Customers, products and sale management system. Performed in HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery and MySQL database.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Online view</a>
                    </div>
                    <div class="col-6 my-5 ps-2 pt-1 pe-5 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Source code</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="../images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">INTEGRAL PROJECT</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Full Stack project performed in PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago with admin panel, user manager, permissions module and
                            related functionalities.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Online view</a>
                    </div>
                    <div class="col-6 my-5 ps-2 pt-1 pe-5 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Source code</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("../footer.php");?>
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>