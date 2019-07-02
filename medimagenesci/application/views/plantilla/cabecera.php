<!DOCTYPE html>
<html lang="en">

<head>
  <title>MedImagenes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/icono.png" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>public/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/aos.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/ejemplo.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="border-bottom top-bar py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">
              <span class="mr-3"><strong>Tel:</strong> <a href="tel://#">2900227</a></span>
              <span class="mr-3"><strong>Cel:</strong> <a href="tel://#">0993107623</a></span>
              <span><strong>Email:</strong> <a href="mailto:info@medimagenes.ec">info@medimagenes.ec</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="https://www.facebook.com/Medimagenes-EC-2374545445924116/" class="p-2"><span class="icon-facebook"></span></a></li>
              <!--li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>-->
              <li><a href="https://sometag.org/account/medimagenes/1050073137/followers/?hl=es" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="https://api.whatsapp.com/send?phone=993107623&text=Hola%20en%20que%20te%20podemos%20ayudar%20" class="p-2"><span class="icon-whatsapp"></span></a></li>
              <!--<li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 bg-white" role="banner">
      <div id="menu_area" class="menu-area">
        <div class="container">
          <div class="row">          
            <nav class="navbar navbar-light navbar-expand-lg mainmenu float-right ">
            <img height="80px" src="<?= base_url() ?>/public/images/logo_color.png" class="img-responsive" alt="Responsive image">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto ">
                  <li ><a href="<?= base_url() ?>index.php/welcome/index">inicio <span class="sr-only">(current)</span></a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quienes Somos</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a href="<?= base_url() ?>index.php/welcome/nosotros">Nosotros</a></li>
                      <li><a href="<?= base_url() ?>index.php/welcome/nuestrosMedicos">Nuestros Médicos</a></li>
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
                      <li><a href="<?= base_url() ?>index.php/welcome/servicio_ecografia">Ecografía 3d - 4d </a></li>
                      <li><a href="<?= base_url() ?>index.php/welcome/servicio_rayosx">Rayos X Digital</a></li>
                      <li><a href="<?= base_url() ?>index.php/welcome/servicio_mamografia">Mamografía digital</a></li>
                      <li><a href="<?= base_url() ?>index.php/welcome/servicio_densitometria">Densitometría</a></li>

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

                  <li><a href="<?= base_url() ?>index.php/welcome/contactanos">Contáctanos</a></li>

                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>

  </div>

  </header>