<?php
$page = "contact";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="confirmacion">

<?php include_once("header-en.php");?>
    
    <main class="container mx-sm-auto ms-3 mt-2">
        <div class="row">
            <div class="col-12 py-1 py-sm-3">
                <h1>Thanks for contact me !</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>I will be answering you as soon as possible.</p>
                </div>
    </main>
    <?php include_once("../footer.php");?>
    
    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>  <!-- script de bootstrap que maneja el colapso del menu -->
    <!-- Many of our components require the use of JavaScript to function. Specifically, they require our own JavaScript plugins and Popper. 
        Place one of the following <script>s near the end of your pages, right before the closing </body> tag, to enable them. 
        Include every Bootstrap JavaScript plugin and dependency with one of our two bundles. Both bootstrap.bundle.js and bootstrap.bundle.min.js 
        include Popper for our tooltips and popovers.-->
    <!-- los sripts se colocan al final antes del cierre del body -->
</body>

</html>