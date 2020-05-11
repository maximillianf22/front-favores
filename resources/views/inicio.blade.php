
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <title>
    Favores
  </title>
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
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <!-- Script Carousel -->
  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
  <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
  <style>
    .panel-products-view {
    height: 15vh;
  }
    .shad {
      box-shadow: 0 1px 1px rgba(10,50,93,.1), 0 5px 10px rgba(0,0,0,.07);
    }
    .modal {
      position: :fixed;
    }

    .footer {
     background: #f4f5f7;
     padding:0 0; 
    }

    .card-background.card-blog {
    height: 250px;
    }
    .card-background .card-body {
       
        min-height: 250px;
    }

          .card-background:after {
      background: rgba(0,0,0,.2) !important;
      }

      .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
      }

      .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;

        /* Position the tooltip */
        position: absolute;
        z-index: 1;
      }

      .tooltip:hover .tooltiptext {
        visibility: visible;
      }

      .product-ql img {
        width: 75% !important;
        margin: auto;
      }
  </style>
</head>

<body class="index-page">
  <!-- Navbar -->
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


<div class="content-slider shadow-sm" style="border-top: 2px solid #c1c1c1;
                                   border-bottom: 0px;">
     <section class="jumbotron1">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="http://" target="new"> <img src="{{ asset('/front/images/banner.png') }}" alt="Slider"></a>
                  </div>
                  <div class="carousel-item">
                    <a href="http://" target="new"> <img src="{{ asset('/front/images/Banner2.png') }}" alt="Slider"></a>
                  </div>
                    <a class="carousel-control-prev" href="#carousel-example-generic" data-slide="prev">
                       <i class="lni-chevron-left" style="font-size:32px; font-weight:bold"></i>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-generic" data-slide="next">
                      <i class="lni-chevron-right" style="font-size:32px; font-weight:bold"></i>
                    </a>
               </div>
               <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                </ol>
          </div>
     </section>
</div>
<div class="grid-category center-grid-category container mt-5">
     <div class="container-fluid pad-lft pad-rgt pad-btm ">
          <div class="pad-all">
               <div class="row pad-all mx-auto">
                    <div class="col-lg-4 col-md-3 col-sm-6 col-6">
                        <div class="card card-blog card-background" data-animation="zooming" style="border-radius: 1.2rem;">
                          <div class="full-background" style="background-image: url('https://www.loginstore.com/imagenes/banner-superior-ofertas-mobile.jpg')">
                          </div>
                            <a href="#papas" id="id-category-3" alt="Papas" title="Papas " crossorigin="anonymous">
                            <div class="card-body p-0">
                              <div class="content-bottom">
                                <h5 class="card-title text-center">
                                 Tecnología
                                </h5>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>        
                  <div class="col-lg-4 col-md-3 col-sm-6 col-6">
                      <div class="card card-blog card-background" data-animation="zooming" style="border-radius: 1.2rem;">
                          <div class="full-background" style="background-image: url('https://live.mrf.io/statics/i/ps/www.ecestaticos.com/imagestatic/clipping/420/dc3/420dc32cdb6f666e69b7869224cdc302/las-cosas-que-no-deberias-comprar-en-el-supermercado.jpg?mtime=1579565836')">
                          </div>
                              <a href="categoria" id="id-category-1" alt="Lácteos" title="Lácteos " crossorigin="anonymous">
                            <div class="card-body p-0">
                              <div class="content-bottom">
                                <h5 class="card-title text-center">
                                 Super Mercado
                                </h5>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-6">
                        <div class="card card-blog card-background" data-animation="zooming" style="border-radius: 1.2rem;">
                          <div class="full-background" style="background-image: url('https://concepto.de/wp-content/uploads/2013/08/salud-OMS-e1551914081412.jpg')">
                            </div>
                                <a href="#embutidos" id="id-category-6" alt="Embutidos" title="Embutidos " crossorigin="anonymous">
                            <div class="card-body p-0">
                              <div class="content-bottom">
                                <h5 class="card-title text-center">
                                 Salud
                                </h5>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-6">
                        <div class="card card-blog card-background" data-animation="zooming" style="border-radius: 1.2rem;">
                          <div class="full-background" style="background-image: url('https://mejorconsalud.com/wp-content/uploads/2018/09/hogar-casa-familia.jpg?width=1200&enable=upscale')">
                          </div>
                              <a href="#panaderia" id="id-category-5" alt="Panadería" title="Panadería " crossorigin="anonymous">
                            <div class="card-body p-0">
                              <div class="content-bottom">
                                <h5 class="card-title text-center">
                                 Hogar
                                </h5>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="card card-blog card-background" data-animation="zooming" style="border-radius: 1.2rem;">
                          <div class="full-background" style="background-image: url('https://linkempleo.co/wp-content/uploads/2018/09/Mensajero-domiciliario-rew.jpg')">
                          </div>
                              <a href="#" id="id-category-8" alt="Desechables" title="Desechables " crossorigin="anonymous">
                            <div class="card-body p-0">
                              <div class="content-bottom">
                                <h5 class="card-title text-center">
                                 Solicitar Domicilio
                                </h5>
                              </div>
                            </div>
                          </a>
                        </div>
                    </div>
                </div>
          </div>
     </div>
