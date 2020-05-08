<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Informacion de la calidad del aire en el espacio aereo de Barranquilla">
  <meta name="author" content="Developapp">
  <title>Favores</title>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="{{asset('components/jquery-toast/jquery.toast.css') }} ">
  <link rel="stylesheet" href="{{asset('components/bootstrap/bootstrap.min.css') }} ">
  <link rel="stylesheet" href="{{asset('components/bootstrap/master_style.css') }} ">
  <link rel="stylesheet" href="{{asset('components/theme/master.v1.css') }} ">
  <link rel="stylesheet" href="{{asset('components/bootstrap-datepicker/bootstrap-datepicker.min.css') }} ">
  <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
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

<body>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <nav class="navbar navbar-expand-lg p-0 m-0 navbar-dark bg-gradient-info">
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
            
            <ul class="navbar-nav ml-lg-auto p-1">
                <li class="nav-item p-0">
                    <a class="nav-link nav-link-icon btn-lg btn-info text-center mx-auto align-items-center p-0" href="#">
                        <i><img class="emoji" alt="🇨🇴" src="https://s.w.org/images/core/emoji/11.2.0/svg/1f1e8-1f1f4.svg" width="10%"></i>
                        <span class="nav-link-inner--text "><strong>Colombia</strong></span>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link nav-link-icon p-0" href="#">
                        <strong><i class="fab fa-whatsapp"></i>
                        <span class="nav-link-inner--text">+57 (318) 517-6204</span></strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container_fluid menu-top-page shadow p-1">
 <div class="row ">
     <div class="col col-lg-6 col-md-6 col-sm-6 ">
          <div class="store-header-2-x-search">
               <div class="store-header-2-x-alingSearchContent">
                    <div class="store-header-2-x-menuContent">
                         <div style="width:25px;"> <img src="{{ asset('/content/upload/app/menu.png') }}" style="vertical-align: middle;" viewbox="0 0 30 30" data-toggle="modal" data-target="#modal-left"> </div>
                    </div>
                    <div class="store-header-2-x-logoContent">
                         <div><a href="/"><img src="{{ asset('/content/upload/theme/logo_slogan.png') }}" width="80%" alt="Inicio" crossorigin="anonymous"></a></div>
                    </div>
               </div>
          </div>
     </div>
     <div class="col col-lg-6 col-md-6 col-sm-6 pad-all">
          <div class="header-options-user pad-rgt">
               <div class="header-links-content pad-all">
                      <div class="minicart-content item-header-link flex justify-center border-right">
                         <div class="minicart-content minicart-content-mobile mr-5">
                              <aside class="store-minicart-3-x-container relative fr flex items-center">
                                   <div class="flex flex-column txt-center ">
                                        <div class="store-header-2-x-minicartButtonMobile store-header-2-x-minicartButton">
                                             <div class="txt-center m-5">
                                              <a class="btn btn-outline-secondary btn-round mt-1 mr-5" href="http://favores.ventual.co/login">
                                                      <span class="nav-link-inner--text text-nowrap text-dark"><i class="fas fa-user"></i> Iniciar Sesion</span>
                                                  </a>
                                              </div>
                                         </div>
                                   </div>
                              </aside>
                         </div>
                    </div>

                    <div class="minicart-content item-header-link flex justify-center ml-0" data-toggle="modal" data-target="#modal-right">
                         <div class="minicart-content minicart-content-mobile">
                              <aside class="store-minicart-3-x-container relative fr flex items-center">
                                   <div class="flex flex-column txt-center ">
                                        <div class="store-header-2-x-minicartButtonMobile store-header-2-x-minicartButton">
                                             <div class="store-header-2-x-minicartInner txt-center">
                                                  <span id="show_cnt_products" class="store-item-car-products hide_item"><span id="cnt-add-products" class="store-header-2-x-minicartBadge store-header-2-x-pulsate">0</span></span>
                                                  <img src="{{ asset('/content/upload/app/cart.png') }}" width="80%" height="80%" style="display: inline-block; fill: black; vertical-align: middle;" viewbox="0 0 30 30">
                                             </div>
                                        </div>
                                   </div>
                              </aside>
                         </div>
                    </div>

               </div>
          </div>
     </div> 
 </div>
</div>
    <!-- Header -->
    <section class="container-fluid" style="padding-right: 16px !important; padding-left: 10px !important;}">
    <div class="row">
            <div class="col-md-3 p-0">
                <div class="col-md-12 mt-2">
                  <div class="card card-stats border">
                    <div class="row m-2 border-top">
                        <div class="col-12 display-5 text-uppercase font-weight-bold mt-4 ">Dilifavor</div>
                    </div>
                   <form class="p-3">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Ciudad</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>Barranquilla</option>
                          <option>Cali</option>
                          <option>Medellin</option>
                          <option>Santa Marta</option>
                        </select>
                      </div>
                      <div class="row">
                        <div class="form-group  mx-auto d-block col-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                </div>
                                <input class="form-control datepicker" placeholder="Selecciona la Fecha" type="text">
                            </div>
                        </div>
                        <div class="form-group col-6">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option class="disabled">Hora</option>
                          <option>1:00 - 2:00 pm</option>
                          <option>3:00 - 4:00 pm</option>
                          <option>5:00 - 6:00 pm</option>
                          <option>7:00 - 8:00 pm</option>
                        </select>
                      </div>
                      </div>
                      <div class="container">
                        <div class="shadow-sm p-3">
                          <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Dirección">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">¿Que debe hacer el mensajero en esta direccion?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        </div>

                        <div class="shadow-sm mt-2 p-3">
                          <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Dirección">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">¿Que debe hacer el mensajero en esta direccion?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-6"><i class="fas fa-add"></i> Añadir dirección</div>
                          <div class="col-3 text-right">Ida y Vuelta
                          </div>
                          <div class="col-3">
                            <label class="custom-toggle ">
                              <input type="checkbox" checked="">
                              <span class="custom-toggle-slider rounded-circle" data-label-off="NO" data-label-on="SI"></span>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="¿Cuanto es el valor monetario de lo que transporta?">
                      </div>

                      <button class="btn btn-info btn-block p-2">CONFIRMAS SERVICIO</button>
                    </form>
                  </div>
                </div>
            </div>
              <div class="col-md-9 p-0">
                <div id="page-content-wrapper">
                <!-- Map container -->
                <div class="mapContainer" style="height: 130vh; width:100%">
                    <div id="map" style="height:100%"></div>
                </div>
            </div>
            </div>      
      </section> 


</div>
  
 <!-- Argon Scripts -->
  <!-- Core -->
  <script type='text/javascript' src="{{asset('components/bootstrap/jquery.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap/popper.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap/bootstrap.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/cookiesJs/js.cookie.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap-datepicker/datepicker.es.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/store/config-store.js')}}"></script>
 
  <script type='text/javascript' src="{{asset('components/jquery-toast/jquery.toast.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/fastclick/lib/fastclick.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/validations/validation.js')}}"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/moment.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.min.js') }}"></script>
  <!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="{{ asset('assets/js/argon-design-system.min.js?v=1.2.0') }}" type="text/javascript"></script>

      <script>
      // This example adds a marker to indicate the position of Bondi Beach in Sydney,
      // Colombia.
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat:   10.993315, lng: -74.806905},
        });

      }

    </script>

    <script async defer
             src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVqj3iCGPfniWznDShImSfe8XQzjdiQrM&callback=initMap">
    </script>
</body>

</html>