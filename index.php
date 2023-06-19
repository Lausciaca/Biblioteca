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
        <?php $usuario = "rocio" ?>
        <h3 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h3>
        <!-- formulario -->
        <form method="POST" enctype="multipart/form-data">
             
            <?php
                include("layout/formulario.php");
            ?>


            <!-- boton enviar -->
            <div class="row justify-content-end botonesFormulario mt-3 me-3 ms-5">
                <div class="col-8 alert alert-success alert-dismissible me-auto alertaCorrecto" id="alertaCorrecto">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Datos agregados!</strong> se han enviado correctamente a la base de datos.
                </div>
                <div class="col-4 d-flex justify-content-end align-items-end me-5">
                    <button type="reset" class="btnReset btn btn-sm btn-danger h-100"><i class="bi bi-arrow-counterclockwise"></i></button>
                    <input type="submit" name='botonEnviarFormulario' value="Enviar" class="w-50 btn btn-lg btn-primary h-100">
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
    <script src="script/evitarReenvio.js"></script>

</body>
</html>