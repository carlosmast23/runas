<!DOCTYPE html>
<html lang="en">

<head>
  <title>MedImagenes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/icono.png" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/ejemplo.css') }}" >

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
              <span class="mr-3"><strong>Telefono:</strong> <a href="tel://#">+593 290-02-27</a></span>
              <span><strong>Email:</strong> <a href="#">info@medimagenes.ec</a></span>
            </p>
          </div>
          <div class="col-md-6">
            <ul class="social-media">
              <li><a href="#" class="p-2"><span class="icon-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 bg-white" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Menu </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{ route('inicio')  }}">Inicio</a></li>
                <li><a href="{{ route('nosotros')  }}">Quienes Somos</a></li>
                <li class="has-children">
                  <a href="#">Servicios</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('servicioResonancia') }}">Resonancia Magnética</a></li>
                    <li><a href="{{ route('servicioTomografia') }}">Tomografía axial</a></li>
                    <li><a href="{{ route('servicioEcografia') }}">Ecografía 3d - 4d</a></li>
                    <li><a href="{{ route('servicioRayosX') }}">Rayos X Digital</a></li>
                    <li><a href="{{ route('servicioMamografia') }}">Mamografía digital</a></li>
                    <li><a href="{{ route('servicioDensitometria') }}">Densitometría</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('empresa')  }}">Empresa</a></li>
                <li><a href="{{ route('contactanos')  }}">Contactanos</a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
              class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>

      </div>
  </div>

  </header>

  @yield('cuerpo')

  <div style="text-align: center;background-color: rgb(84,84,84);color: white;padding-top:10px;padding-bottom:10px">

          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script>Todos los derechos reservados 
          con <i class="icon-heart" aria-hidden="true"></i>  
            RunaSapiens
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        

  </div>


  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>

  <script src="{{ asset('js/typed.js') }}"></script>
  <script>
    var typed = new Typed('.typed-words', {
      strings: ["Salud", " Ética", "Medicina"],
      typeSpeed: 80,
      backSpeed: 80,
      backDelay: 4000,
      startDelay: 1000,
      loop: true,
      showCursor: true
    });
  </script>

  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>