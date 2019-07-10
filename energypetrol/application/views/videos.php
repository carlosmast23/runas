<div class="container-fluid pb-video-container" style="text-align:center">
    <div class="col-md-12 col-md-offset-1">
        <h3 class="text-center">Galeria de Videos</h3>

        <div class="row pb-row">
        <?php
        $contador=0; //Contador que me sirve para crear filas cada 4 items
        foreach ($consulta->result() as $fila) {
            ?>

            <?php
                if($contador%4==0)
                {
                    echo "</div>"; //Cierro la primera etiqueta
                    echo '<div class="row pb-row">'; //Abro una nueva fila para los videos
                }
                $contador++;
            ?>
            
            <div class="col-md-3 pb-video">
                <iframe class="pb-video-frame" width="100%" height="230" src="<?php echo $fila->url ?>" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-center"><?php echo $fila->titulo ?></label>
            </div>

        <?php
        }
        ?>
        </div>
    </div>
</div>

<style>
    .pb-video-container {
        padding-top: 20px;
        background: #ffffff;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

    .pb-video:hover {
        background: #2c3e50;
    }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

    .pb-video-frame:hover {
        height: 300px;
    }

    .pb-row {
        margin-bottom: 10px;
    }
</style>