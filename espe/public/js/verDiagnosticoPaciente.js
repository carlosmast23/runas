window.onload = function () {
    cargarDiagnostico();
   
};

function cargarDiagnostico() {
    var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudDiagnostico/findDiagnosticoByCI';
    $('#tabla tbody tr').remove();
    //cedulaSession
    jsonParametros=JSON.stringify({
        ciPaciente: $('#cedulaSession').val()
    }); 

    $.ajax({
        url: url,
        dataType: 'json',
        data: jsonParametros, 
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