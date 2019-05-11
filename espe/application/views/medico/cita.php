<script src="<?php echo base_url() ?>public/js/citasView.js"></script>

<input type="hidden" id="" />

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="date" class="form-control" id="fecha" aria-describedby="emailHelp" placeholder="Fecha">
            </div>
            <div class="form-group">
                <input type="time" class="form-control" id="hora" aria-describedby="emailHelp" placeholder="Hora">
            </div>

            <div class="form-group" id="campus">
                Seleccione el campus:
                <select>
                </select>
            </div>

            
            <div class="form-group" id="paciente">
                Seleccione el paciente:
                <select>
                </select>
            </div>

            <div class="form-group" style="text-align: center">
                <button type="button" onclick="grabarCita();" class="btn btn-primary">Grabar</button>
            </div>
        </form>
    </div>

</div>


<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>