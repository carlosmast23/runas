window.onload = function () {
    cargarDiagnostico();
    cargarCitas();

};

function cargarDiagnostico() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudDiagnostico/getDiagnosticoList';
    var url =construirUrl('ServidorProyectoIris/webresources/CrudDiagnostico/getDiagnosticoList');
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
                    agregarFila(item[i]['idDiagnostico'],item[i]['idCita'], item[i]['fechaDiag'], item[i]["descripcionDiag"], item[i]["tieneGastritis"],item[i]["gradoGastritis"]);
                }

            });


            //Process data retrieved
        }
    });
}

function agregarFila(id,idCita, fechaDiag, descripcionDiag, tieneGastritis,gradoGastritis) {

    if(tieneGastritis)
    {
        tieneGastritis="si";
    }else
    {
        tieneGastritis="no";
    }

    var htmlTags = '<tr>' +
        '<td>' + idCita + '</td>' +
        '<td>' + fechaDiag + '</td>' +
        '<td>' + descripcionDiag + '</td>' +
        '<td>' + tieneGastritis + '</td>' +
        '<td>' + gradoGastritis + '</td>' +
        '<td><button type="button" onclick="eliminar(' + id + ');" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}

function eliminar(idDiagnostico)
{
    //alert(idCita);
    respuesta = confirm("Esta seguro que desea eliminar ?");
    if(respuesta==false)
    {
        return;
    }

    //urlEliminar="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudDiagnostico/deleteDiagnostico";
    urlEliminar=construirUrl("ServidorProyectoIris/webresources/CrudDiagnostico/deleteDiagnostico");


    var parametros={
        idDiagnostico:idDiagnostico
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
            alert('Diagnostico Eliminado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });

    cargarDiagnostico();
}

function grabarDiagnostico()
{
    //url="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudDiagnostico/createDiagnostico";
    url=construirUrl("ServidorProyectoIris/webresources/CrudDiagnostico/createDiagnostico");
    
    codCita=$('#cita :selected').val();
    fecha=$('#fecha').val();
    descripcion=$('#descripcion').val();
    tieneGastritis=$('#tieneGastritis').val();
    gradoGastritis=$('#gradoGastritis :selected').val();
    tratamiento=$('#tratamiento').val();

    //Convertir en el formato del json solicitado
    
    if(tieneGastritis=="on")
    {
        tieneGastritis=true;
    }
    else
    {
        tieneGastritis=false;
    }

    if(fecha==="" || descripcion==="" || tratamiento==="" )
    {
        alert('Porfavor ingrese todos los campos para continuar');
        return;
    }

    var parametros={
        idCita:codCita,
        fechaDiag:fecha,
        descripcionDiag:descripcion,
        tieneGastritis:tieneGastritis,
        gradoGastritis:gradoGastritis,
        tratamientoRecom:tratamiento
    };

    jsonParametros=JSON.stringify(parametros); 
    console.log(jsonParametros);

    
    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros,
        async: false,
        success: function (json) {
            alert('Diagnostico Guardado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });
   
    limpiarCampos();
    cargarDiagnostico();

}

function limpiarCampos()
{

    $('#descripcion').val('');
    $('#tratamiento').val('');
}


function cargarCitas() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/getCitaList';
    var url =construirUrl('ServidorProyectoIris/webresources/CrudCita/getCitaList');
    //$('#tabla tbody tr').remove();

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
                    agregarFilaCombo(item[i]['idCita']);
                }

            });


            //Process data retrieved
        }
    });
}

function agregarFilaCombo(id) {

    $('#cita select').append("<option value='" + id + "' >" + id + "</option>");
    

}