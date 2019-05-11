
function login() {
    
    var usuario = $('#usuario').val();
    var clave = $('#clave').val();
    var baseUrl=$('#base_url').val();
    
    validarLogin(usuario, clave,baseUrl)

    /*if(validarLogin(usuario, clave))
    {
        alert('Bienvenido al Sistema');
        
    }
    else{
        alert('Datos incorrectos');
    }*/
}

function validarLogin(usuario, clave,baseUrl) {
    //window.location = window.location =construirUrlConParametros(baseUrl+"index.php/paciente/login",parametros);
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
                        resultado=true;
                        //alert('Bienvenido al Sistema');
                        parametros=consultarDatosUsuario(item[i]['id']['idUsuario'],item[i]['nombreUsuario']);
                        if(item[i]['idRol']==1) //Administrador
                        {
                            window.location =construirUrlConParametros(baseUrl+"index.php/admin/login",parametros);
                           
                        }else if(item[i]['idRol']==2) //User (Medico) Me imagino
                        {
                            window.location =construirUrlConParametros(baseUrl+"index.php/medico/login",parametros);
                           
                        }else if(item[i]['idRol']==3) //Paciente
                        {   
                            window.location =construirUrlConParametros(baseUrl+"index.php/paciente/login",parametros);
                            
                        }
                        
                        break;
                    }
                }

            });


            //Process data retrieved
        }
    });

    if(!resultado)
    {
        alert('Datos incorrectos');
    }

    //TODO: validacion temporal para hacer pruebas
    //resultado=true;

    //return resultado;
}

function construirUrlConParametros(url,parametros)
{
    url=url+"?"+"usuario="+parametros["usuario"]+"&&"
    +"idusuario="+parametros["idUsuario"]+"&&"
    +"cedula="+parametros["cedula"]+"&&"
    +"nombres="+parametros["nombres"]+"&&"
    +"apellidos="+parametros["apellidos"]+"&&"
    +"cargo="+parametros["cargo"]
    ;
    return url;
}

function consultarDatosUsuario(idUsuario,usuario)
{
    var url = 'http://192.188.58.34:5000/ServidorProyectoIris/webresources/CrudUsuario/getUsuarioList';
    resultado=null;
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
                    if (item[i]['idUsuario'] == idUsuario) {
                        resultado={
                            usuario:usuario,
                            idUsuario:item[i]['idUsuario'],
                            cedula:item[i]['ciUsuario'],
                            nombres:item[i]['nombreUsuario'],
                            apellidos:item[i]['apellidoUsuario'],
                            cargo:item[i]['cargoUsuario']
                        };
                        return;
                    }
                }

            });


            //Process data retrieved
        }
    });

    return resultado;
}

