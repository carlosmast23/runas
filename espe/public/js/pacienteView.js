window.onload = function () {
    cargarPacientes();
};

function cargarPacientes() {
    //var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudPaciente/getPacienteList';
    var url =construirUrl('ServidorProyectoIris/webresources/CrudPaciente/getPacienteList');
    
    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {

            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //item[i]['ciPaciente'];
                    agregarFila(item[i]['codPa'],item[i]['ciPaciente'], item[i]['nombresPa'], item[i]['apellidosPa'], item[i]['ocupacionPa']);
                }

            });


            //Process data retrieved
        }
    });


}


function agregarFila(codigo,cedula, nombre, apellido, ocupacion) {

    var htmlTags = '<tr>' +
        '<td>' + codigo + '</td>' +
        '<td>' + cedula + '</td>' +
        '<td>' + nombre + '</td>' +
        '<td>' + apellido + '</td>' +
        '<td>' + ocupacion + '</td>' +
        '<td><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>' +
        '</tr>';

    $('#tabla tbody').append(htmlTags);

}

function validarGrabar(cedula,nombre,apellido)
{
    if(!validarCedula(cedula))
    {
        alert('Cedula Incorrecta');
        return false;
    }

    if(nombre==="")
    {
        alert('El nombre no puede estar vacio');
        return false;
    }
    else
    {
        var expresionRegular=new RegExp("^[A-Za-zÀ-ÿ\\u00f1\\u00d1\\s.\\_\\-\\,\\ ]*$");
        if(!expresionRegular.test(nombre))
        {
            alert('Error en el formato del nombre');
            return false;
        }
    }

    if(apellido==="")
    {
        alert('El apellido no puede estar vacio');
        return false;
    }
    else
    {
        var expresionRegular=new RegExp("^[A-Za-zÀ-ÿ\\u00f1\\u00d1\\s.\\_\\-\\,\\ ]*$");
        if(!expresionRegular.test(apellido))
        {
            alert('Error en el formato del apellido');
            return false;
        }
    }

    return true;
}

function grabarPaciente() {

    //url="http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudPaciente/createPaciente";
    url=construirUrl("ServidorProyectoIris/webresources/CrudPaciente/createPaciente");

    var codigo = $('#codigo').val();
    var cedula = $('#cedula').val();
    var nombres = $('#nombres').val();
    var apellidos = $('#apellidos').val();
    var ocupacion = $('#ocupacion').val();
    var fecha = $('#fecha').val();

    //Validacion previa antes de grabar
    if(!validarGrabar(cedula,nombres,apellidos))
    {
        return ;
    }

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
        codPa:codigo,
        ciPaciente:cedula,
        nombresPa:nombres,
        apellidosPa:apellidos,
        edadPa: 25,
        ocupacionPa:ocupacion,
        regularidadAlimPa:regularidadAlimentaria,
        enferrmedadOcular: false,
        consumeAlcoholReg:regularidadconsumeAlcohollimentaria,
        consumeTabacoReg:consumeTabaco,
        tieneAcidezEstomacal:acidezEstomacal,
        consumoPsc:consumePsc,
        tieneGastritis:tieneGastritis,
        fehcaGastritis:"2019-03-13",        
        tieneArdor:tieneArdor,
        prienteConGastritis:parienteConGastritis,
    };

    jsonParametros=JSON.stringify(parametros), 
    console.log(jsonParametros);
    
    //alert(jsonParametros);

    $.ajax({
        url: url,
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        type: 'POST',
        data: jsonParametros,
        async: false,
        success: function (json) {
            alert('Paciente Guardado');
            limpiarDatos();
            cargarPacientes();
        }
    }).fail(function(xhr,textStatus,err){
        alert(err);
    });


}

function limpiarDatos()
{
    $('#codigo').val("");
    $('#cedula').val("");
    $('#nombres').val("");
    $('#apellidos').val("");
    $('#ocupacion').val("");
    //$('#fecha').val();
}

function validarCedula(cedula) 
{
    //var cad = document.getElementById("ced").value.trim();
    var cad = cedula;
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;

    if (cad !== "" && longitud === 10){
      for(i = 0; i < longcheck; i++){
        if (i%2 === 0) {
          var aux = cad.charAt(i) * 2;
          if (aux > 9) aux -= 9;
          total += aux;
        } else {
          total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
        }
      }

      total = total % 10 ? 10 - total % 10 : 0;

      if (cad.charAt(longitud-1) == total) {
        //document.getElementById("salida").innerHTML = ("Cedula Válida");
        return true;
      }else{
        //document.getElementById("salida").innerHTML = ("Cedula Inválida");
        return false;
      }
    }
  }
