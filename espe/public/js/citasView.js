window.onload = function () {
    cargarCitas();
    cargarCampus();
    cargarPacientes();
    setearDatosDefecto();
};


function setearDatosDefecto()
{
    var today = obtenerFechaActualSinTiempo();
    //today.setMonth(today.getMonth+1);
    var fechaFormato=formatDate(today);
    //alert(fechaFormato);
    $('#fecha').val(fechaFormato);
    
}

function cargarCitas() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/getCitaList';
    var url = construirUrl('ServidorProyectoIris/webresources/CrudCita/getCitaList');
    $('#tabla tbody tr').remove();

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {            
            jsonConsulta = json;
            
            $.each(json, function (key, item) {
                //alert('consulta');
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFila(item[i]['codPa'], item[i]['fechaCita'], item[i]["horaCita"], item[i]["idCita"]);
                }

            });


            //Process data retrieved
        }
    });
}

function cargarCampus() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCampus/getCampusList';
    var url = construirUrl('ServidorProyectoIris/webresources/CrudCampus/getCampusList');
    //$('#tabla tbody tr').remove();

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {
            jsonConsulta = json;
            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFilaComboCampus(item[i]['idCampus'], item[i]['nombreCampus']);
                }

            });


            //Process data retrieved
        }
    });
}

function cargarPacientes() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudPaciente/getPacienteList';
    var url = construirUrl('ServidorProyectoIris/webresources/CrudPaciente/getPacienteList');

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {

            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFilaPaciente(item[i]['codPa'], item[i]['nombresPa'], item[i]['apellidosPa']);
                }

            });


            //Process data retrieved
        }
    });
}

function agregarFilaPaciente(codPaciente, nombres,apellidos) {
    $('#paciente select').append("<option value='" + codPaciente + "' >" + apellidos+" " +nombres+ "</option>");
}

function agregarFilaComboCampus(idCampus, nombreCampus) {
    $('#campus select').append("<option value='" + idCampus + "' >" + nombreCampus + "</option>");
}

function agregarFila(codPa, fechaCita, horaCita, id) {

    var htmlTags = '<tr>' +
        '<td>' + codPa + '</td>' +
        '<td>' + fechaCita + '</td>' +
        '<td>' + horaCita + '</td>' +
        '<td><button type="button" onclick="eliminar(' + id + ');" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}

function eliminar(idCita)
{
    //alert(idCita);
    respuesta = confirm("Esta seguro que desea eliminar ?");
    if(respuesta==false)
    {
        return;
    }

    //urlEliminar="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/deleteCita";
    urlEliminar=construirUrl("ServidorProyectoIris/webresources/CrudCita/deleteCita");

    var parametros={
        idCita:idCita
    };

    jsonParametros=JSON.stringify(parametros), 

    $.ajax({
        url: urlEliminar,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros,
        async: false,
        success: function (json) {
            alert('Campus Eliminado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });

    cargarCitas();
}

function grabarCita() {
    if(!confirm('Esta seguro que quiere grabar el registro ?'))
    {
        return false;
    }

    //url = "http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/createCita";
    url =construirUrl("ServidorProyectoIris/webresources/CrudCita/createCita");

    fecha = $('#fecha').val();
    hora = $('#hora').val();
    campus=$("#campus :selected").val();
    paciente=$("#paciente :selected").val();

    if (fecha === "" || hora === "" || campus === "") {
        alert('Porfavor ingrese todos los campos para continuar');
        return;
    }

    var parts =fecha.split('-');

    var fechaActual=obtenerFechaActualSinTiempo();
    //alert(fecha.replace('-','/').replace('-','/'));
    //alert(parts[0]);
    //alert(parts[1]-1);
    //alert(parts[2]);

    var fechaGrabar=new Date(parts[0], parts[1] - 1, parts[2],0,0,0,0);

    //alert(fechaActual+"->"+fechaGrabar);

    if(fechaGrabar<fechaActual)
    {
        alert("La fecha de la cita no puede ser inferior a la fecha actual");
        return ;
    }


    var parametros = {
        fechaCita: fecha,
        horaCita: hora,
        idCampus: campus,
        codPa: paciente
    };

    jsonParametros = JSON.stringify(parametros);
    console.log(jsonParametros);


    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros,
        async: false,
        success: function (json) {
            alert('Cita Guardada');
        }
    }).fail(function (xhr, textStatus, err) {
        alert(err);
    });

    limpiarCampos();
    cargarCitas();
    
}

function limpiarCampos()
{
    fecha = $('#fecha').val('');
    hora = $('#hora').val('');
    setearDatosDefecto();

}