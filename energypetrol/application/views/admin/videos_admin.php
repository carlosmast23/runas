<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</br>
<h2 style="text-align:center">Gestionar Videos</h2>

<div class="row">
    <div class="offset-md-3 col-md-6">
        <form>
            <div class="form-group">
                <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Url Video">
            </div>
          
            <div class="form-group" style="text-align: center">
                <button type="button" onclick="grabarCampus();" class="btn btn-primary">Grabar</button>
            </div>
        </form>
    </div>

</div>

<table id="tabla" class="table table-striped">
    <thead>
        <tr>
            <th style="width:60%">Url Video</th>
            <th style="width:20%">Visualizar</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
            <?php
                foreach ($consulta->result() as $fila) 
                {
            ?>
                <tr>                    
                    <td><?php echo $fila->url ?></td>                    
                    <td>
                        <iframe class="embed-responsive-item" src="<?php echo $fila->url ?>" allowfullscreen></iframe>
                    </td>
                    <td>
                        <a href="<?php echo base_url('index.php/admin/editarView')."/".$fila->id ?>" title="Editar"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url('index.php/admin/eliminar')."/".$fila->id ?>" title="Eliminar"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                        
                    </td>
                </tr>
            <?php
                }
            ?>
    </tbody>
</table>
