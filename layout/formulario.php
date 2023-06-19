<style>
    span{
        color:red;
    }
</style>
<div class="row rowForm" >
                <!-- formulario texto -->
                <div class="col colForm">
                    <!-- h2 -->
                    <div class="form-row row mx-5 mt-1">
                        <h2 class="text-center m-0">Ficha tecnica del libro</h2>
                    </div>
                    <!-- titulo e isbn -->
                    <div class="form-row row mx-5 mt-5">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="tituloLibro" name="tituloLibro" placeholder="Titulo">
                            <span id="errorSpanTitulo"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="isbnLibro" name="isbnLibro" placeholder="ISBN (opcional)">
                        </div>
                    </div>

                    <!-- editorial y materia -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="editorialLibro" name="editorialLibro" placeholder="Editorial">
                            <span id="errorSpanEditorial"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="materiaLibro" name="materiaLibro" placeholder="Materia">
                            <span id="errorSpanMateria"></span>
                        </div>
                    </div>
                    <!-- pub, cantidad y volumen -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="publicacionLibro" name="publicacionLibro" placeholder="Año de publicacion">
                            <span id="errorSpanPublicacion"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="volumenLibro" name="volumenLibro" placeholder="Volumen del libro">
                            <span id="errorSpanVolumen"></span>
                        </div>
                        <div class="form-group col-md">
                            <input type="number" min=0 class="form-control" id="cantidadLibro" name="cantidadLibro" placeholder="Cantidad">
                            <span id="errorSpanCantidad"></span>
                        </div>
                    </div>
                    <!-- autor e idioma -->
                    <div class="form-row row mx-5 mt-3">
                        <div class="form-group col-md">
                            <input type="text" class="form-control" id="autorLibro" name="autorLibro" placeholder="Autor">
                            <span id="errorSpanAutor"></span>
                        </div>
                        <div class="form-group col-md">
                            <select name="idiomaLibro" id="idiomaLibro" class="form-select">
                                <option value="">Idioma</option>
                                <option value="1">Español</option>
                                <option value="2">Ingles</option>
                            </select>
                            <span id="errorSpanIdioma"></span>
                        </div>
                    </div>
                    <!-- comentarios -->
                    <div class="form-row row mx-5 mt-3 mb-5 form-floating">
                        <textarea class="form-control mx-auto textAreaComentarios" placeholder="Leave a comment here" id="comentarios" name='comentariosLibro' style="height: 200px; width:98%"></textarea>
                        <label for="comentarios" class="ms-4">Comentarios</label>
                    </div>
                </div>
            </div>