</div>




<div class="container p-4" style="background: #edf2f7;">
  <div class="col-md-12 p-0">
    <div class="row row-cols-1 row-cols-md-3">
        <div class="owl-carousel owl-head owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
        <div class="owl-stage">

            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/3d4ce4766ed60e3a4de2501bd9382f1d.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/f331bd2fb320cde4b475e68493c5d875.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/940c7408303ef4d971b7202886ba5d9a.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/2554291e34bad47583d388e43d754323.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/0f2a9005e7509cc4d4a8b16caf4cade1.png" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/e1c8d8a73e65d61cd5fa4143c029edc5.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="owl-item col-lg-4 col-md-3 col-sm-4 col-6 p-0" data-animation="zooming">
            <div class="item">
              <div class="card-product m-0">
                  <div class="card-image">
                    <a type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                      <img src="https://d50xhnwqnrbqk.cloudfront.net/banners/web/5bd038395def59051fbddb5f271d116c.jpg" class="shad border-radius" alt="...">
                    </a>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row modal-body">
         <div class="col-md-6 mx-auto justify-content-center text-center">
           <img src="http://cafri.com.co/storage/products/item_20200417164522.jpg" alt="..." class="align-self-center mr-3" style="width: 55vh">
         </div>
         <div class="col-md-6 mx-auto justify-content-center text-center">
           <div class="container text-left">
             <div class="title display-4 font-weight-bold">Producto</div>
             <div class="title display-6 lead  text-muted mt-0">Descripcion</div>
             <div class="row">
              <div class="col-6">
               <div class="title display-5 font-weight-bold text-danger mt-1">$ 8.590.565</div>
              </div>
              <div class="col-6">
              <div class="btn-group mb-1">
                <button class="btn btn-info btn-sm"> <i class="ni ni-fat-delete"></i> </button>
                <button class="btn btn-secondary btn-sm"> 1 </button>
                <button class="btn btn-info btn-sm"> <i class="ni ni-fat-add"></i> </button>
              </div>
              </div>
            </div>
            <div id="item-checked-108 mt-2" class="checkbox">
                 <input onclick="selectProductCheck(74,108)" data-nameproduct="Pan KYS Pan Sencillo" data-idattribute="108" data-price="3815" data-minvalue="1" type="checkbox" id="listProduct_108">
                 <label for="listProduct_108" style="font-size:12px; line-height:16px; width:70%"><b style="font-weight: bold">Producto</b>
                  ( UND )
                  <br>  $ 3,815
                </label>
            </div>     
             <div class="title display-5 font-weight-bold mt-1 ">Instrucciones Adicionales</div>
             <div class="form">
               <div class="input-group">
                  <textarea class="form-control" aria-label="Instrucciones adicionales"></textarea>
                </div>
             </div>
            <div class="pad-all">
               <!--<div id="addNew_ProductCar" onclick="addCarShoping()" class="btn--modal-theme disabled"> <i class="lni lni-cart"></i> Agregar a la cesta </div>-->
               <div id="" onclick="addCarShoping()" class="btn--modal-theme text-center"> <i class="lni lni-cart"></i> Agregar a la cesta </div>
          </div>
           </div>
         </div>
      </div>
    </div>
  </div>
