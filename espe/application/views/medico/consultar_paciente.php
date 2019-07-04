<script src="<?php echo base_url() ?>public/js/consultarPacienteView.js"></script>

<div class="row">
    <div class="offset-md-4 col-md-4" style="text-align: center">
        <input id="cedulaPaciente" class="form-control" type="text" placeholder="Cedula del paciente" />
        <br>
        <button type="button" onclick="cargarPaciente();" class="btn btn-primary">Consultar</button>
    </div>
</div>
<br>
<form>
    <div class="form-group">
        <input disabled type="text" edi class="form-control" id="codigoEdit" aria-describedby="emailHelp" placeholder="Código">
    </div>
    <div class="form-group">
        <input disabled type="text" class="form-control" id="cedulaEdit" aria-describedby="emailHelp" placeholder="Cedula">
    </div>
    <div class="form-group">
        <input disabled type="text" class="form-control" id="nombresEdit" aria-describedby="emailHelp" placeholder="Nombres">
    </div>
    <div class="form-group">
        <input disabled type="text" class="form-control" id="apellidosEdit" aria-describedby="emailHelp" placeholder="Apellidos">
    </div>
    <div class="form-group">
        <input disabled type="text" class="form-control" id="ocupacionEdit" aria-describedby="emailHelp" placeholder="Ocupacion">
    </div>
    <div class="form-group">
        <input disabled type="date" class="form-control" id="fechaEdit" aria-describedby="emailHelp" placeholder="Fecha">
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