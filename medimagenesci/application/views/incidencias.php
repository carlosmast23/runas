<form class="form-horizontal" method="post">
    <fieldset>
        <legend class="text-center header">Incidencias</legend>

        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <input id="email" name="email" type="text" placeholder="Email " class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <label>Departamento:</label>
                <select class="form-control" id="sel1">
                    <option>ADMINISTRACION - RECURSOS HUMANOS</option>
                    <option>GERENCIA</option>
                    <option>INTERPRETACION</option>
                    <option>RESCEPCION</option>
                    <option>TOMOGRAFIA</option>
                    <option>RESONANCIA</option>
                    <option>RAYOS X 1 (SIEMEN)</option>
                    <option>RAYOS X 2 (QUAMTUM)</option>
                    <option>DENSITOMETRIA</option>
                    <option>ECOGRAFIA 1 (LOGIC S8)</option>
                    <option>ECOGRAFIA 2 (VOLUSON E8)</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <label>Asunto:</label>
                <select class="form-control" id="sel1">
                    <option>ERRORES DE CONECTIVIDAD INTERNET</option>
                    <option>ERRORES DE ACCESO AL SISTEMA</option>
                    <option>CORREO ELECTRONICO</option>
                    <option>SISTEMA DE FACTURACION</option>
                    <option>PROBLEMAS ELECTRICOS</option>
                    <option>SISTEMA DE IMPRESIÓN</option>
                    <option>PROBLEMAS DE EQUIPO DE COMPUTO</option>
                    <option>DAÑOS DE PERIFERICOS</option>
                    <option>DAÑOS DE SISTEMA ECLINIC</option>
                    <option>DAÑOS DE SISTEMA EPACS</option>
                    <option>DAÑOS DE INFRAESTRUCTURA</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <label>Urgencia:</label>
                <select class="form-control" id="sel1">
                    <option>ALTA</option>
                    <option>MEDIA</option>
                    <option>BAJA</option>
                </select>
            </div>
        </div>



        <div class="form-group">
            <div class="col-md-8 offset-md-2">
                <textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="7"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </fieldset>
</form>