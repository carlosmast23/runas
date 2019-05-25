<input id="mostrarDialogo" type="hidden" value="<?php echo $mostrarDialogo; ?>" />
<div class="titulo_general">
    <h1 style="text-align: center;font-size:50px">#Refiere<spam style="font-size: 35px">Y</spam>Gana</h1>
</div>

<div id="imagen_principal">
    <div class="row">
        <div class="col-lg-6">

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
            <div style="font-family: Oswald-Light;font-size: 26px;margin-top: 20vw;margin-bottom: 5%">
                <ul style="text-align: justify;padding-right: 30px">
                    <li style="padding-bottom: 15px;">Inscribe negocios a REFER y gana.</li>
                    <li style="padding-bottom: 15px;">Crea un código QR único que integras a tus fotos y vídeos cuando compras en un establecimiento.</li>
                    <li style="padding-bottom: 15px;">Cada código tiene una promoción que puede ser redimida en el establecimiento que se está refiriendo al hacer una compra.</li>
                    <li style="padding-bottom: 15px;">Entre más negocios inscribas, más ganas.</li>
                </ul>
            </div>

            <h1 style="text-align: center;padding: 20px;font-family: Oswald-Medium;">Descarga Refer Gratis</h1>
            <div class="pie_pagina_redes_sociales" style="text-align: center;margin-bottom: 10vw">
                <a href="."><img src="<?= base_url() ?>public/img/iconos/app_store.png"></img></a>
                <a href="."><img src="<?= base_url() ?>public/img/iconos/google_play.png"></img></a>
            </div>
        </div>
    </div>
</div>

<!-- SECCION DE DESCRIPCION-->
<div class="row" style="margin: 20px;text-align: center;font-size: 18px">
    <div class="col-lg-3">
        <img src="<?= base_url() ?>public/img/iconos_medianos/circulo1.png"></img>
        <h2 style="text-align: center;font-family:Oswald-Medium">Negocio</h2>
        <ul style="text-align: left;">
            <li>Crea diferentes promociones. Las que tu quieras.</li>
            <li>Un microinfluencer creará un código QR único que compartirá en sus redes sociales.</li>
            <li>Las personas que visiten tu negocio mostrando ese código QR disfrutará de las promociones.</li>
            <li>Una nueva manera de saber de dónde llegan tus clientes.</li>
            <li>Ganas tú, gana quien te recomendó, ganan todos.</li>
        </ul>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
        <img src="<?= base_url() ?>public/img/iconos_medianos/circulo2.png"></img>
        <h2 style="text-align: center;font-family:Oswald-Medium">MicroInfluencer</h2>
        <ul style="text-align: left;">
            <li>Afíliate y crea tu código QR por cada lugar que recomiendes.</li>
            <li>Compártelo con tus amigos y por cada código escaneado acumulas dinero en tu wallet.</li>
        </ul>

    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
        <img src="<?= base_url() ?>public/img/iconos_medianos/circulo3.png"></img>
        <h2 style="text-align: center;font-family:Oswald-Medium">Embajador</h2>
        <ul style="text-align: left;">
            <li>Inscribe negocios a REFER y gana.</li>
            <li>Crea un código QR único que integras a tus fotos y vídeos cuando compras en un establecimiento.</li>
            <li>Cada código tiene una promoción que puede ser redimida en el establecimiento que se está refiriendo al hacer una compra.</li>
            <li>Entre más negocios inscribas, más ganas.</li>
        </ul>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
        <img src="<?= base_url() ?>public/img/iconos_medianos/circulo4.png"></img>
        <h2 style="text-align: center;font-family:Oswald-Medium">Usuario</h2>
        <ul style="text-align: left;">
            <li>Disfruta los diferentes beneficios de los lugares que te recomienden enseñando el código QR.</li>
            <li>Comparte cada código QR en tus redes sociales con fotos o vídeos y disfruta acumular dinero en tu wallet.</li>
            <li>Descarga, recomienda y gana.</li>
        </ul>
    </div><!-- /.col-lg-4 -->
</div><!-- /.row -->
<!-- FIN SECCION DE DESCRIPCION-->



<!-- SECCION PREGUNTAS FRECUENTES-->
<hr class="featurette-divider">


<div class="row featurette" style="margin: 30px">
    <div class="col-md-7">
        <h1 class="featurette-heading" style="margin-bottom: 80px;font-family: Oswald-Medium;">Preguntas Frecuentes
        </h1>
        <?php
        $contador = 0;
        foreach ($consulta->result() as $fila) {
            if ($contador++ == 6) {
                break;
            }
            ?>

            <a href="<?= base_url() ?>index.php/welcome/preguntas">
                <p class="lead"><?php echo $fila->titulo ?></p>
            </a>

        <?php
    }
    ?>

    </div>
    <div class="col-md-5">
        <div>
            <div class="embed-responsive embed-responsive-16by9" style="border-radius:50px;margin-top: 100px;-webkit-box-shadow: 11px 11px 22px -5px rgba(0,0,0,0.75);
                -moz-box-shadow: 11px 11px 22px -5px rgba(0,0,0,0.75);
                box-shadow: 11px 11px 22px -5px rgba(0,0,0,0.75);">
                <video width="320" height="240" controls>
                    <source src="<?= base_url() ?>public/video/publicidad.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F38ncihGdRw?rel=0" allowfullscreen></iframe>-->
            </div>
        </div>

        <div style="text-align: right">
            <a href="."><img src="<?= base_url() ?>public/img/iconos_medianos/chat.png" width="50%" style="margin-top: 40px"></div></a>
    </div>
</div>
</div>
<!-- SECCION PREGUNTAS FRECUENTES FIN-->



<!-- 
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
        Abrir modal
    </button>
    <input type="button" onclick="imprimir();" value="ejemplo" />-->

<!-- MODEL DEL FORMULARIO -->
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <h1 style="text-align: center">Refer</h1>
                <h3 style="text-align: center;padding: 5px;font-family: Oswald-Medium;">Descarga Refer Gratis</h3>
                <div class="pie_pagina_redes_sociales" style="text-align: center;margin-bottom:5px">
                    <a href="."><img src="<?= base_url() ?>public/img/iconos/app_store.png"></img></a>
                    <a href="."><img src="<?= base_url() ?>public/img/iconos/google_play.png"></img></a>
                </div>

                <div style="margin-left: 10%;margin-right: 10%;border-width: 1px;border-style: solid;border-color:rgb(222,226,230);" ></div>

                <h2 id="titulo_modal" style="font-family: Oswald-Light;text-align: center;margin-bottom:20px;margin-top:20px;font-size: 25px;padding-left:100px;padding-right:100px;">Quieres registrar tu negocio en Refer?</h2>

                <form style="padding-left: 80px;padding-right: 80px">
                    <div class="form-group">
                        <input type="email" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre Empresa">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teléfono">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div class="form-group text-xs-center">
                        <div style="text-align: center" class="g-recaptcha " data-sitekey="6Ld_up0UAAAAAC9Mf-VMI7oetZnWFBwU4qUk_Exq"></div>
                    </div>

                    <div class="form-group" style="text-align: center; padding-bottom: 35px;">
                        <button type="button" style="width: 100px;" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal">
                            Enviar
                        </button>
                    </div>

                </form>
                <div>
                    <img style="position: absolute;bottom:0px" src="<?= base_url() ?>public/img/logo/logo_recortado.png" >
                </div>
                
            </div>
        </div>
    </div>
</div>