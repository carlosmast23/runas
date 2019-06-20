function consultar() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/getCitaList';
    var url = construirUrl('ServidorProyectoIris/webresources/ProcesarImagen');
    $('#tabla tbody tr').remove();

    jsonParametros=JSON.stringify({
        nombre: $('#txtNombre').val(),
        factor: $('#txtFactor').val(),
        codPa: $('#txtCodigo').val()
    }); 

    alert(jsonParametros);
    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        data: jsonParametros,
        type: 'POST',
        async: false,
        success: function (json) {    
            alert('consultado');        
            jsonConsulta = json;
            
            $.each(json, function (key, item) {
                //alert('consulta');
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFila(item[i][0], item[i][1], item[i][2], item[i][3], item[i][4], item[i][5], item[i][6]);
                }

            });


            //Process data retrieved
        }
    });
}


function agregarFila(idDiagnostico,idCita, fechaDiag, descripcionDiag, tieneGastritis,gradoGastritis,tratamiento) {

    var htmlTags = '<tr>' +
        '<td>' + idDiagnostico + '</td>' +
        '<td>' + idCita + '</td>' +
        '<td>' + fechaDiag + '</td>' +
        '<td>' + descripcionDiag + '</td>' +
        '<td>' + tieneGastritis + '</td>' +       
        '<td>' + gradoGastritis + '</td>' +
        '<td>' + tratamiento + '</td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}
