
function login() {
    //alert('ejemplo');
    var usuario = $('#usuario').val();
    var clave = $('#clave').val();

    //validarLogin(usuario, clave);
    
    if(validarLogin(usuario, clave))
    {
        alert('Bienvenido al Sistema');
        window.location = "http://www.google.com";
    }
    else{
        alert('Datos incorrectos');
    }
}

function validarLogin(usuario, clave) {
    var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudCuenta/getCuentaList';
    var resultado=false;

    $.ajax({
        url: url,
        dataType: 'json',
        //data: data, 
        async: false,
        success: function (json) {

            $.each(json, function (key, item) {
                for (let i = 0; i < item.length; i++) {
                    //alert(item[i]['nombreUsuario']+"="+usuario);
                    //alert(item[i]['contrasena']+"="+clave);
                    if (item[i]['nombreUsuario'] == usuario && item[i]['contrasena'] == clave) {
                        resultado= true;
                        break;
                    }
                }

            });


            //Process data retrieved
        }
    });

    return resultado;



}

