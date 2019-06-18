<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/ejemplo.js"></script>
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ejemplo.css">
<!------ Include the above in your HEAD tag ---------->


<div id="menu_area" class="menu-area">
    <div class="container">
        <div class="row" >
            <nav class="navbar navbar-light navbar-expand-lg mainmenu float-right ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto ">
                        <li class="active"><a href="<?= base_url() ?>index.php/welcome/index">inicio <span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?= base_url() ?>index.php/welcome/nosotros">Nosotros</a></li>
                                <li><a href="<?= base_url() ?>index.php/welcome/nuestrosMedicos">Nuestros Medicos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="<?= base_url() ?>index.php/welcome/servicio_resonancia" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resonancia Magnética</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="<?= base_url() ?>index.php/welcome/servicio_resonancia">Resonancia Magnética</a></li>
                                        <li><a href="<?= base_url() ?>index.php/welcome/estudios">Estudios</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tomografía axial</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a href="<?= base_url() ?>index.php/welcome/servicio_tomografia">Tomografía axial</a></li>
                                        <li><a href="<?= base_url() ?>index.php/welcome/tomografiaSimple">Tomografía simple</a></li>
                                    </ul>
                                </li>
                                <li ><a href="<?= base_url() ?>index.php/welcome/servicio_ecografia">Ecografía 3d - 4d </a></li>
                                <li ><a href="<?= base_url() ?>index.php/welcome/servicio_rayosx">Rayos X Digital</a></li>
                                <li ><a href="<?= base_url() ?>index.php/welcome/servicio_mamografia">Mamografía digital</a></li>
                                <li ><a href="<?= base_url() ?>index.php/welcome/servicio_densitometria">Densitometría</a></li>

                            </ul>
                            
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Empresa</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="http://181.39.1.78:8080/dcm4chee-web3/">Sistema Médico</a></li>
                                <li><a href="<?= base_url() ?>index.php/welcome/incidencias">Incidencias</a></li>
                            </ul>
                        </li>

                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeria</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="<?= base_url() ?>index.php/welcome/fotos">Fotos</a></li>
                                <li><a href="<?= base_url() ?>index.php/welcome/videos">Videos</a></li>
                            </ul>
                        </li>

                        <li><a href="<?= base_url() ?>index.php/welcome/contactanos">Contactanos</a></li>
                        
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>


<br>
<div class="text-center"><span><a href="https://bootsnipp.com/snippets/m1d5N">Bootstrap 3 Multilevel Dropdown Menu >></a></span></div>