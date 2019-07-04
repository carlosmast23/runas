
function imprimir()
{
    alert('imprimir');
}

function cargarPaciente() {
    //alert('imprimir');
    var url =construirUrl('ServidorProyectoIris/webresources/CrudPaciente/findPacienteByCI');
    $('#tabla tbody tr').remove();
    //cedulaSession

    jsonParametros=JSON.stringify({
        ciPaciente: $('#cedulaPaciente').val()
    }); 

    console.log(url);
    console.log(jsonParametros);
    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros, 
        async: false,
        success: function (json) {            
            jsonConsulta = json;
            //alert(json);
            //alert(json.ciPaciente);
            cargarDatos(
                json.codPa,
                json.ciPaciente,
                json.nombresPa,
                json.apellidosPa,
                json.ocupacionPa,
                json.fehcaGastritis,
                );

            //Process data retrieved
        }
    });
}

function cargarDatos(codigo,cedula,nombres,apellidos,ocupacion,fecha) {

    $('#codigoEdit').val(codigo);
    $('#cedulaEdit').val(cedula);
    $('#nombresEdit').val(nombres);
    $('#apellidosEdit').val(apellidos);
    $('#ocupacionEdit').val(ocupacion);
    $('#fechaEdit').val(fecha);
    //alert('cargando datos');

}

function agregarFila(codPaciente,ciPaciente,nombresPaciente,apellidoPaciente, fechaDiag, descripcionDiag, tieneGastritis,gradoGastritis,tratamiento) {

    if(tieneGastritis)
    {
        tieneGastritis="si";
    }else
    {
        tieneGastritis="no";
    }

    var htmlTags = '<tr>' +
        '<td>' + codPaciente + '</td>' +
        '<td>' + ciPaciente + '</td>' +
        '<td>' + nombresPaciente + '</td>' +
        '<td>' + apellidoPaciente + '</td>' +
        '<td>' + fechaDiag + '</td>' +
        '<td>' + descripcionDiag + '</td>' +
        '<td>' + tieneGastritis + '</td>' +
        '<td>' + gradoGastritis + '</td>' +
        '<td>' + tratamiento + '</td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}