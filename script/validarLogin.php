<?php
require('DB/conexion.php');
session_start();
if(isset($_POST['btn'])){
    // Chequea los campos
    if(empty($_POST['user']) || empty($_POST['password'])){
        echo '';
        exit();
    }
    // define variables
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $sql_peticion = $con->query("
    SELECT * FROM usuarios WHERE
    usuario = '$usuario' and 
    password = '$password'");

    // comprueba los datos
    if(!$datos=$sql_peticion->fetch_object()){
        ?>
        <script>
            const spanError = document.getElementById('spanError');
            const alertError = document.getElementById('alert');
            const buttonAlert = document.getElementById('buttonAlert');
            spanError.innerHTML = ' Usuario inexistente';
            alertError.style.display = 'inline';
            buttonAlert.addEventListener('click', function () {
                alertError.style.display = 'none';
            })
        </script>
        <?php
    }else{
        $_SESSION['id'] = $datos->id;
        $_SESSION['user'] = $datos->usuario;
        header('location: index.php');
    }
}else{
    return 'MAL';
}
?>