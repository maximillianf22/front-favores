
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>
    Favores | Domicilios
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('assets/css/argon-design-system.min.css?v=1.0.2') }}" rel="stylesheet" />
</head>




<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg p-0 m-0 navbar-dark" style="background: linear-gradient(90deg, rgba(27,152,160,1) 0%, rgba(18,115,117,1) 46%, rgba(27,96,168,1) 100%);">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-defaults" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand"> 
                        <a href="#">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-defaults" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon btn-lg btn-primary text-center mx-auto align-items-center p-1" href="#">
                        <span class="nav-link-inner--text "><strong>Solicita tu Domicilio</strong></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon p-0" href="#">
                        <strong><i class="fab fa-whatsapp"></i>
                        <span class="nav-link-inner--text">+57 (318) 517-6204</span></strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid ml-4 mr-4">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/img/logo.png')}}" class="p-0 m-0" alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand"> 
                        <a href="#">
                          <img src="{{asset('assets/img/logo.png')}}" class="p-0 m-0" alt="" />
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav ml-lg-auto border-right">
                <li class="nav-item">
                    <a class="btn btn-primary btn-round mt-1 btn-sm" href="#">
                        solicitar Servicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1 btn-sm" href="#">
                        <span class="nav-link-inner--text text-dark">Registrate como dilifavor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-secondary btn-round mt-1 btn-sm" href="#">
                        <span class="nav-link-inner--text text-dark">Nosotros</span>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="btn btn-outline-primary btn-round mt-1 btn-sm" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Iniciar sesion</span>
                    </a>
                </li>
                <li class="nav-item mr-3 mt-1">
                    <a href="#">
                        <i class="fas fa-search text-dark"></i>
                    </a>
                </li> 
            </ul>

            <ul class="navbar-nav ml-3">
               <li class="nav-item m-2">
                    <a href="#">
                      <i class="fas fa-motorcycle text-dark"></i>
                    </a>
                </li>  
                <li class="nav-item m-2">
                    <a href="#">
                      <i class="fas fa-shopping-cart text-dark"></i>
                    </a>
                </li>   
            </ul>
        </div>
    </div>
