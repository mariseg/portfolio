<?php
$page = "index";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="inicio">
<?php include_once("header.php");?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-sm-1 pt-sm-4 div-cohete">  <!-- clase text-center a la caja del cohete para despues darle alineacion center en CSS-->
                    <div>
                        <a href="proyectos.php"><img src="images/cohete.svg" alt="Proyectos" class="cohete"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 mt-sm-5 text-center offset-sm-3 mb-3">  <!-- clase text-center a la caja del mensaje para despues darle alineacion center en CSS-->
                    <div class="bienvenido">
                        <p class="p-1 bienvenido">Bienvenid@ a mi sitio web sobre mis aprendizajes en programación.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">  <!-- clase text-center a la caja del boton para despues darle alineacion center en CSS-->
                    <div>
                        <a href="proyectos.php"><button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-3 shadow">Conoce mis
                            proyectos</button></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once("footer.php");?>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>