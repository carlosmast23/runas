<script src="<?php echo base_url() ?>public/js/campusView.js"></script>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="direccion" aria-describedby="emailHelp" placeholder="Direccion">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="telefono" aria-describedby="emailHelp" placeholder="Telefono">
            </div>


            <div class="form-group" style="text-align: center">
                <button type="button" onclick="grabarCampus();" class="btn btn-primary">Grabar</button>
            </div>
        </form>
    </div>

</div>

<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>




<div id="modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Campus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombreEdit" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="direccionEdit" aria-describedby="emailHelp" placeholder="Direccion">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefonoEdit" aria-describedby="emailHelp" placeholder="Telefono">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="editarCampus()">Grabar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>