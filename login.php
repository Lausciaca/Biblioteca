
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- styles -->
    <link rel="stylesheet" href="styles/stylesLogin.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="containerPadre">
        <div class="containerFormulario">
            <form class="formularioLogin" method="POST" action="" id="formulario">
                <h3>Usuario</h3>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                    <input class="form-control" type="text" name="user" id="user" required>
                </div>
                <h3>Contraseña</h3>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
                <div class="divBoton">
                    <input class="btn btn-lg boton text-light" type="submit" id="btn" name="btn" value="Acceder">
                </div>
            </form>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id='alert'>
            <button id='buttonAlert'>X</button>
            <strong>Error!</strong><span id="spanError"></span>
        </div>
    </div>
    <?php
        include ('script/validarLogin.php');
    ?>
        
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- scripts custom -->
    <script src="script/evitarReenvio.js"></script>
    <script src="script/loginCliente.js"></script>

</body>
</html>