</div>

<a href="https://api.whatsapp.com/send?phone=573108777339&amp;text=Hola,%20deseo%20realizar%20un%20nuevo%20pedido%20" class="btn_whatsapp" target="_blank" >
  <i class="fab fa-whatsapp fa-3x mt-1 mb-1" aria-hidden="true"></i>
</a>

<div class="modal modal-right show" id="modal-right" tabindex="-1">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" style="font-size:13px;"><i class="lni lni-cart"></i> Mi Carrito de Compras </h5>
     <button type="button" class="close p-0 m-0" data-dismiss="modal">
          <i class="lni lni-close p-0 m-0" style="cursor:pointer"></i>
     </button>
    </div>

    <div id="basket-empty" class="modal-body ">
      <div id="listcar-content-products"><div class="panel-products-view" id="pnl-products-car" data-base="0" data-vrenvio="6900" data-cantidad="1"><div class="container-fluid">
               <div id="basket-products" class="row ">
                    <div class="col-3 col-md-3 col-xs-3 ">
                         <img src="/storage/products/item_20200417164522.jpg" class="imgAttribute" width="100%">
                    </div>

                    <div class="col-7 col-md-7 col-xs-7 items " style="border-bottom:1px solid #F2F2F2; padding-bottom:5px;">
                         <div class="nameAttribute">Bliss Papa Francesa</div>
                         <div class="unitAttribute">Papas</div>
                         <div class="unitAttribute">( 4 X 14,170 ) / <span class="priceAttribute"> $ 56,680</span></div>
                    </div>

                    <div class="col-1 col-md-1 col-xs-1 items ">

                         <div style="width:30px; padding:2px; height:30px; text-align:center; cursor:pointer">
                              <div class="deleteItemCar" onclick="removeProduct(11,20)">                                    <img src="http://cafri.com.co/content/upload/app/remove.svg" style="vertical-align: middle; width:15px; height:15px;" viewbox="0 0 30 30">
                              
                              </div>  
                         </div>
                         <div style=" width:30px; padding:2px; height:30px; text-align:center; cursor:pointer">
                              <div class="editItemCar" onclick="openProduct(11,20)">
                                                                     <img src="http://cafri.com.co/content/upload/app/lapiz.svg" style="vertical-align: middle; width:15px; height:15px;" viewbox="0 0 30 30">
                              
                              </div>   
                         </div>

                    </div>
               </div></div>
               </div><div class="text-center pad-top pad-btm " style="font-weight:bold; color:#212121; font-size:11px; border-top:1px dashed #CCC;"> 
               Información de la compra
          </div><div class="clear-car pad-all" onclick="clearbasket()">
               <b class="lni lni-eraser"></b> Limpiar Carrito 
          </div><br><div id="cupon_descuento" class="pad-all" style=" margin-bottom:7px !important ">
               <div class="title_cupon">Cupón de descuento :</div>
               <div class="content_">
                    <div class="row">
                    <div class="col-lg-6 pad-lft">
                         <input id="cupon_store_x3" maxlength="50" class="txt-cupon" type="text" value="">
                    </div>
                    <div class="col-lg-6">
                         <div class="btn-cupon show_item hide_item" onclick="loadCupon()"> Agregar </div>
                         <div class="btn-cupon-del hide_item" onclick="delCupon()"> Omitir Cupon </div>
                    </div>
                    </div>
               </div>
          </div><div class="container-fluid" style="margin-top:10px !important;"><div class="row ">
               <div class="col-lg-6 col-md-6 "><div class="subtotal">Subtotal :</div></div>
               <div class="col-lg-6 col-md-6 ">
                    <div id="subtotal" data-subtotal="56680" class="subtotal">$ 56,680.00</div></div>
          </div></div><div class="container-fluid"><div class="row ">
               <div class="col-lg-6 col-md-6 "><div class="subtotal">Costo de Envio :</div></div>
               <div class="col-lg-6 col-md-6 "> <div id="costo-envio" data-envio="" class="subtotal">$ 6,900</div></div>
          </div></div><div class="container-fluid"><div class="row ">
               <div class="col-lg-6 col-md-6 "><div class="descuento">Descuento :</div></div>
               <div class="col-lg-6 col-md-6 ">
                    <div id="valor_descuento" data-cupon="" class="descuento">$ 0</div>
               </div>
          </div></div><div class="container-fluid" style="margin-top:10px !important;"><div class="row ">
               <div class="col-lg-6 col-md-6 "><div class="total">Total </div></div>
               <div class="col-lg-6 col-md-6 "> <div id="total-compra" data-total="" class="total">$ 63,580</div></div>
               </div></div>
