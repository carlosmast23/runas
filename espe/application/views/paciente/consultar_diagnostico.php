<script src="<?php echo base_url() ?>public/js/consultarDiagnostico.js"></script>

<div class="row">
    <div class="offset-md-4 col-md-4" style="text-align: center">
        <input id="cedulaPaciente"  class="form-control" type="text" placeholder="Cedula del paciente"/>
        <br>
        <button type="button" onclick="cargarDiagnostico();" class="btn btn-primary">Consultar</button>
    </div>
</div>
<br>

<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Gastritis</th>
            <th>Grado Gastritis</th>
            <th>Tratamiento</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>