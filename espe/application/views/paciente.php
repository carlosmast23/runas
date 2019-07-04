<script src="<?php echo base_url() ?>public/js/pacienteView.js"></script>


<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="codigo" aria-describedby="emailHelp" placeholder="Código">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="cedula" aria-describedby="emailHelp" placeholder="Cedula">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp" placeholder="Nombres">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp" placeholder="Apellidos">
            </div>
            <div class="form-group">
                <!--<input type="text" class="form-control" id="ocupacion" aria-describedby="emailHelp" placeholder="Ocupacion">-->
                <select id="ocupacion" class="form-control">
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="fecha" aria-describedby="emailHelp" placeholder="Fecha">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="regularidadAlimentaria">Regularidad Alimentaria</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumeAlcohol">Consume Alcohol</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumeTabaco">Consume Tabaco</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="acidezEstomacal">Tiene Acidez Estomacal</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumePsc">Consume Sustancias Psicotrópicas</input>
            </div>
            <div class="form-group">
                <h6 style="padding-top: 15px">Datos Relacionados con la Gastritis</h6>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tieneGastritis">Tiene Gastritis</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tieneArdor">Tiene Ardor</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="parienteConGastritis">Pariente con Gastritis</input>
            </div>

            <div class="form-group" style="text-align: center">
                <button type="button" onclick="grabarPaciente();" class="btn btn-primary">Grabar</button>
            </div>


        </form>
    </div>
</div>


<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Ocupacion</th>
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
                <h5 class="modal-title">Editar Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="codigoEdit" aria-describedby="emailHelp" placeholder="Código">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="cedulaEdit" aria-describedby="emailHelp" placeholder="Cedula">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombresEdit" aria-describedby="emailHelp" placeholder="Nombres">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="apellidosEdit" aria-describedby="emailHelp" placeholder="Apellidos">
                    </div>
                    <div class="form-group">
                        <!--<input type="text" class="form-control" id="ocupacionEdit" aria-describedby="emailHelp" placeholder="Ocupacion">-->
                        <select id="ocupacionEdit" class="form-control">
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" id="fechaEdit" aria-describedby="emailHelp" placeholder="Fecha">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="regularidadAlimentariaEdit">Regularidad Alimentaria</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="consumeAlcoholEdit">Consume Alcohol</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="consumeTabacoEdit">Consume Tabaco</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="acidezEstomacalEdit">Tiene Acidez Estomacal</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="consumePscEdit">Consume Sustancias Psicotrópicas</input>
                    </div>
                    <div class="form-group">
                        <h6 style="padding-top: 15px">Datos Relacionados con la Gastritis</h6>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tieneGastritisEdit">Tiene Gastritis</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tieneArdorEdit">Tiene Ardor</input>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="parienteConGastritisEdit">Pariente con Gastritis</input>
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