<script src="<?php echo base_url() ?>public/js/procesarImagenes.js"></script>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="input" class="form-control" id="txtNombre" aria-describedby="emailHelp" value="D1" placeholder="Nombre">
            </div>

            <div class="form-group">
                <input type="input" class="form-control" id="txtFactor" aria-describedby="emailHelp" value="1" placeholder="Factor">
            </div>

            <div class="form-group">
                <input type="input" class="form-control" id="txtCodigo" aria-describedby="emailHelp" value="01" placeholder="Código">
            </div>

            <div class="form-group" style="text-align: center">
                <button type="button" onclick="consultar();" class="btn btn-primary">Consultar</button>
            </div>
        </form>
    </div>
    

</div>

<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>IdDiagnostico</th>
            <th>IdCita</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Gastritis</th>
            <th>Grado</th>
            <th>tratamiento</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>