</nav>
  <!-- End Navbar -->
      <!--     *********     Header    -->
      <div class="contactus-1 bg-default" style="background-image: url('{{asset('assets/img/ill/header.jpg')}}'); background-attachment: fixed; background-size:     cover;  background-repeat:   no-repeat;  background-position: center center; height: 65vh">
        <div class="container"><br>
          <div class="row">
            <div class="col-lg-6 mt-5 col-md-5 d-flex justify-content-center flex-column">
              <h2 class="title text-white">Palataforma de <strong>Domicilios</strong> Para Cualquier necesidad</h2>
              <h4 class="description text-white">Es una plataforma de comercio electronico para personas del comun en la cual puedes solicitar un domicilio totalmente personalizado y hacerle seguimiento al mismo
              tu negocio de forma facil, rapida y economica.</h4>
              <div class="info info-horizontal">
                <div class="description">
                 <button class="btn btn-primary text-uppercase">Solicitar Servicio</button>
                 <button class="btn btn-secondary text-uppercase">Registrarme como dilifavor</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><br><br> 
      <!--     *********     Logo Clientes    -->
      <div class="container" style="">
        <div class="row our-clients">
          <div class="mx-auto">
            <div class="container">
              <h3 class="text-center">Alguno de Nuestros Clientes</h3>
            </div>
            <img class="w-100" src="https://vendty.com/wp-content/uploads/2019/05/logos-new.fw_-1-2.png" alt="" />
          </div>
        </div>
        </div><br><br><br>
      <!--     *********    Tarjeta de Opciones  -->
      <section class="blogs-6">
        <div class="container">
          <div class="row">
            <div class=" container mx-auto mb-3">
              <h3 class="text-center">Tenemos una solución para ti</h3>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('https://image.freepik.com/foto-gratis/cliente-satisfecho-entrega-linea-firmando-formularios_23-2148419014.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 mx-auto text-center">
                    <h2 class="card-title mx-auto text-center">Solicitar servicio</h2>
                    <p class="card-description text-white text-center">Domicilio, comida rápida, favores, pagos, envios</p>
                    <br>
                    <a class="btn btn-primary text-center align-items-center" href="javascript:;">
                     Más Información
                    </a>
                  </div><br>
                </a>
              </div>
            </div>
            <div class="col-lg-6 mx-auto">
              <div class="card card-blog card-background card-grande" data-animation="zooming">
                <div class="full-background" style="background-image: url('https://image.freepik.com/foto-gratis/caja-flotante-superheroe_23-2148538512.jpg')"></div>
                <a href="javascript:;">
                  <div class="card-body mb-4 text-center">
                    <h2 class="card-title mx-auto text-center">Registrate como Dilifavor</h2>
                    <br>
                    <a class="btn btn-primary mx-auto text-center align-items-center" href="javascript:;">
                      Más Información
                    </a>
                  </div> <br>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section> <br><br>
      <!--     *********    Principales funcionalidades -->   
      <section class="blogs-1">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8">
              <h3 class="display-3">Conoce las funcionalidades de Domicilios app de <strong class="text-primary">FAVORES</strong></h3>
              <p class="lead mt-1">Realiza cualquier tipo de envio domicilio o diligencias personales, desde nuestra plataforma.</p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('{{asset('assets/img/theme/funcion1.jpg')}}')"></div>
                <a href="javascript:;">
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category text-white opacity-8">Solicita el domicilio</h6>
                      <h5 class="card-title">comunicate con nosotros por cualquiera de nuestras lineas</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('{{asset('assets/img/theme/funcion2.jpg')}}')"></div>
                <a href="javascript:;">
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category text-white opacity-8">Has el traking en tiempo real de tu dilifavor</h6>
                      <h5 class="card-title">Contamos con múltiples funciones para que sigas tus pedidos.</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card card-blog card-background" data-animation="zooming">
                <div class="full-background" style="background-image: url('{{asset('assets/img/theme/funcion3.jpg')}}')"></div>
                <a href="javascript:;">
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category text-white opacity-8">Tambien realizamos domicilios en multiples direcciones</h6>
                      <h5 class="card-title">Puedes realizar desde nuestra plataforma cualquier cosa, pagos, envios de articulos, dinero, diligencias, pago de servicios, compras y mas.</h5>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-6 text-right">
              <a href="#"><img src="https://ventual.co/assets/home/images/googlePlay.png" style="width:40%;" alt=""></a>
            </div>
            <div class="col-6">
              <a href="#"><img src="https://ventual.co/assets/home/images/appStore.png" style="width:40%;" alt=""></a>
            </div>
          </div>
        </div>
      </section><br><br>
      <!--     *** App Funciones Punto de Venta   **   --> 
      <div class="section features-6">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-10 mx-md-auto">
              <img class="ml-lg-5" src="./assets/img/ill/ill2.png" width="100%">
            </div>
            <div class="col-lg-6">
              <div class="info info-horizontal info-hover-success">
                <div class="description pl-4">
                  <small class="text-uppercase">FUNCIONALIDADES DE LA APP DE DOMICILIOS</small>
                  <h4 class="title">App de <strong class="text-primary">FAVORES</strong></h4>
                  <div class="" style="width: 20rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item p-2">
                       <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>Desde tablet o celular
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Tracking en tiempo real
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Quick Service
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Promociones
                      </li>
                      <li class="list-group-item p-2">
                        <div class="d-flex align-items-center">
                      <div>
                        <div class="badge badge-circle badge-success mr-3">
                          <i class="fas fa-check"></i>
                        </div>
                      </div>
                      <div>
                        Abierto las 24/7
                      </li>
                    </ul>
                  </div>
                  <ul class="title">
                    
                  </ul>
                  <a href="#" class="text-info">Más Información</a>
                  <div class="row align-items-center">
                        <div class="col-6 text-right">
                          <a href="#"><img src="https://ventual.co/assets/home/images/googlePlay.png" style="width:100%;" alt=""></a>
                        </div>
                        <div class="col-6">
                          <a href="#"><img src="https://ventual.co/assets/home/images/appStore.png" style="width:100%;" alt=""></a>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center mb-5">
                <h1 class="display-2">¿Tienes alguna Pregunta?</h1>
                <h3 class="lead">Sera un placer para nosotros atender todas tus inquietudes</h3>
                <button class="btn btn-icon btn-primary mt-3" type="button">
                  <span class="btn-inner--icon"><i class="ni ni-chat-round"></i></span>
                  <span class="btn-inner--text">Chatea con Nosotros</span>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-6 col-6">
                <div class="info info-hover">
                  <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                    <i class="ni ni-square-pin"></i>
                  </div>
                  <h4 class="info-title">Direccion</h4>
                  <p class="description px-0">Carrea 10 calle 51 - 80</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <div class="info info-hover">
                  <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                    <i class="ni ni-email-83"></i>
                  </div>
                  <h4 class="info-title">Email</h4>
                  <p class="description px-0">domicilios@favores.co</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <div class="info info-hover">
                  <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                    <i class="ni ni-mobile-button"></i>
                  </div>
                  <h4 class="info-title">Telefono</h4>
                  <p class="description px-0">+57(302) 535 3523</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-6">
                <div class="info info-hover">
                  <div class="icon icon-shape icon-shape-primary icon-lg shadow rounded-circle text-primary">
                    <i class="ni ni-circle-08"></i>
                  </div>
                  <h4 class="info-title">Contacto</h4>
                  <p class="description px-0">Jaime Samian</p>
                </div>
              </div>
            </div>
          </div>
      </div>

      <footer class="footer badge-success" style="border-top: 1px solid #636060; padding-top: 40px; margin-top:20px;">
        <div class="container-fluid">
          <div class="row bg-grey">
          <div class="col-4">
            <div class="info info-hover">
              <div class="icon icon-shape icon-shape-success icon-lg shadow rounded-circle text-success">
                <i class="fas fa-credit-card fa-3x"></i>
              </div>
              <h5 class="info-title  d-none d-sm-none d-md-block"><strong> Pagos </strong><br>En linea o Contraentrega</h5>
              <p class="description px-0 text-center lead d-none d-sm-none d-md-block mt-0"> <small>  Puedes pagar en linea y aprovecha la comodidad que te ofrecemos, o hazlo con efectivo en Contra Entrega. ¡Y siempre seguro!</small></p>
            </div>
          </div>
          <div class="col-4 border-left ">
            <div class="info info-hover border-right">
              <div class="icon icon-shape icon-shape-success icon-lg shadow rounded-circle text-success">
                <i class="fas fa-truck fa-3x"></i>
              </div>
              <h5 class="info-title  d-none d-sm-none d-md-block"><strong>  Envíos </strong><br>Rápidos y seguros</h5>
              <p class="description px-0 text-center lead d-none d-sm-none d-md-block mt-0"><small> Con solo estar registrado en Nuestra Web, Puedes Contar que siempre tendrás tus domicilios a tiempo y en la mejor condición.</small></p>
            </div>
          </div>
          <div class="col-4">
            <div class="info info-hover">
              <div class="icon icon-shape icon-shape-success icon-lg shadow rounded-circle text-success">
                <i class="fas fa-shield-alt fa-3x"></i>
              </div>
              <h5 class="info-title  d-none d-sm-none d-md-block"><strong>  Seguridad </strong><br>De principio a fin</h5>
              <p class="description px-0 text-center lead d-none d-sm-none d-md-block mt-0"><small> ¡Sientete Seguro! En Favores, estás siempre protegido, contamos con polizas de seguro en los envios, siempre responsables y profesionales.</small></p>
            </div>
          </div>
        </div>
            
          <div class="row">
            <div class="col-lg-12">
              <div class="footer_nav_container">
                <div class="cr"><small>©2018 Todos los derechos reservados. <a href="#">Favores by Ventual</a></small></div>
              </div>
            </div>
          </div>
        </div>
        </footer>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="{{ asset('assets/js/argon-design-system.min.js?v=1.2.0') }}" type="text/javascript"></script>
</body>

</html>