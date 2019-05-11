<script src="<?php echo base_url() ?>public/js/pacienteView.js"></script>


<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="cedula" aria-describedby="emailHelp" placeholder="Cedula" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="nombres" aria-describedby="emailHelp" placeholder="Nombres">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="apellidos" aria-describedby="emailHelp" placeholder="Apellidos">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="ocupacion" aria-describedby="emailHelp" placeholder="Ocupacion">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="regularidadAlimentaria" >Regularidad Alimentaria</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumeAlcohol" >Consume Alcohol</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumeTabaco" >Consume Tabaco</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="acidezEstomacal" >Tiene Acidez Estomacal</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="consumePsc" >Consume Psc</input>
            </div>
            <div class="form-group">
                <h6 style="padding-top: 15px">Datos Relacionados con la Gastritis</h6>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tieneGastritis" >Tiene Gastritis</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="tieneArdor" >Tiene Ardor</input>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="parienteConGastritis" >Pariente con Gastritis</input>
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
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Ocupacion</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>