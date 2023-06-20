<?php
    session_start();
    $usuario = $_SESSION['user'];
    $userid = $_SESSION['id'];
    if(empty($userid)){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>

    <!-- styles -->
    <link rel="stylesheet" href="styles/stylesIndex.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div style="height:100vh; border:1px solid">
        <!-- navbar -->
        <?php
            include('layout/navbar.php');
        ?>
        <!-- texto de saludo -->
        <h3 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h3>
        <!-- formulario -->
        <form method="POST" enctype="multipart/form-data">           
            <?php
                //formulario 
                include("layout/formulario.php");
                // botones enviar
                include('layout/botones-enviar.php');
            ?>
        </form>

    </div>
    <!-- valida los datos ingresados -->
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