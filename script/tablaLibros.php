<?php
$materiaVarURL = ucfirst(str_replace("_", " ", $_GET['materia']));
?>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>ISBN</th>
            <th>Editorial</th>
            <th>Materia</th>
            <th>Año de publicacion</th>
            <th>Volumen</th>
            <th>Cantidad</th>
            <th>Autor</th>
            <th>Idioma</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conDB = require('../DB/conexion.php');

            $peticion_db = "SELECT 
            `id`, `Titulo`, `ISBN`, `Editorial`, `Materia`, `Publicacion`, `Volumen`, `Cantidad`, `Autor`, `Idioma` 
            FROM `libros` WHERE Materia = '$materiaVarURL'";
            $resultadoConexion = mysqli_query($con, $peticion_db);

            if(!$resultadoConexion || !$conDB){
                echo "No se pudo conectar con la base de datos";
                exit;
            }
            while($row = $resultadoConexion->fetch_array()){
                $id = $row['id'];
                $titulo = $row['Titulo'];
                $isbn = $row['ISBN'];
                $editorial = $row['Editorial'];
                $materia = $row['Materia'];
                $publicacion = $row['Publicacion'];
                $volumen = $row['Volumen'];
                $cantidad = $row['Cantidad'];
                $autor = $row['Autor'];
                $idioma = $row['Idioma'];
                $direccionEliminar = "/Biblioteca/script/eliminarRegistro.php?id=$id&materia=$materia";

                ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $titulo ?></td>
                        <td><?php echo $isbn ?></td>
                        <td><?php echo $editorial ?></td>
                        <td><?php echo $materia ?></td>
                        <td><?php echo $publicacion ?></td>
                        <td><?php echo $volumen ?></td>
                        <td><?php echo $cantidad ?></td>
                        <td><?php echo $autor ?></td>
                        <td><?php echo $idioma ?></td>
                        <td>
                            <a href="">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $direccionEliminar ?>">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                <?php
            }

        ?>
    </tbody>

</table>