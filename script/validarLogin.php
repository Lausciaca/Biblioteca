<?php
require('DB/conexion.php');
session_start();

if(!empty($_POST['user']) && !empty($_POST['password'])){
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $sql_peticion = $con->query("
        SELECT * FROM usuarios WHERE
        usuario = '$usuario' and 
        password = '$password'
    ");
    if($datos=$sql_peticion->fetch_object()){
        $_SESSION['id'] = $datos->id;
        $_SESSION['user'] = $datos->usuario;
        header('location: index.php');
    }else{
        echo '<div class="alert alert-danger alert-usuario-inexistente">Usuario inexistente</div>';
    }

}

?>