<script>
     
     var cant_products = 1;
     $("#item-car-account").html(cant_products);
     $("#dataStoreCar").data("json",[{"id_temp":1513,"idOrder":0,"idUser":0,"idProduct":11,"name_product":"Bliss Papa Francesa","idAttribute":20,"nameAttribute":"Bliss Papa Francesa","priceOrder":14170,"stockOrder":0,"totalOrder":56680,"quantityOrder":4,"idTempCar":593951,"id":11,"nameProduct":"Bliss Papa Francesa","slug":null,"description":null,"imageProduct":"item_20200417164522.jpg","idCategorie":3,"nameCategory":"Papas","typeofProduct":1,"idState":1,"idThemes":0,"created_at":"2020-04-14 21:30:40","updated_at":"2020-04-20 16:24:11"}]);
     $("#checkouStoreCar").data("json",[{"id_temp":1513,"idOrder":0,"idUser":0,"idProduct":11,"name_product":"Bliss Papa Francesa","idAttribute":20,"nameAttribute":"Bliss Papa Francesa","priceOrder":14170,"stockOrder":0,"totalOrder":56680,"quantityOrder":4,"idTempCar":593951,"id":11,"nameProduct":"Bliss Papa Francesa","slug":null,"description":null,"imageProduct":"item_20200417164522.jpg","idCategorie":3,"nameCategory":"Papas","typeofProduct":1,"idState":1,"idThemes":0,"created_at":"2020-04-14 21:30:40","updated_at":"2020-04-20 16:24:11"}]);
     //Cookies.set('store.catalogo',$ListProduct,{ expires: 7 });

</script>

</div>
    </div>
    
  </div>
  </div>
</div>


