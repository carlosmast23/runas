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

function formatDate(fecha)
{
    var anio=fecha.getFullYear();
    var mes=fecha.getMonth()+1;
    var dia=fecha.getDay();
    //alert((mes+"").length);
    if((mes+"").length==1)
    {
        mes="0"+mes;
    }
    
    if((dia+"").length==1)
    {
        dia="0"+dia;
    }

    var fechaFormato=anio+"-"+mes+"-"+dia;
    return fechaFormato;
}

function formatDate2(fecha)
{
    var anio=fecha.getFullYear();
    var mes=fecha.getMonth();
    var dia=fecha.getDay();
    //alert((mes+"").length);
    if((mes+"").length==1)
    {
        mes="0"+mes;
    }
    
    if((dia+"").length==1)
    {
        dia="0"+dia;
    }

    var fechaFormato=dia+"-"+mes+"-"+anio;
    return fechaFormato;
}

function obtenerFechaActualSinTiempo()
{
    var today = new Date();
    //today.setMonth(today.getMonth+1);
    var d=new Date(today.getFullYear(),today.getMonth(),today.getDay(),0,0,0,0);
    //d.setHours(0,0,0,0); 
    return d;
}