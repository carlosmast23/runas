
function cargarDiagnostico() {
    var url =construirUrl('ServidorProyectoIris/webresources/CrudDiagnostico/findDiagnosticoByCI');
    $('#tabla tbody tr').remove();
    //cedulaSession

    jsonParametros=JSON.stringify({
        ciPaciente: $('#cedulaPaciente').val()
    }); 


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
            
            $.each(json, function (key, item) {
                if(key==='error')
                {
                    alert(item);
                }
                else
                {                                   
                    for (let i = 0; i < item.length; i++) {
                        //item[i]['ciPaciente'];
                        agregarFila(item[i]['codPa'],item[i]['ciPaciente'],item[i]['nombresPa'],item[i]['apellidosPa'],item[i]['fechaDiag'], item[i]["descripcionDiag"], item[i]["tieneGastritis"],item[i]["gradoGastritis"],item[i]["tratamientoRecom"]);
                    }
                }

            });


            //Process data retrieved
        }
    });
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