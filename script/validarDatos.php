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
    $validar_cantidad = limpiarDatos($_POST["cantidadLibro"]);
    $validar_autor = limpiarDatos($_POST["autorLibro"]);
    $pattern = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/";
    
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
            ?>
            <script>
                document.getElementById('tituloLibro').value="<?php echo $titulo; ?>"
            </script>
            <?php
        }

        //regla Editorial
        if(empty($validar_editorial) || !preg_match($pattern, $validar_editorial)){
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
            ?>
            <script>
                document.getElementById('editorialLibro').value="<?php echo $editorial; ?>"
            </script>
            <?php
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
            ?>
            <script>
                document.getElementById('materiaLibro').value="<?php echo $materia; ?>"
            </script>
            <?php
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
            ?>
            <script>
                document.getElementById('cantidadLibro').value="<?php echo $cantidad; ?>"
            </script>
            <?php
        }

        //regla autor
        if(empty($validar_autor) || !preg_match($pattern, $validar_autor)){
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
            ?>
            <script>
                document.getElementById('autorLibro').value="<?php echo $autor; ?>"
            </script>
            <?php
        }

        

    //Enviar a la db
        require('DB/conexion.php');
        
        if(
            // comprobar que los campos no esten vacios
            !empty($titulo) &&
            !empty($editorial) &&
            !empty($materia) &&
            !empty($cantidad) &&
            !empty($autor)
            ){
            
            // establecer peticion
            $query = "INSERT INTO `libros`(`id`, `Titulo`, `ISBN`, `Editorial`, `Materia`, `Cantidad`, `Autor`, `created_by`) 
            VALUES (null,'$titulo','$isbn','$editorial','$materia','$cantidad','$autor','$userid')";

            $resultadoConexion = mysqli_query($con, $query);
            if($resultadoConexion){
                ?>
                    <script>
                        // vaciar campos del formulario cuando se concrete la conexion
                        document.getElementById('tituloLibro').value="";
                        document.getElementById('editorialLibro').value="";
                        document.getElementById('materiaLibro').value="";
                        document.getElementById('cantidadLibro').value="";
                        document.getElementById('autorLibro').value="";
                        document.getElementById('isbnLibro').value="";
                        
                        
                        document.getElementById('alertaCorrecto').style.display = "flex";
                    </script>
                <?php
            }
        }
}
    




?>