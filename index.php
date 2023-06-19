<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- styles -->
    <link rel="stylesheet" href="styles/stylesIndex.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div style="height:100vh; border:1px solid">
        <!-- header -->
        <?php
            include('layout/navbar.php');
        ?>
        <h3 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h3>
        <!-- formulario -->
        <form method="POST" enctype="multipart/form-data">
             
            <?php
                include("layout/formulario.php");
            ?>


            <!-- boton enviar -->
            <div class="row botonesFormulario">
                <div class="col alertaCorrecto" id="alertaCorrecto">
                    <div class="container alert alert-success alert-dismissible ms-5s" id="alertaCorrecto">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Datos agregados!</strong> se han enviado correctamente a la base de datos.
                    </div>
                </div>
                <div class="col-6 ms-auto containerBotones mx-5">
                    <button type="reset" class="btnReset btn btn-danger miBoton"><i class="bi bi-arrow-counterclockwise"></i></button>
                    <input type="submit" name='botonEnviarFormulario' value="Enviar" class="btn btn-primary botonEnviarFormulario miBoton">
                </div>
            </div>
        </form>

    </div>
    <?php
        include('script/validarDatos.php');
    ?>


    


    
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- scripts externos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- scripts custom -->
    <script src="script/botonesResponsive.js"></script>
    <script src="script/evitarReenvio.js"></script>

</body>
</html>