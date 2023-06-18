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
    $validar_titulo = limpiarDatos($_POST["tituloLibro"]);
    $isbn = limpiarDatos($_POST["isbnLibro"]);
    $validar_editorial = limpiarDatos($_POST["editorialLibro"]);
    $validar_materia = limpiarDatos($_POST["materiaLibro"]);
    $validar_publicacion = limpiarDatos($_POST["publicacionLibro"]);
    $validar_volumen = limpiarDatos($_POST["volumenLibro"]);
    $validar_cantidad = limpiarDatos($_POST["cantidadLibro"]);
    $validar_autor = limpiarDatos($_POST["autorLibro"]);
    $validar_idioma = limpiarDatos($_POST["idiomaLibro"]);
    $comentarios = limpiarDatos($_POST['comentariosLibro']);

    // declaracion variable que contiene los errores
    $error;

    //validacion de los datos
        //regla titulo
        if(empty($validar_titulo)){
            $error = 'el titulo es necesario';
            ?>
            <script>
            let span = document.getElementById('errorSpanTitulo');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $titulo = $validar_titulo;
        }

        //regla Editorial
        if(empty($validar_editorial)){
            $error = 'la editorial es necesaria';
            ?>
            <script>
            let span = document.getElementById('errorSpanEditorial');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $editorial = $validar_editorial;
        }

        //regla materia
        if(empty($validar_materia)){
            $error = 'la materia es necesaria';
            ?>
            <script>
            let span = document.getElementById('errorSpanMateria');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $materia = $validar_materia;
        }

        //regla publicacion
        if(empty($validar_publicacion) || strlen($validar_publicacion) != 4){
            $error = 'falta el año de publicacion o es invalido';
            ?>
            <script>
            let span = document.getElementById('errorSpanPublicacion');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $publicacion = $validar_publicacion;
        }

        //regla volumen
        if(empty($validar_volumen) || !is_numeric($validar_volumen) ){
            $error = 'el volumen del libro es necesario';
            ?>
            <script>
            let span = document.getElementById('errorSpanVolumen');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $volumen = $validar_volumen;
        }

        //regla cantidad
        if(empty($validar_cantidad) || !is_numeric($validar_cantidad)){
            $error = 'la cantidad de libros es necesario';
            ?>
            <script>
            let span = document.getElementById('errorSpanCantidad');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $cantidad = $validar_cantidad;
        }

        //regla autor
        if(empty($validar_autor)){
            $error = 'el autor es necesario';
            ?>
            <script>
            let span = document.getElementById('errorSpanAutor');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $autor = $validar_autor;
        }

        //regla idioma
        if(empty($validar_idioma)){
            $error = 'el idioma es necesario';
            ?>
            <script>
            let span = document.getElementById('errorSpanIdioma');
            span.innerHTML = "<?php echo '*' . ucfirst($error);?>";
            span.style.margin = "0 0 0 5px";
            </script>
            <?php
        }else{
            $idioma = $validar_idioma;
        }

    //Enviar a la db
     

}



?>