<div class="modal modal-left show" id="modal-left" tabindex="-1">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title">
      <div class="text-center font-weight-bold text-uppercase display-4">
        Categorias
      </div>
    </h5>
    <button type="button" class="close" data-dismiss="modal">
      <i class="lni lni-close p-0 m-0"></i>
    </button>
    </div>
    <div class="modal-body ">
      <div class="row menu-left-options">
        <div class="col-lg-12 item-menu linkAction"><a href="http://cafri.com.co"><i class="lni lni-home"></i>&nbsp;&nbsp;Inicio</a></div>
        <div class="col-lg-12 item-menu linkAction"><a href="http://cafri.com.co/store/offers">
             <i class="lni lni-offer"></i>
             <img src="http://cafri.com.co/content/upload/app/offer.svg" width="20" height="20" style="display: inline-block; fill: black; vertical-align: middle;" viewbox="0 0 30 30">
             &nbsp;&nbsp;Promociones</a></div>
          
          <div class="col-lg-12 item-menu linkAction"> 
            <div id="accordion" style="padding:none !important ">
              <div class="card-header" style="border:none !important ; padding:1px !important">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <i class="lni lni-list"></i>
                  
                  <img src="http://cafri.com.co/content/upload/app/farm-products.svg" width="20" height="20" style="display: inline-block; fill: black; vertical-align: middle;" viewbox="0 0 30 30">
                  &nbsp;&nbsp;Categorias &nbsp;&nbsp;&nbsp;&nbsp;<i class="lni lni-chevron-down" style="color:#9EB934; font-weight:bold"></i>
                </a>
              </div>
              <div id="collapseOne" class="collapse " data-parent="#accordion">
                <div class="card-body">
                  <div class="category-list item">
                    <ul>
                      <li style="padding:5px;"><a href="#papas"> Papas</a></li>
                      <li style="padding:5px;"><a href="#salsas"> Salsas</a></li>
                      <li style="padding:5px;"><a href="#bebidas"> Bebidas</a></li>
                      <li style="padding:5px;"><a href="#aderezos"> Aderezos</a></li>
                      <li style="padding:5px;"><a href="#lacteos"> Lácteos</a></li>
                      <li style="padding:5px;"><a href="#embutidos"> Embutidos</a></li>
                      <li style="padding:5px;"><a href="#panaderia"> Panadería</a></li>
                      <li style="padding:5px;"><a href="#desechables"> Desechables</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 
          </div>
      </div>
    </div>
    <div class="modal-footer modal-footer-uniform">
    
    </div>
  </div>
  </div>
</div>

<footer class="footer bg-gradient-secondary" style="border-top: 1px solid #636060; padding-top: 40px; margin-top:20px;">
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
              <p class="description px-0 text-center lead d-none d-sm-none d-md-block mt-0"><small> Con solo estar registrado en Nuestra Web, Puedes Contar que siempre tendrás tus envios a tiempo y en la mejor condición.</small></p>
            </div>
          </div>
          <div class="col-4">
            <div class="info info-hover">
              <div class="icon icon-shape icon-shape-success icon-lg shadow rounded-circle text-success">
                <i class="fas fa-shield-alt fa-3x"></i>
              </div>
              <h5 class="info-title  d-none d-sm-none d-md-block"><strong>  Seguridad </strong><br>De principio a fin</h5>
              <p class="description px-0 text-center lead d-none d-sm-none d-md-block mt-0"><small> ¿No te gusta? ¡Devuélvelo! En Favores, estás siempre protegido si el producto no es el que deseas o no esta en condiciones ¡Devuelvelo!.</small></p>
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
  <script>
    $('.owl-products').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                loop: true,
                nav: true
            },
            600: {
                items: 4,
                loop: true,
                nav: false
            },
            1100: {
                items: 6,
                loop: true,
                nav: false
            }

        }
    })

     $('.owl-head').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,
                nav: true
            },
            600: {
                items: 2,
                loop: true,
                nav: false
            },
            1100: {
                items: 3,
                loop: true,
                nav: false
            }

        }
    })
</script>
 <script type='text/javascript' src="{{asset('components/bootstrap/jquery.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap/popper.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap/bootstrap.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/cookiesJs/js.cookie.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/bootstrap-datepicker/datepicker.es.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/store/config-store.js')}}"></script>
 
  <script type='text/javascript' src="{{asset('components/select2/select2.full.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script type='text/javascript' src="{{asset('components/fastclick/lib/fastclick.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/jquery-toast/jquery.toast.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/fastclick/lib/fastclick.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/validations/validation.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/input-mask/jquery.inputmask.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/password-meter/pwstrength-bootstrap.min.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/password-meter/zxcvbn.js')}}"></script>
  <script type='text/javascript' src="{{asset('components/password-meter/password-meter-active.js')}}"></script>  
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