<div class="container">
    <h2 style="text-align: center">Administración Preguntas</h2>
    <br>
    <form action="admin/grabar" class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
        <div class="row">
            <div class="col-md-3 ">
                <input type="text" class="form-control form-control-lg rounded-0" name="titulo" id="titulo" required="true" placeholder="Titulo" />
            </div>

            <div class="col-md-8">
                <input type="text" class="form-control form-control-lg rounded-0" name="descripcion" id="descripcion" required="true" placeholder="Descripción" />
            </div>

            <div class="col-md-1 ">
                <input type="submit" name="ejemplo" value="Grabar" class="btn btn-success btn-lg float-right" id="btnLogin" />
            </div>
        </div>
    </form>
    <br><br>
    <table class="table" style="border-top;font-size:18px">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descrición</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($consulta->result() as $fila) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $fila->titulo ?></td>
                    <td><?php echo $fila->descripcion ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/admin/editarView')."/".$fila->idpregunta ?>" title="Editar"><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url('index.php/admin/eliminar')."/".$fila->idpregunta ?>" title="Eliminar"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>

                    </td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
</div>
