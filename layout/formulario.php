<div class="row rowForm" >
                <!-- formulario texto -->
                <div class="col-9 colForm">
                    <!-- h2 -->
                    <div class="form-row row mx-5 mt-5">
                        <h2 class="text-center m-0">Ficha tecnica</h2>
                    </div>
                    <!-- titulo e isbn -->
                    <div class="form-row row mx-5 mt-5">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo">
                        </div>
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="isbnLibro" name="isbnLibro" placeholder="ISBN (opcional)">
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
                    <div class="form-row row mx-5 mt-3 mb-5 form-floating">
                        <textarea class="form-control mx-auto textAreaComentarios" placeholder="Leave a comment here" id="comentarios" style="height: 200px; width:98%"></textarea>
                        <label for="comentarios" class="ms-4">Comentarios</label>
                    </div>
                </div>
                <!-- formulario imagen -->
                <div class="col-3 formularioImagen">
                    <div class="subirImagen">
                        <label for="inputSubirImagen">
                            <i class="bi bi-upload"></i><br>
                            <h4>Subir imagen (Portada)</h4>
                        </label>
                        <input type="file" id="inputSubirImagen" name="inputSubirImagen">
                    </div>
                </div>
            </div>