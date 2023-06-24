<?php
require('../DB/conexion.php');
$id = $_GET['id'];
$materia = $_GET['materia'];

$peticion_db = "DELETE FROM `libros` WHERE id=" . $id;
$resultadoConexion = mysqli_query($con, $peticion_db);

if(!$resultadoConexion || !$con){
    echo mysqli_error($con);
    exit();
}
header('Location:' . getenv('HTTP_REFERER'));
echo 'se elimino correctamente';
?>