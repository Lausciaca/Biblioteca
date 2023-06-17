<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- styles -->
    <link rel="stylesheet" href="styles/stylesIndex.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
    <div style="height:100vh; border:1px solid">
        <!-- header -->
        <div class="rowHeader">
            
        </div>
        <!-- formulario -->
        <form class="row rowForm" method="POST">
            <!-- formulario texto -->
            <div class="col-9 colForm">
                <!-- h2 -->
                <div class="form-row row mx-5 mt-5">
                    <h2 class="text-center">Ficha tecnica</h2>
                </div>
                <!-- titulo e isbn -->
                <div class="form-row row mx-5 mt-5">
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo">
                    </div>
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="isbnLibro" name="isbnLibro" placeholder="ISBN">
                    </div>
                </div>
                <!-- editorial y materia -->
                <div class="form-row row mx-5 mt-3">
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="editorialLibro" name="editorialLibro" placeholder="Editorial">
                    </div>
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="materiaLibro" name="materiaLibro" placeholder="Materia">
                    </div>
                </div>
                <!-- pub, cantidad y volumen -->
                <div class="form-row row mx-5 mt-3">
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="publicacionLibro" name="publicacionLibro" placeholder="Año de publicacion">
                    </div>
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="cantidadLibro" name="cantidadLibro" placeholder="Cantidad">
                    </div>
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="volumenLibro" name="volumenLibro" placeholder="Volumen del libro">
                    </div>
                </div>
                <!-- autor e idioma -->
                <div class="form-row row mx-5 mt-3">
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Autor">
                    </div>
                    <div class="form-group col-md">
                        <input type="text" class="form-control" id="idiomaLibro" name="idiomaLibro" placeholder="Idioma">
                    </div>
                </div>
                <!-- comentarios -->
                <div class="form-row row mx-5 mt-3 form-floating">
                    <textarea class="form-control mx-auto textAreaComentarios" placeholder="Leave a comment here" id="comentarios" style="height: 200px; width:98%"></textarea>
                    <label for="comentarios" class="ms-4">Comentarios</label>
                </div>
            </div>
            <!-- formulario imagen -->
            <div class="col-3 colImg"></div>
        </form>
        <!-- footer -->
        <div class="row rowSend">
            <div class="col-9 colFree"></div>
            <!-- boton enviar -->
            <div class="col-3 colSend">
                <button type="button" class="btn btn-primary w-75 position-relative top-50 start-50 translate-middle">Enviar</button>
            </div>
        </div>
    </div>






    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>