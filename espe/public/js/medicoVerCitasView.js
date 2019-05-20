window.onload = function () {
    cargarCitas();
};


function cargarCitas()
{
    //TODO: NO TIENE IMPLEMENTADO LA FUNCION PARA CONSULTAR POR CEDULA
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCita/getCitaList';
    var url =construirUrl('ServidorProyectoIris/webresources/CrudCita/getCitaList');
    $('#tabla tbody tr').remove();

    //alert($("#cedulaUsuario").val());
    data=JSON.stringify({
        ciPaciente:$("#cedulaUsuario").val()
    });

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
                    agregarFila(item[i]['codPa'],item[i]['fechaCita'], item[i]["horaCita"]);
                }

            });
            //Process data retrieved
        }
    });
}

function agregarFila(codPa,fechaCita, horaCita) {

    var htmlTags = '<tr>' +
        '<td>' + codPa + '</td>' +
        '<td>' + fechaCita + '</td>' +
        '<td>' + horaCita + '</td>'+
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}
