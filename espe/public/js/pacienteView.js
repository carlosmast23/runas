window.onload = function () {
    cargarPacientes();
};

function cargarPacientes() {
    var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudPaciente/getPacienteList';

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {

            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFila(item[i]['ciPaciente'], item[i]['nombresPa'], item[i]['apellidosPa'], item[i]['ocupacionPa']);
                }

            });


            //Process data retrieved
        }
    });


}


function agregarFila(cedula, nombre, apellido, ocupacion) {

    var htmlTags = '<tr>' +
        '<td>' + cedula + '</td>' +
        '<td>' + nombre + '</td>' +
        '<td>' + apellido + '</td>' +
        '<td>' + ocupacion + '</td>' +
        '<td><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}

function grabarPaciente() {
    url="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudPaciente/createPaciente";

    var cedula = $('#cedula').val();
    var nombres = $('#nombres').val();
    var apellidos = $('#apellidos').val();
    var ocupacion = $('#ocupacion').val();
    var fecha = $('#fecha').val();

    var regularidadAlimentaria=$('#regularidadAlimentaria').is(":checked");
    var regularidadconsumeAlcohollimentaria=$('#consumeAlcohol').is(":checked");
    var consumeTabaco=$('#consumeTabaco').is(":checked");
    var acidezEstomacal=$('#acidezEstomacal').is(":checked");
    var consumePsc=$('#consumePsc').is(":checked");
    var tieneGastritis=$('#tieneGastritis').is(":checked");
    var tieneArdor=$('#tieneArdor').is(":checked");
    var parienteConGastritis=$('#parienteConGastritis').is(":checked");


    //Validacion para evitar que guarden los campos principales vacios
    if(cedula==="" || nombres==="" || apellidos==="" || ocupacion===""  )
    {
        alert('Los campo de cedula , nombres , apellidos y ocupación son requeridos');
    }

    var parametros={
        codPa:"99",
        ciPaciente:cedula,
        nombresPa:nombres,
        apellidosPa:apellidos,
        ocupacionPa:ocupacion,
        regularidadAlimPa:regularidadAlimentaria,
        consumeAlcoholReg:regularidadconsumeAlcohollimentaria,
        consumeTabacoReg:consumeTabaco,
        tieneAcidezEstomacal:acidezEstomacal,
        consumoPsc:consumePsc,
        tieneGastritis:tieneGastritis,
        fechaGastritis:fecha,
        repoPaciente:"No se para que sirve",
        tieneArdor:tieneArdor,
        parienteConGastritis:parienteConGastritis,
    };

    jsonParametros=JSON.stringify(parametros), 
    console.log(jsonParametros);
    alert(jsonParametros);

    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros,
        async: false,
        success: function (json) {
            alert('Paciente Guardado');
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });


}