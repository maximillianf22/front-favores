<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<div class="container_fluid menu-top-page shadow-sm p-1">
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
 <div class="col-3 fixed-top" style="margin-top: 140px">
      <div class="list-group bg-white">
        <button type="button" class="list-group-item list-group-item-action active">
          Super Mercado &nbsp;<i class="fa fa-angle-right"></i>
        </button>
        <button type="button" class="list-group-item list-group-item-action">Tecnologia &nbsp;<i class="fa fa-angle-down"></i></button>
          <div class="container border-right border-left">
            <div class="list-group list-group-flush mt-1 mb-1 ml-3">
            <button type="button" class="list-group-item list-group-item-action p-2">Telefonos</button>
            <button type="button" class="list-group-item list-group-item-action p-2">Televisores</button>
            <button type="button" class="list-group-item list-group-item-action p-2">Laptops</button>
            <button type="button" class="list-group-item list-group-item-action p-2">Accesorios</button>
            <button type="button" class="list-group-item list-group-item-action p-2">Parlantes</button>
            <button type="button" class="list-group-item list-group-item-action p-2">Smart Watch</button>
            </div>
          </div>
        <button type="button" class="list-group-item list-group-item-action">Salud &nbsp;<i class="fa fa-angle-right"></i></button>
        <button type="button" class="list-group-item list-group-item-action">Hogar &nbsp;<i class="fa fa-angle-right"></i></button>
      </div>
    </div>
    <!-- Header -->
<div class="container-fluid bg-secondary">
  <div class="row mt-4">
     <div class="col-3" style="margin-top: 120px">

    </div>
    <div class="col-9 bg-white">
      <h3>Lacteos</h3>
      <div id="filterProducts" class="container-fluid pad-lft pad-all " style="border-top:0px solid #F1F3F4">
    <div class="row pad-all">
            <div id="product-28" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(28)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414231722.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Avena Original</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 2,398
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-29" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(29)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414232059.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Bon Yurt Zucaritas</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 2,616
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-30" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(30)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414232443.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Crema de Leche Bolsa</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 4,060
                              </div>
            </div>
                        <span class="badge badge-success">
                            + 1 variacion
                          </span>
                      </div>
        </div>
      </div>
            <div id="product-31" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(31)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414234208.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Crema de Leche</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 17,400
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-32" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(32)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414233527.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Cremosino Queso para untar</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 3,815
                              </div>
            </div>
                        <span class="badge badge-success">
                            + 1 variacion
                          </span>
                      </div>
        </div>
      </div>
            <div id="product-33" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(33)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414233914.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Alpina Queso Parmesano</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 7,630
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-34" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(34)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200415001208.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Campi Mantequilla</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 8,175
                              </div>
            </div>
                        <span class="badge badge-success">
                            + 2 variaciones
                          </span>
                      </div>
        </div>
      </div>
            <div id="product-55" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(55)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200415114705.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Queso Duro</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 21,364
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>

          </div>
  <hr>
          <h3 class="mt-3">Embutidos</h3>

          <div id="filterProducts" class="container-fluid pad-lft pad-all " style="border-top:0px solid #F1F3F4">
    <div class="row pad-all">
            <div id="product-66" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(66)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416011951.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Cunit Butifarra Caribe</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 8,938
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-67" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(67)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416012413.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Cunit Cervecero</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 12,208
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-68" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(68)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416012827.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Cunit Chorichuzo</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 9,483
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-69" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(69)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416013212.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Cunit Chorizo Parrillada</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 8,284
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-70" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(70)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416013645.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Cunit Chorizo</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 5,777
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>

            <div id="product-100" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(100)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416224051.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">La Parisienne Carne Hamburguesa Express</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 9,919
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
          </div>
  </div>

   <hr>
          <h3 class="mt-3">Panaderia</h3>

          <div id="filterProducts" class="container-fluid pad-lft pad-all " style="border-top:0px solid #F1F3F4">
    <div class="row pad-all">
            <div id="product-9" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(9)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416145018.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Pan KYS Pan Hamburguesa</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 3,161
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-10" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(10)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200414211126.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Pan KYS Pan Sencillo</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 3,815
                              </div>
            </div>
                        <span class="badge badge-success">
                            + 2 variaciones
                          </span>
                      </div>
        </div>
      </div>
            <div id="product-74" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(74)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416150143.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Pan KYS Pan Sencillo</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 3,815
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-75" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(75)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416150534.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Pan KYS Pan Super</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 4,251
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
                      </div>
        </div>
      </div>
            <div id="product-76" class="col-6 col-md-2 col-sm-4" style="padding:5px 7px !important" onclick="viewProduct(76)">
        <div class="sc-item-store ">
          <div class="categorie">
            <!-- <b>
                              
                              </b> -->
            <!-- <div class="sticky "></div> -->
          </div>
          <div class="img-card-product-ql">
                                    <img id="logoTheme" src="http://cafri.com.co/storage/products/item_20200416151144.jpg" alt="Producto">
                                  </div>
          <div class="info-article ">
            <div class="name">Pan KYS Pan Mini</div>
            <!-- <div class=""></div> -->
            <div class="info-price ">
              <div class="item-price">
                                $ 2,834
                              </div>
            </div>
                        <span class="badge badge-secondary">
              Sin variaciones
            </span>
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

</body>

</html>