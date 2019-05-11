<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Paciente</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php echo base_url() ?>index.php/welcome/">Salir Cuenta</a>
            </li>
        </ul>
    </nav>

<div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url() ?>/index.php/paciente/verDatos">
                                <span data-feather="home"></span>
                                Ver Datos <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url() ?>/index.php/paciente/campus">
                                <span data-feather="home"></span>
                                Otro <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                    </ul>


                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div style="width:100%;text-align: center;font-weight: bolder;font-size:25px"><?php echo $titulo; ?></div>                    
                </div>