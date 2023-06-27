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
<body>
    <div class="containerGeneral">
        <!-- navbar -->
        <nav class="navegador">
            <div class="navegadorDiv">
                <div class="navegadorDivL"></div>
                <div class="navegadorDivR">
                    <h2>Buscar por materia</h2>
                    <div class="navegadorDivRBtn ms-auto">
                        <a class="nav-link" href="../index.php"><i class="bi bi-file-earmark-text"></i></a>
                        <a class="nav-link" href="../script/validarLogout.php"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="containerBotones">
            <a href="lengua.php?lengua_y_literatura" class="botonLink">Lengua y literatura</a>
            <a href="" class="botonLink">Matematica</a>
            <a href="" class="botonLink">Geografia</a>
            <a href="" class="botonLink">Biologia</a>
            <a href="" class="botonLink">Hardware</a>
            <a href="" class="botonLink">Software</a>
            <a href="" class="botonLink">Historia</a>
            <a href="" class="botonLink">Programacion</a>
            <a href="" class="botonLink">Gestion</a>
            <a href="" class="botonLink">FEyC</a>
            <a href="" class="botonLink">Fisica</a>
            <a href="" class="botonLink">Quimica</a>
        </div>
        

    </div>



    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- scripts externos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>