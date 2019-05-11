<script src="<?php echo base_url() ?>public/js/diagnostico.js"></script>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
        <div class="form-group" id="cita">
                Seleccione la cita:
                <select>
                   
                </select>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="fecha" aria-describedby="emailHelp" placeholder="Fecha">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Descripción">
            </div>
            <div class="form-group">
                <input type="checkbox"  id="tieneGastritis" aria-describedby="emailHelp" placeholder="Telefono">Tiene Gastritis ?</input>
            </div>
            <div class="form-group" id="gradoGastritis">
                Grado de la Gastritis:
                <select>
                    <option value="Bajo">Bajo</option>
                    <option value="Medio">Medio</option>
                    <option value="Alto">Alto</option>
                </select>
            </div>            
            <div class="form-group">
                <input type="text" class="form-control" id="tratamiento" aria-describedby="emailHelp" placeholder="Tratamiento"></input>
            </div>
            

            <div class="form-group" style="text-align: center">
                <button type="button" onclick="grabarDiagnostico();" class="btn btn-primary">Grabar</button>
            </div>
        </form>
    </div>

</div>

<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th>Cita</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Gastritis</th>
            <th>Grado Gastritis</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>