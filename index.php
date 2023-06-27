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
    <div style="height:100vh; border:1px solid">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navegador w-100">
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
        </nav>

        <!-- texto de saludo -->
        <h3 class="text-center">¡Hola, <?php echo ucfirst($usuario) ?>!</h3>
        <!-- formulario -->
        <form method="POST" enctype="multipart/form-data">           
        <style>
                span{
                    color:red;
                }
            </style>
            <div class="row rowForm" >
                <!-- formulario texto -->
                <div class="col colForm">

                    <!-- h2 -->
                    <div class="form-row row mx-5 mt-1">
                        <h2 class="text-center m-0">Ficha tecnica del libro</h2>
                    </div>

                    <!-- titulo e isbn -->
                    <div class="form-row row mx-5 mt-5">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo">
                            <span id="errorSpanTitulo"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="isbnLibro" name="isbnLibro" placeholder="ISBN (opcional)">
                        </div>
                    </div>

                    <!-- editorial y materia -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="editorialLibro" name="editorialLibro" placeholder="Editorial">
                            <span id="errorSpanEditorial"></span>
                        </div>
                        <div class="form-group col-md">
                            <select name="materiaLibro" id="materiaLibro" class="form-select">
                                <option value="">Materia</option>
                                <option value="Lengua y literatura">Lengua y literatura</option>
                                <option value="Matematicas">Matematicas</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Software">Software</option>
                                <option value="Programacion">Programacion</option>
                                <option value="Geografia">Geografia</option>
                                <option value="Fisica">Fisica</option>
                                <option value="Quimica">Quimica</option>
                            </select>
                            <span id="errorSpanMateria"></span>
                        </div>
                    </div>

                    <!-- pub, cantidad y volumen -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="publicacionLibro" name="publicacionLibro" placeholder="Año de publicacion">
                            <span id="errorSpanPublicacion"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="volumenLibro" name="volumenLibro" placeholder="Volumen del libro">
                            <span id="errorSpanVolumen"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="cantidadLibro" name="cantidadLibro" placeholder="Cantidad">
                            <span id="errorSpanCantidad"></span>
                        </div>
                    </div>

                    <!-- autor e idioma -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Autor">
                            <span id="errorSpanAutor"></span>
                        </div>
                        <div class="form-group col-md">
                            <select name="idiomaLibro" id="idiomaLibro" class="form-select">
                                <option value="">Idioma</option>
                                <option value="1">Español</option>
                                <option value="2">Ingles</option>
                            </select>
                            <span id="errorSpanIdioma"></span>
                        </div>
                    </div>

                    <!-- comentarios -->
                    <div class="form-row row mx-5 mt-3 mb-5 form-floating">
                        <textarea class="form-control mx-auto textAreaComentarios" placeholder="Leave a comment here" id="comentarios" name='comentariosLibro' style="height: 200px; width:98%"></textarea>
                        <label for="comentarios" class="ms-4">Comentarios</label>
                    </div>
                </div>
            </div>

            <!-- botones enviar y resetear -->
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