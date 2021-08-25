<?php
$page = "contact";

include_once("../PHPMailer/src/PHPMailer.php");
include_once("../PHPMailer/src/SMTP.php");
if ($_POST){
    $nombre = $_REQUEST['txtNombre'];
    $correo = $_REQUEST['txtCorreo'];
    $telefono = $_REQUEST['txtTelefono'];
    $mensaje = $_REQUEST['txtMensaje'];

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: maricelsegal@gmail.com' . "\r\n";
    $cabeceras .= 'From: Admin <info@maricelsegal.com.ar>' . "\r\n";

    $para = "maricelsegal@gmail.com";
    $asunto = "Se contactaron desde tu sitio web";
    $mensaje = "
    Nombre: $nombre<br>
    Correo: $correo<br>
    Tel&eacute;fono: $telefono<br>
    Mensaje: 
    $mensaje";
    // Enviarlo
    /*mail($para, $título, $mensaje, $cabeceras); */
    header("Location: submit-confirmation.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
</head>

<body id="contacto">
    <?php include_once("header-en.php");?>
    <main class="container mx-sm-auto ms-3 mt-2">
        <div class="row">
            <div class="col-12 py-1 py-sm-3">
                <h1>Contact</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Feel free to contact me by message or whatsapp.</p>
                    <div class="col-12 pt-ms-5 pt-3">
                        <p>Scan the code and write me!</p>
                        <img src="../images/WhatsApp QR.jpeg" alt="QR" class="img-fluid ms-4">
                    </div>
                </div>

                <div class="col-12 col-sm-6 pt-4 pt-sm-0 mb-5">
                    <form action="" method="POST">
                    <div>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Name"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <input type="email" name="txtCorreo" id="txtCorre" placeholder="E-mail"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Phone/Whatsapp"
                            class="form-control py-1.5 mb-3 shadow"> <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <textarea name=”txtMensaje” id=”txtMensaje” cols="30" rows="6"
                            placeholder="Write here your message" class="form-control py-1.5 mb-3 shadow"></textarea>
                        <!-- class de bootstrap form-control -->
                        <!-- shadow le da sombra al control contra el fondo -->
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-4 shadow">SUBMIT</button>
                        <!-- class de bootstrap btn -->
                    </div>
                    </form>
                </div>
            </div>
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