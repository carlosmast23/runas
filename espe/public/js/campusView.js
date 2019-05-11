//Almacenar consultas del json con los datos
jsonConsulta=null;
//Variable para mantener el id del dato que estoy editando
idCampusEditando=null;

window.onload = function () {
    cargarCampus();
};

function cargarCampus() {
    var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCampus/getCampusList';
    $('#tabla tbody tr').remove();

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {
            jsonConsulta=json;
            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFila(item[i]['idCampus'],item[i]['nombreCampus'], item[i]["dirCampus"], item[i]["telCampus"]);
                }

            });


            //Process data retrieved
        }
    });
}

function agregarFila(id,nombre, direccion, telefono) {

    var htmlTags = '<tr>' +
        '<td>' + nombre + '</td>' +
        '<td>' + direccion + '</td>' +
        '<td>' + telefono + '</td>' +
        '<td><button type="button" onclick="abrirModalEditar('+id+');" class="btn btn-primary"><i class="fa fa-pencil"></i></button></td>' +
        '<td><button type="button" onclick="eliminar('+id+');" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}

function editarCampus()
{
    url="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCampus/updateCampus";
    nombre=$('#nombreEdit').val();
    direccion=$('#direccionEdit').val();
    telefono=$('#telefonoEdit').val();

    if(nombre==="" || direccion==="" || telefono==="" )
    {
        alert('Porfavor ingrese todos los campos para continuar');
        return;
    }

    var parametros={
        idCampus:idCampusEditando,
        nombreCampus:nombre,
        dirCampus:direccion,
        telCampus:telefono
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
            alert('Campus Editado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });
   
    $('#modal').modal('hide');
    limpiarCampos();
    cargarCampus();
   
}


function grabarCampus()
{
    url="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCampus/createCampus";
    
    nombre=$('#nombre').val();
    direccion=$('#direccion').val();
    telefono=$('#telefono').val();

    if(nombre==="" || direccion==="" || telefono==="" )
    {
        alert('Porfavor ingrese todos los campos para continuar');
        return;
    }

    var parametros={
        nombreCampus:nombre,
        dirCampus:direccion,
        telCampus:telefono
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
            alert('Campus Guardado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });
   
    limpiarCampos();
    cargarCampus();

}

function limpiarCampos()
{
    $('#nombre').val('');
    $('#direccion').val('');
    $('#telefono').val('');
}

function eliminar(idCampus)
{
    respuesta = confirm("Esta seguro que desea eliminar ?");
    if(respuesta==false)
    {
        return;
    }

    urlEliminar="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCampus/deleteCampus";

    var parametros={
        idCampus:idCampus
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

    cargarCampus();
}


function abrirModalEditar(idCampus) {

    //alert(sumar(2,3));
    campus=consularCampusPorId(idCampus);
    //alert(campus);
    idCampusEditando=idCampus;
    $('#nombreEdit').val(campus['nombreCampus']);
    $('#direccionEdit').val(campus['dirCampus']);
    $('#telefonoEdit').val(campus['telCampus']);

    $('#modal').modal('show');


}

function consularCampusPorId(idCampus)
{
    resultado=null;
    $.each(jsonConsulta, function (key, item) {
        for (let i = 0; i < item.length; i++) {
            //item[i]['ciPaciente'];            
            if(item[i]['idCampus']==idCampus)
            {
                resultado=item[i];
                //return 5;
            }            
        }

    });
    return resultado;
}

