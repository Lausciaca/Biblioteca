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
    <title> </title>

    <!-- styles -->
    <link rel="stylesheet" href="styles/stylesIndex.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="containerGeneral">
        <!-- navbar -->
        <!-- <nav class="navbar navbar-expand-lg navegador w-100">
            <div class="container-fluid h-100 p-0 ms-3 me-3">
                <a class="navbar-brand" href="http://eetp669.edu.ar/">
                    <img src="images/logo-escuela.jpg" alt="logo" width="50px">
                    <i class="bi bi-arrow-left"></i>Volver
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse h-100" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 nav-itemPadre">
                        <li class="nav-item mx-2">
                        <a class="nav-link" href="libros/menu-libros.php">Base de datos <i class="bi bi-database"></i></a>
                        </li>
                        <li class="nav-item mx-2">
                        <a class="nav-link" href="script/validarLogout.php">Cerrar cesion <i class="bi bi-box-arrow-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <nav class="navegador">
            <div class="navegadorDiv">
                <div class="navegadorDivL"></div>
                <div class="navegadorDivR">
                    <h2>Registrar libro</h2>
                    <div class="navegadorDivRBtn ms-auto">
                        <a class="nav-link" href="libros/menu-libros.php"><i class="bi bi-database"></i></a>
                        <a class="nav-link" href="script/validarLogout.php"><i class="bi bi-box-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="containerForm">
            <!-- texto de saludo -->
            <h2 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h2>

            <!--
                <div class="col alertaCorrecto" id="alertaCorrecto">
                    <div class="container alert alert-success alert-dismissible ms-5s" id="alertaCorrecto">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Datos agregados!</strong> se han enviado correctamente a la base de datos.
                    </div>
                </div>
            -->
        <form method="POST">
            <div class="row row1">
                <div class="form-group">
                    <label for="tituloLibro"><h3>Titulo</h3></label>
                    <input type="text" class="form-control" id="tituloLibro" name="tituloLibro">
                </div>
                <div class="form-group">
                    <label for="editorialLibro"><h3>Editorial</h3></label>
                    <input type="text" class="form-control" id="editorialLibro" name="editorialLibro">
                </div>
            </div>
            <div class="row row2">
                <div class="form-group">
                    <label for="materiaLibro"><h3>Materia</h3></label>
                    <select name="materiaLibro" id="materiaLibro" class="form-select">
                        <option value=""></option>
                        <option value="Lengua y literatura">Lengua y literatura</option>
                        <option value="Matematicas">Matematicas</option>
                        <option value="Hardware">Hardware</option>
                        <option value="Software">Software</option>
                        <option value="Programacion">Programacion</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Fisica">Fisica</option>
                        <option value="Quimica">Quimica</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="autorLibro"><h3>Autor</h3></label>
                    <input type="text" class="form-control" id="autorLibro" name="autorLibro">
                </div>
                <div class="form-group">
                    <label for="cantidadlLibro"><h3>Cantidad</h3></label>
                    <input type="number" min=0 class="form-control" id="cantidadLibro" name="cantidadLibro">
                </div>
            </div>
            <div class="row row3">
                <div class="form-group">
                    <label for="isbnLibro"><h3>ISBN</h3></label>
                    <input type="text" class="form-control" id="isbnLibro" name="isbnLibro">
                </div>
            </div>
            <div class="row row4">
                <button type="submit" name='botonEnviarFormulario' class="botonEnviarFormulario col-2"><h3>Enviar</h3></button>
            </div>
        </form>


    </div>



    </div>
    <!-- valida los datos ingresados -->
    <?php
        include('script/validarDatos.php');
    ?>

    <script>
        if (window.screen.width < 1270) {
            let alerta = document.getElementById("alertaCorrecto");
            alerta.remove();
        }
    </script>

    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- scripts externos -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- scripts custom -->
    <script src="script/evitarReenvio.js"></script>

</body>
</html>