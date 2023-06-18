<?php
/*Esta funcion se encarga de sacar espacios, barras y caracteres 
peligrosos a los datos ingresados en el formulario*/
function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

if(isset($_POST['botonEnviarFormulario']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    // se declaran las variables
    $titulo = limpiarDatos($_POST["tituloLibro"]);
    $isbn = limpiarDatos($_POST["isbnLibro"]);
    $editorial = limpiarDatos($_POST["editorialLibro"]);
    $materia = limpiarDatos($_POST["materiaLibro"]);
    $publicacion = limpiarDatos($_POST["publicacionLibro"]);
    $volumen = limpiarDatos($_POST["volumenLibro"]);
    $cantidad = limpiarDatos($_POST["cantidadLibro"]);
    $autor = limpiarDatos($_POST["autorLibro"]);
    $idioma = limpiarDatos($_POST["idiomaLibro"]);
    $comentarios = limpiarDatos($_POST['comentariosLibro']);

    // declaracion variable que contiene los errores
    $errores;

    //validacion de los datos
    if(empty($titulo)){
        $errores[1] = 'el titulo es necesario';
    }
    if(empty($editorial)){
        $errores[2] = 'la editorial es necesaria';
    }
    if(empty($materia)){
        $errores[3] = 'la materia es necesaria';
    }
    if(empty($publicacion) || strlen($publicacion) != 4){
        $errores[4] = 'falta el año de publicacion o es invalido';
    }
    if(empty($volumen) || !is_numeric($volumen) ){
        $errores[5] = 'el volumen del libro es necesario';
    }
    if(empty($cantidad) || !is_numeric($volumen)){
        $errores[6] = 'la cantidad de libros es necesario';
    }
    if(empty($autor)){
        $errores[7] = 'el autor es necesario';
    }
    if(empty($idioma)){
        $errores[8] = 'el idioma es necesario';
    }




    // mostrar errores
    if(isset($errores)){
        foreach($errores as $error){
            echo $error;
        }
    }
}


?>