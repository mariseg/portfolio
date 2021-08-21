<?php
$page = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="proyectos">
<?php include_once("header.php");?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <p>Los siguientes son algunos de los trabajos que he realizado:</p>
            </div>
        </div>
        <div class="row bloque">
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="images/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">ABM CLIENTES</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y
                            Json.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Ver Online</a>
                    </div>
                    <div class="col-6 my-5 ps-2 pe-5 pt-1 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Código fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">SISTEMA DE GESTION DE VENTAS</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Ver Online</a>
                    </div>
                    <div class="col-6 my-5 ps-2 pt-1 pe-5 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Código fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <div class="row border m-1 bg-white">
                    <img src="images/proyecto-integrador.png" alt="Proyecto integrador" class="img-fluid">
                    <!-- img-fluid ajusta la imagen al tamaño del contenedor-->
                    <div class="color-gradiente py-3">
                        <h2 class="mb-0">PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="ps-2 pe-3 pt-3">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                            funcionalidades a fines.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="" class="btn btn-rojo">Ver Online</a>
                    </div>
                    <div class="col-6 my-5 ps-2 pt-1 pe-5 link-rojo text-center">
                        <a href="http://github.com" target="_blank">Código fuente</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
    
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>