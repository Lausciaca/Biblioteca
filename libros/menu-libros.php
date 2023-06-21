<?php
    session_start();
    $usuario = $_SESSION['user'];
    $userid = $_SESSION['id'];
    if(empty($userid)){
        header('location: /Biblioteca/login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- styles -->
    <link rel="stylesheet" href="../styles/stylesMenuLibros.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <?php
        include('../layout/navbar-libro.php');
    ?>    
    <!-- texto de saludo -->
    <h3 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h3>
    <div class='container m-5 mt-0 mx-auto' >
        <div class="col">
            <div class="row">
                <h2 class="titulo">BUSCAR POR MATERIA</h2>
            </div>
            <div class="containerHijo">
                <a class="seccion lengua" href="lengua.php">
                    Lengua y literatura
                </a>
                <a class="seccion matematica" href="matematicas.php">
                    Matematicas
                </a>
                <a class="seccion hardware" href="hardware.php">
                    Hardware
                </a>
                <a class="seccion software" href="software.php">
                    Software
                </a>
                <a class="seccion programacion" href="programacion.php">
                    Programacion
                </a>
                <a class="seccion geografia" href="geografia.php">
                    Geografia
                </a>
                <a class="seccion fisica" href="fisica.php">
                    Fisica
                </a>
                <a class="seccion quimica" href="quimica.php">
                    Quimica
                </a>
            </div>
        </div>

        
    </div>
    


    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- scripts externos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>