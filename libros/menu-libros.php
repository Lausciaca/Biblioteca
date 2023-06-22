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
    <!-- navegador -->
    <nav class="navbar navbar-expand-lg navegador w-100">
        <div class="container-fluid h-100 p-0 ms-3 me-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse h-100" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-itemPadre">
                    <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php">Formulario <i class="bi bi-file-earmark-medical"></i></i></a>
                    </li>
                    <li class="nav-item mx-2">
                    <a class="nav-link" href="../script/validarLogout.php">Cerrar cesion <i class="bi bi-box-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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