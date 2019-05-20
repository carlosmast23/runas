/**
 * Variables globales de configuracion del sistema
 */
var hostWebService="192.188.58.34";
var puerto="5000";

/**
 * Metodos globales de configuracion del sistema
 */
function construirUrl(urn)
{
    var uri=
    "http://"+
    hostWebService+
    ":"+
    puerto+
    "/"+
    urn;
    
    return uri;
}