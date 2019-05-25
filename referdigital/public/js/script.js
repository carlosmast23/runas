$(window).on('load', function () {
    //alert("iniciando");
    var mostrarDialogo=$('#mostrarDialogo').val();
    //alert(mostrarDialogo);
    if(mostrarDialogo==="si")
    {   
        $('#miModal').modal('show');
    }
});

function abrirModal($nombreModal) {
    $nombreModal='#'.$nombreModal;
        $($nombreModal).modal('show');
}