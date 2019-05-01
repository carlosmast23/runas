$(window).on('load', function () {
    $('#miModal').modal('show');
});

function abrirModal($nombreModal) {
    $nombreModal='#'.$nombreModal;
        $($nombreModal).modal('show');
}