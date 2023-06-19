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
    <div style="height:100vh; border:1px solid" class="divPadre">
        <?php
            include('layout/navbar-login.php');
        ?>  

        <div class="container containerAcceso">
            <form action="" class="formularioLogin" method="POST">
                <div class="row">
                    <h2>Acceso</h2>
                </div>
                <div class="row">
                    <div class="input-group mb-3 mt-4">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Usuario" name="user" aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" aria-describedby="basic-addon1" required>
                    </div>
                </div>
                <div class="row">
                    <input class="btn btn-primary" type="submit" value="Acceder">
                </div>
                
            </form>
            <?php
                include('script/validarLogin.php');
            ?>
        </div>
            
    </div>
        


    <!-- scripts custom -->
    <script src="script/evitarReenvio.js"></script>

</body>
</html>