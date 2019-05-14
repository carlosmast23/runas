<div class="container">
    <h1 style="text-align: center">Preguntas Frecuentes</h1>

    <div id="accordion">
        <?php
        $contador = 1;
        foreach ($consulta->result() as $fila) {
            ?>
            <div class="card text-center">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0" style="text-align: left">
                        <i class="fa fa-arrow-right" style="color: rgb(50,85,150)"></i>
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $contador ?>" aria-expanded="true" aria-controls="collapse<?php echo $contador ?>">

                            <p style="color: rgb(50,85,150);font-family: Oswald-SemiBold"><span style="color: rgb(73,208,230)"><?php echo $contador ?>.-</span><?php echo $fila->titulo ?><p>
                        </button>
                    </h5>
                </div>

                <div id="collapse<?php echo $contador++ ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <iframe class="embed-responsive-item" src="<?php echo $fila->link_video ?>" allowfullscreen></iframe>
                        <div class="card-body"></div>
                        <?php echo $fila->descripcion ?>
                    </div>
                </div>
            </div>
        <?php
    }
    ?>
    </div>
</div>