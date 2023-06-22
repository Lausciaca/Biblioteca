<?php
require('DB/conexion.php');
session_start();
if(isset($_POST['btn'])){
    // Chequea los campos
    if(empty($_POST['user']) || empty($_POST['password'])){
        echo '<div class="alert alert-danger alert-usuario-inexistente">Ingrese los datos</div>';
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
        echo '<div class="alert alert-danger alert-usuario-inexistente">Usuario inexistente</div>';
        exit();
    }
    $_SESSION['id'] = $datos->id;
    $_SESSION['user'] = $datos->usuario;
    header('location: index.php');
}
?>