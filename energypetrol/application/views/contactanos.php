<script>
    if('<?php echo $string ?>'==="error")
    {
        alert('ERROR: No se pudo enviar el mensaje');
    }else if('<?php echo $string ?>'==="ok")
    {
        alert('Mensaje enviado correctamente');
    }
    //alert('Mensaje Enviado Correctamente +<?php echo $string ?>+');
</script>

<div class="container ">
    <div class="row ">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="<?= base_url() ?>index.php/welcome/enviarCorreo"  >
                    <fieldset>
                        <legend class="text-center header">Contáctanos</legend>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="fname" name="nombre" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="lname" name="telefono" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <input id="email" name="email" type="text" placeholder="Email " class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 offset-md-2">
                                <textarea class="form-control" id="message" name="descripcion" placeholder="Descripción" rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>

                <p class="mb-0" style="text-align: center">
                    <a href="https://www.facebook.com/Medimagenes-EC-2374545445924116/" class="p-2"><span class="icon-facebook"></span></a>
                    <!--li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>-->
                    <a href="https://sometag.org/account/medimagenes/1050073137/followers/?hl=es" class="p-2"><span class="icon-instagram"></span></a>
                    <a href="https://api.whatsapp.com/send?phone=993107623&text=Hola%20en%20que%20te%20podemos%20ayudar%20" class="p-2"><span class="icon-whatsapp"></span></a>
                </p>

                <p class="mb-0" style="text-align: center">
                    <span class="mr-3"><strong>Tel:</strong> <a href="tel://#">59322923064</a></span>                    
                    <span><strong>Email:</strong> <a href="mailto:energypetrol@energypetrol.net">energypetrol@energypetrol.net</a></span>
                </p>

                <div style="text-align: center">EnergyPetrol Quito-Ecuador </div>

            </div>
        </div>
    </div>
</div>