
<div class="container ">

    
<div style="text-align: center">
    <img style="merge:0 auto" align="middle" src="<?= $imagen ?>" alt=<?= $titulo ?> >
</div>
<h1 style="text-align: center"><?= $titulo ?></h1>
<div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <?= $subtitulo1 ?>
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <?= $contenido ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <?= $subtitulo2 ?>
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <?= $contenido2 ?>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <?= $subtitulo3 ?>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                    <?= $contenido3 ?> 
            </div>
          </div>
        </div>
      </div>
      <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <?= $subtitulo4 ?>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                    <?= $contenido4 ?>
              </div>
            </div>
          </div>
        </div>

<div class="row " style="margin-top: 50px" >
    <div class="col-md-12">
        <div class="well well-sm">
            <form class="form-horizontal" method="post">
                <fieldset>
                    <legend class="text-center header">Agendar Cita</legend>

                    <div class="form-group">
                        <div class="col-md-4 offset-md-4">
                            <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 offset-md-4">
                            <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 offset-md-4">
                            <input id="email" name="email" type="text" placeholder="Telefono " class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="col-md-4 offset-md-4">
                                <input id="email" name="email" type="text" placeholder="Email " class="form-control">
                            </div>
                    </div>

                    <div class="form-group">
                            <div class="col-md-4 offset-md-4">
                                <input id="email" name="email" type="text" placeholder="dd/mm/yyyy " class="form-control">
                            </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<div style="height: 100px"></div>