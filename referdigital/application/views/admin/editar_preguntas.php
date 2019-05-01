<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0">Editar Pregunta</h3>
                        </div>
                        <div class="card-body">
                            <form action="../editar" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                
                            <input id="id" name="idpregunta" type="hidden" value="<?php echo $consulta['idpregunta'] ?>">
                                
                                <div class="form-group">
                                    <input type="text" value="<?php echo $consulta['titulo'] ?>" class="form-control form-control-lg rounded-0" name="titulo" id="uname1" required="" placeholder="titulo">                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" value="<?php echo $consulta['descripcion'] ?>" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password" placeholder="descripcion" name="descripcion">                                    
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                      <input type="checkbox" class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      
                                    </label>
                                </div>
                                <a class="btn btn-primary btn-lg float-right" role="button" href="<?php echo base_url('index.php/admin') ?>">Cancelar</a>
                                <input type="submit" name="editar" value="Editar" class="btn btn-success btn-lg float-right" id="btnLogin" />
                                
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->

                </div>


            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->