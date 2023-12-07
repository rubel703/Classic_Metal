<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Classic Metal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('/') }}frontend-assets/images/favicon.ico" type="img/x-icon">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/vendor/helper.css">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/plugins/plugins.css">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/vendor/revslider.css">
    <link rel="stylesheet"    href="{{ asset('/') }}frontend-assets/css/style.css">

    <script src="{{ asset('/') }}frontend-assets/js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body class="">

    <div id="main-wrapper" class=" ">

        <!--Header section start-->
        <header class="header  header-absolute">
            <div class="header-deafult menu-right height-150 d-flex align-items-center">
                <div
                    class="container-fluid pl-80 pr-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-4">
                            <div class="logo fw-bold fs-1 text-dark">
                                {{-- <a href=""><img src="{{ asset('/') }}frontend-assets/images/logo.png"
                                        alt=""></a> --}}
                                        Classic Metal.
                            </div>
                        </div>
                        <!--Menu start-->
                        <div class="col-xl-6  d-none d-xl-block">
                            <div class="menu-center d-flex justify-content-center">
                                <nav class="main-menu ">
                                    <ul>
                                        <li><a href="">Home</a>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="">About Us</a></li>
                                                <li><a href="">Contact Us</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Category</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Gaming Chair</a></li>
                                                <li><a href="">sleep Chair</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul class="sub-menu ">
                                                <li><a href="#" class="item-link">popular products</a>
                                                </li>                 
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="">outdoor blog</a></li>
                                                <li><a href="">indor blog</a></li>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!--Menu end-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-8 d-flex justify-content-end">
                            <div class="header-icon search ">
                                <a class="search-trigger" href="#">
                                    <i class="dlicon ui-1_zoom"></i>
                                </a>
                            </div>
                            <div class="header-icon cart ">
                                <a class="cart-trigger" href="#">
                                    <span class="cart-count">3</span>
                                    <i class="dlicon shopping_cart-modern"></i>
                                </a>
                            </div>
                            <div class="header-icon hamburger-menu ">
                                <a class="hamburger-trigger d-none d-xl-block" href="#">
                                    <i class="dlicon ui-3_menu"></i>
                                </a>

                                <a class="hamburger-trigger d-block d-xl-none" href="#">
                                    <i class="dlicon ui-3_menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Header section end-->

        <!-- Start Loader Area -->
        <div class="la-image-loading">
            <div class="content">
                <div class="la-loader spinner3">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
                    <div class="cube1"></div>
                    <div class="cube2"></div>
                    <div class="cube3"></div>
                    <div class="cube4"></div>
                </div>
            </div>
            <button class="submit-btn shop-btn">Cancel Preloader</button>
        </div>
        <!-- End Loader Area -->

        <!-- Start Search Flyover -->
        <div class="search-flyoveray"></div>
        <div class="cart-flyout">
            <div class="cart-flyout-inner">
                <a class="btn-close-cart" href="#">
                    <i class="dlicon ui-1_simple-remove"></i>
                </a>
                <div class="cart-flyout__content">
                    <div class="cart-flyout__heading">Shopping Cart</div>
                    <div class="widget_shopping_cart_content">
                        <ul class="product_list_widget">
                            <li>
                                <div class="thumb">
                                    <img src="{{ asset('/') }}frontend-assets/images/cart/cart-1.jpg"
                                        alt="product">
                                </div>
                                <div class="content">
                                    <h6><a href="single-product.html">Boys light blue jacket</a></h6>
                                    <div class="quntity">1 × $35.99</div>
                                    <button class="remove-btn">×</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="minicart__total">Subtotal: <span class="price">164.97</span></p>
                    <div class="cart__btn">
                        <a href="">View cart</a>
                        <a href="">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Flyover -->

        <!-- Start Search FlyOver Area -->
        <div class="search-flyoverlay-area">
            <div class="btn-close-search">
                <i class="dlicon ui-1_simple-remove"></i>
            </div>
            <div class="searchform-fly">
                <p class="searchform-fly-text">Start typing and press Enter to search !</p>
                <form class="search-form" action="#">
                    <input type="text" placeholder="Search">
                    <button class="search-button" type="submit">
                        <i class="dlicon ui-1_zoom"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- End Search FlyOver Area -->

        <!-- Start Hamburger -->
        <div class="hamburger-area">
            <div class="btn-close-search">
                <button>
                    <i class="dlicon ui-1_simple-remove"></i>
                </button>
            </div>
            <div class="hamburger-menu-main d-none d-xl-block">
                <div class="humberger-top">
                    <div class="hum-mainmenu">
                        <ul>
                            <li><a href="{{route('login')}}">Admin Panel</a></li>
                            <li><a href="">User Panel</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Licenses</a></li>
                            
                        </ul>
                    </div>
                </div>

                {{-- <div class="humberger-banner">
                    <a href="#"><img
                            src="{{ asset('/') }}frontend-assets/images/banner/img-hamburger-banner.jpg"
                            alt=""></a>
                </div> --}}

                <div class="humberger-bottom">
                    <div class="humberger-bottom__inner">
                        <div class="content">
                            <ul class="hm-address">
                                <li><a href="#"><span>(+612) 2531 5600 </span></a></li>
                                <li><a href="#"><span>info@la-studioweb.com </span></a></li>
                                <li><a href="#"><span>PO Box 1622 Colins Street West <br> Victoria 8077
                                            Australia</span></a></li>
                            </ul>
                           
                            <div class="hamburger-social bg-owncolor">
                                <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="youtube" href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="thumb">
                            <img src="{{ asset('/') }}frontend-assets/images/payment_info.png" alt="RAZ">
                        </div>
                        <div class="hm-copyright">
                            <p>© 2023 Classic Metal All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Main Menu -->



            <ul class="menu-primary-menu-1 responsive-manu d-block d-xl-none" id="responsive-manu">
                <li><a href="#">Home</a>
                </li>
                <li class="has-dropdown-menu"><a href="#">Pages</a>
                    <ul class="sub-menu-two">
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </li>
                <li class="has-dropdown-menu"><a href="#">Category</a>
                    <ul class="sub-menu-two">
                        <li><a href="portfolio-classic.html">classic chair</a></li>
                    </ul>
                </li>
                <li class="has-dropdown-menu"><a href="#">Shop</a>
                    <ul class="sub-menu-two">
                        <li class="has-label--3 has-dropdown-menu">
                            <a href="#">popular products</a>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown-menu"><a href="#">Blog</a>
                    <ul class="sub-menu-two">
                        <li><a href="blog.html">customer blog</a></li>
                    </ul>
                </li>
            </ul>

            <!-- End Main Menu -->
        </div>
        <!-- End Hamburger -->

        <!--slider section start-->
        <div class="new-slider position-relative">
            <div id="rev_slider_35_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                data-alias="home-01" data-source="gallery"
                style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.7 auto mode -->
                <div id="rev_slider_35_1" class="rev_slider fullwidthabanner" style="display:none;"
                    data-version="5.4.7">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-65" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="01" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('/') }}frontend-assets/images/transparent.png"
                                data-bgcolor='#f9f9f9' style='background:#f9f9f9' alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption     rev_group" id="slide-65-layer-6"
                                data-x="['right','right','right','center']" data-hoffset="['200','100','50','0']"
                                data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','60']"
                                data-width="['858','458','380','380']" data-height="['724','424','364','364']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; min-width: 858px; max-width: 858px; max-width: 724px; max-width: 724px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-65-layer-7"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['20','20','20','20']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+340","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home01-slide-02.png" alt=""
                                        data-ww="['454px','254px','220px','220px']"
                                        data-hh="['454px','254','220','220']" data-no-retina> </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-65-layer-1"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+550","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home01-slide-01.png" alt=""
                                        data-ww="['853px','453px','380px','380px']"
                                        data-hh="['636px','338','284','284']" data-no-retina> </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" id="slide-65-layer-8"
                                    data-x="['center','center','center','center']"
                                    data-hoffset="['-50','-30','-30','-30']"
                                    data-y="['bottom','bottom','bottom','bottom']"
                                    data-voffset="['80','40','40','40']" data-fontsize="['24','18','18','16']"
                                    data-lineheight="['32','32','32','28']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+760","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; font-size: 24px; line-height: 32px; font-weight: 700; color: #1a1a1a;font-family:Arimo;font-style:italic;">
                                    only $399.99 </div>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption     rev_group" id="slide-65-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['200','100','50','50']"
                                data-y="['middle','middle','middle','top']" data-voffset="['1','1','1','60']"
                                data-width="['570','370','370','370']" data-height="['280','200','200','180']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 9; min-width: 570px; max-width: 570px; max-width: 280px; max-width: 280px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 6 -->
                                <div class="tp-caption   tp-resizeme" id="slide-65-layer-5"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['24','18','14','14']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+460","speed":1680,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 10; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 400; color: #1a1a1a;font-family:Arimo;">
                                    3-Piece Kids Toddlers Multipurpose Wooden </div>

                                <!-- LAYER NR. 7 -->
                                <div class="tp-caption   tp-resizeme" id="slide-65-layer-3"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-50','-30','-30','-30']" data-fontsize="['106','70','60','60']"
                                    data-lineheight="['110','80','80','80']" data-letterspacing="['-4','-4','-4','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+790","speed":1680,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 11; white-space: nowrap; font-size: 106px; line-height: 110px; font-weight: 400; color: #1a1a1a; letter-spacing: -4px;font-family:Arimo;">
                                    sale 30% </div>

                                <!-- LAYER NR. 8 -->
                                <div class="tp-caption rev-btn " id="slide-65-layer-4"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['16','16','16','14']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                    data-frames='[{"delay":"+1020","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(26,26,26);bc:rgb(26,26,26);"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[16,16,16,10]" data-paddingright="[45,45,45,30]"
                                    data-paddingbottom="[16,16,16,10]" data-paddingleft="[45,45,45,30]"
                                    style="z-index: 12; white-space: nowrap; font-size: 16px; line-height: 28px; font-weight: 700; color: #1a1a1a;font-family:Arimo;text-transform:capitalize;background-color:rgba(26,26,26,0);border-color:rgba(26,26,26,0.5);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                    Shop Now </div>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-66" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="02" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('/') }}frontend-assets/images/transparent.png"
                                data-bgcolor='#f9f9f9' style='background:#f9f9f9' alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption     rev_group" id="slide-66-layer-6"
                                data-x="['right','right','right','center']" data-hoffset="['300','100','50','0']"
                                data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','50']"
                                data-width="['615','415','320','320']" data-height="['800','500','400','400']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; min-width: 615px; max-width: 615px; max-width: 800px; max-width: 800px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 10 -->
                                <div class="tp-caption   tp-resizeme" id="slide-66-layer-7"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['100','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+340","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home01-slide-02.png" alt=""
                                        data-ww="['454px','254px','254px','254px']"
                                        data-hh="['454px','254','254','254']" data-no-retina> </div>

                                <!-- LAYER NR. 11 -->
                                <div class="tp-caption   tp-resizeme" id="slide-66-layer-1"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+550","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home04-banner-03.png" alt=""
                                        data-ww="['614px','380px','320px','320px']"
                                        data-hh="['766','474','399','399']" data-no-retina> </div>

                                <!-- LAYER NR. 12 -->
                                <div class="tp-caption   tp-resizeme" id="slide-66-layer-8"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']"
                                    data-voffset="['80','80','20','20']" data-fontsize="['24','18','18','18']"
                                    data-lineheight="['32','28','28','28']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+760","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; font-size: 24px; line-height: 32px; font-weight: 700; color: #1a1a1a;font-family:Arimo;font-style:italic;">
                                    only $399.99 </div>
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption     rev_group" id="slide-66-layer-2"
                                data-x="['left','left','left','left']" data-hoffset="['300','100','50','50']"
                                data-y="['middle','middle','middle','top']" data-voffset="['1','1','0','50']"
                                data-width="['570','410','410','410']" data-height="['280','220','180','180']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 9; min-width: 570px; max-width: 570px; max-width: 280px; max-width: 280px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 14 -->
                                <div class="tp-caption   tp-resizeme" id="slide-66-layer-5"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['24','24','18','18']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+460","speed":1680,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 10; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 400; color: #1a1a1a;font-family:Arimo;">
                                    New Modern Chair for Living Room </div>

                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption   tp-resizeme" id="slide-66-layer-3"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-50','-30','-30','-30']" data-fontsize="['106','80','60','60']"
                                    data-lineheight="['110','80','60','60']" data-letterspacing="['-4','-4','-4','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+790","speed":1680,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 11; white-space: nowrap; font-size: 106px; line-height: 110px; font-weight: 400; color: #1a1a1a; letter-spacing: -4px;font-family:Arimo;">
                                    sale 20% </div>

                                <!-- LAYER NR. 16 -->
                                <div class="tp-caption rev-btn " id="slide-66-layer-4"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['16','16','16','14']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                    data-frames='[{"delay":"+1020","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(26,26,26);bc:rgb(26,26,26);"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[16,16,16,10]" data-paddingright="[45,45,45,30]"
                                    data-paddingbottom="[16,16,16,10]" data-paddingleft="[45,45,45,30]"
                                    style="z-index: 12; white-space: nowrap; font-size: 16px; line-height: 28px; font-weight: 700; color: #1a1a1a; font-family:Arimo;text-transform:capitalize;background-color:rgba(26,26,26,0);border-color:rgba(26,26,26,0.5);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                    Shop Now </div>
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-67" data-transition="fade" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="300" data-thumb="" data-rotate="0"
                            data-saveperformance="off" data-title="03" data-param1="" data-param2="" data-param3=""
                            data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{ asset('/') }}frontend-assets/images/transparent.png"
                                data-bgcolor='#f9f9f9' style='background:#f9f9f9' alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 17 -->
                            <div class="tp-caption     rev_group" id="slide-67-layer-6"
                                data-x="['left','left','left','center']" data-hoffset="['200','50','50','0']"
                                data-y="['middle','middle','middle','bottom']" data-voffset="['0','0','0','50']"
                                data-width="['800','450','350','350']" data-height="['840','480','380','380']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; min-width: 800px; max-width: 800px; max-width: 840px; max-width: 840px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 18 -->
                                <div class="tp-caption   tp-resizeme" id="slide-67-layer-7"
                                    data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['20','20','20','20']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+340","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home01-slide-04.png" alt=""
                                        data-ww="['454px','254px','184px','184px']"
                                        data-hh="['454px','254','184','184']" data-no-retina> </div>

                                <!-- LAYER NR. 19 -->
                                <div class="tp-caption   tp-resizeme" id="slide-67-layer-1"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','0','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+550","speed":1680,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;">
                                    <img src="{{ asset('/') }}frontend-assets/images/hero/home-1/home01-slide-03.png" alt=""
                                        data-ww="['641px','380px','300px','300px']"
                                        data-hh="['680px','403','318','318']" data-no-retina> </div>

                                <!-- LAYER NR. 20 -->
                                <div class="tp-caption   tp-resizeme" id="slide-67-layer-8"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['24','24','18','18']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+760","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 8; white-space: nowrap; font-size: 24px; line-height: 32px; font-weight: 700; color: #1a1a1a;font-family:Arimo;font-style:italic;">
                                    only $599.99 </div>
                            </div>

                            <!-- LAYER NR. 21 -->
                            <div class="tp-caption     rev_group" id="slide-67-layer-2"
                                data-x="['right','right','right','center']" data-hoffset="['199','50','50','0']"
                                data-y="['middle','middle','middle','top']" data-voffset="['0','0','0','50']"
                                data-width="['570','470','320','320']" data-height="['280','220','180','180']"
                                data-whitespace="nowrap" data-type="group" data-responsive_offset="on"
                                data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]" data-marginbottom="[0,0,0,0]"
                                data-marginleft="[0,0,0,0]" data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                style="z-index: 9; min-width: 570px; max-width: 570px; max-width: 280px; max-width: 280px; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #ffffff;">
                                <!-- LAYER NR. 22 -->
                                <div class="tp-caption   tp-resizeme" id="slide-67-layer-5"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['24','24','18','18']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                                    data-frames='[{"delay":"+460","speed":1680,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                                    style="z-index: 10; white-space: nowrap; font-size: 24px; line-height: 28px; font-weight: 400; color: #1a1a1a;font-family:Arimo;">
                                    Accent Chair Rocker for Living Room </div>

                                <!-- LAYER NR. 23 -->
                                <div class="tp-caption   tp-resizeme" id="slide-67-layer-3"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']"
                                    data-voffset="['-50','-30','-30','-30']" data-fontsize="['106','80','60','60']"
                                    data-lineheight="['110','80','60','60']" data-letterspacing="['-4','-4','0','0']"
                                    data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                    data-responsive_offset="on"
                                    data-frames='[{"delay":"+790","speed":1680,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 11; white-space: nowrap; font-size: 106px; line-height: 110px; font-weight: 400; color: #1a1a1a; letter-spacing: -4px;font-family:Arimo;">
                                    sale 20% </div>

                                <!-- LAYER NR. 24 -->
                                <div class="tp-caption rev-btn " id="slide-67-layer-4"
                                    data-x="['left','left','left','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                                    data-fontsize="['16','16','16','14']" data-width="none" data-height="none"
                                    data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                    data-frames='[{"delay":"+1020","speed":1680,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(26,26,26);bc:rgb(26,26,26);"}]'
                                    data-margintop="[0,0,0,0]" data-marginright="[0,0,0,0]"
                                    data-marginbottom="[0,0,0,0]" data-marginleft="[0,0,0,0]"
                                    data-textAlign="['inherit','inherit','inherit','inherit']"
                                    data-paddingtop="[16,16,16,10]" data-paddingright="[45,45,45,30]"
                                    data-paddingbottom="[16,16,16,10]" data-paddingleft="[45,45,45,30]"
                                    style="z-index: 12; white-space: nowrap; font-size: 16px; line-height: 28px; font-weight: 700; color: #1a1a1a;font-family:Arimo;text-transform:capitalize;background-color:rgba(26,26,26,0);border-color:rgba(26,26,26,0.5);border-style:solid;border-width:2px 2px 2px 2px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                    Shop Now </div>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!--slider section end-->
        <!-- About Section Start -->
        <div class="about-section section pt-100 pt-lg-80 pt-md-70 pt-sm-55 pt-xs-45">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="about-area">
                            <h2 class="title">CLASSIC- Modern Furniture</h2>
                            <p>Donec nunc nunc, gravida vitae diam vel, varius interdum erat. Quisque a nunc vel diam
                                auctor commodo. Curabitur blandit ultrices ex. Curabitur ut magna dignissim, dignissim
                                neque et, placerat risus. Morbi dictum lectus quam</p>
                            <a href="#" class="read-btn border-none">DISCOVER MORE</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="about-intro-image">
                            <div class="about-image">
                                <img src="{{ asset('/') }}frontend-assets/images/about/about1.jpg"
                                    alt="">
                            </div>
                            <div class="play-btn-area">
                                <a href="https://player.vimeo.com/video/172601404" class="play-btn video-popup"><img
                                        src="assets/images/icons/play-btn-02.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->


        <!-- Banner Section Start -->
        <div
            class="banner-section section pt-85 pt-lg-65 pt-md-60 pt-sm-40 pt-xs-40 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container-fluid pl-30 pr-30">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center mb-50 mb-xs-30">
                            <h2>Popular Collections</h2>
                            <p>Donec nunc nunc, gravida vitae diam vel, varius interdum erat. Quisque a nunc vel diam
                                auctor commodo. Curabitur blandit ultrices ex.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <div class="banner-img">
                                <a href="#">
                                    <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-01.jpg"
                                        alt="">
                                    <span class="title">Chair Living Room</span>
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                <!-- Single Banner Start -->
                                <div class="single-banner mb-30">
                                    <div class="banner-img">
                                        <a href="#">
                                            <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-02.jpg"
                                                alt="">
                                            <span class="title left">Modern Lamp</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Banner End -->
                            </div>
                            <div class="col-12">
                                <!-- Single Banner Start -->
                                <div class="single-banner mb-30">
                                    <div class="banner-img">
                                        <a href="#">
                                            <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-03.jpg"
                                                alt="">
                                            <span class="title right">Mid-Century Sofa</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Banner End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <!-- Single Banner Start -->
                        <div class="single-banner mb-30">
                            <div class="banner-img">
                                <a href="#">
                                    <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-04.jpg"
                                        alt="">
                                    <span class="title">Throw Pillow Cover</span>
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->



        <!-- Product Section Start -->
        <div
            class="product-section section bg-gray pt-80 pt-lg-60 pt-md-55 pt-sm-45 pt-xs-35 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div
                class="container-fluid pl-80 pr-80 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-menu mb-90 mb-lg-70 mb-md-60 mb-sm-50 mb-xs-30">
                            <ul class="nav justify-content-center">
                                <li><a class="active show" data-bs-toggle="tab" href="#new">New Products</a>
                                </li>
                                <li><a data-bs-toggle="tab" href="#top">Top Sale</a></li>
                                <li><a data-bs-toggle="tab" href="#hot">Hot Trend</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content">
                            <div id="new" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                    <span class="out-stock">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product01.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product02.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product03.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Bathroom Storage
                                                        Floor Cabinet</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£584.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product04.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product05.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Tiers Plant Rack
                                                        Indoor Floor</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£316.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product06.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product07.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Contemporary
                                                        Bathroom Floor Storage</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product08.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product09.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Casons Sofa
                                                        Mocha</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£615.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                    <span class="out-stock top-80">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product10.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product11.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Constance Slip
                                                        Chair Covers</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£290.00</span> - <span
                                                        class="discounted-price">£328.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product12.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product13.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product14.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product15.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£565.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product16.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product17.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Knox Chaise Sofa
                                                        Gray</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£589.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                    <span class="out-stock">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product18.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product19.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">The Parra Sofa
                                                        Granite</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£328.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product20.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product21.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Office chair with
                                                        armrests</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£102.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product22.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product23.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Plant in August
                                                        Planter</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£25.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                </div>
                            </div>
                            <div id="top" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                    <span class="out-stock">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product24.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product02.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product26.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product27.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Bathroom Storage
                                                        Floor Cabinet</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£584.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product28.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Tiers Plant Rack
                                                        Indoor Floor</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£316.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product29.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product30.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Contemporary
                                                        Bathroom Floor Storage</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product31.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product32.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Casons Sofa
                                                        Mocha</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£615.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                    <span class="out-stock top-80">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product33.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product34.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Constance Slip
                                                        Chair Covers</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£290.00</span> - <span
                                                        class="discounted-price">£328.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product35.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product36.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product37.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product38.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£565.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                </div>
                            </div>
                            <div id="hot" class="tab-pane">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product06.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product07.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Contemporary
                                                        Bathroom Floor Storage</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                    <span class="out-stock">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product24.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product02.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product26.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product27.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Bathroom Storage
                                                        Floor Cabinet</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£584.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product28.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Tiers Plant Rack
                                                        Indoor Floor</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£316.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="out-stock top-0">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product29.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product30.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Contemporary
                                                        Bathroom Floor Storage</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                    <span class="out-stock">Out of stock</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product01.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product02.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Coaster 526322-CO
                                                        Loveseat</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£423.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product03.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Bathroom Storage
                                                        Floor Cabinet</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£584.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                        <!--  Single Grid product Start -->
                                        <div class="single-grid-product mb-30">
                                            <div class="product-image">
                                                <div class="product-label">
                                                    <span class="new">New</span>
                                                </div>
                                                <a href="single-product.html">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product04.jpg"
                                                        class="img-fluid" alt="">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product05.jpg"
                                                        class="img-fluid" alt="">
                                                </a>

                                                <div class="product-action">
                                                    <ul>
                                                        <li><a title="Quick Shop" href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><i
                                                                    class="fa fa-search-plus"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="compare.html"><i
                                                                    class="fa fa-bar-chart"></i></a></li>
                                                        <li><a href="cart.html"><i
                                                                    class="fa fa-shopping-cart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="title"><a href="single-product.html">Tiers Plant Rack
                                                        Indoor Floor</a></h3>
                                                <p class="product-price"><span
                                                        class="main-price discounted">£316.00</span> - <span
                                                        class="discounted-price">£672.00</span></p>
                                                <div class="product-rating">
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  Single Grid product End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Section End -->














        <!-- Modern Decorate Banner Section Start -->
        <div class="modern-decorate-banner-section section height image-fixd bg-image d-flex align-items-center"
            data-bg="{{ asset('/') }}frontend-assets/images/banner/modern-banner.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 offset-md-6">
                        <div class="modern-decorate-banner-content">
                            <h2><a href="#">Modern Living <br> Room Collections</a></h2>
                            <a class="shop-btn" href="shop.html">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modern Decorate Banner Section End -->




























        <!-- Modern Decorate Banner Section Start -->
        <div class="banner-section section">
            <div class="container-fluid pl-0 pr-0">
                <div class="row g-0">
                    <div class="col-md-6 col-sm-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner color-white">
                            <div class="banner-img">
                                <a href="#">
                                    <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-05.jpg"
                                        alt="">
                                    <span class="title left">Modern Sofa</span>
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner color-white">
                            <div class="banner-img">
                                <a href="#">
                                    <img src="{{ asset('/') }}frontend-assets/images/banner/home01-banner-06.jpg"
                                        alt="">
                                    <span class="title left">Outdoor Design</span>
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Modern Decorate Banner Section End -->
























        <!-- Blog Section Start -->
        <div
            class="blog-section section pt-85 pt-lg-65 pt-md-60 pt-sm-50 pt-xs-45 pb-50 pb-lg-30 pb-md-20 pb-sm-10 pb-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center before-none">
                            <h2>Latest Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog col-lg-6 col-sm-6 col-12 mb-30">
                        <div class="blog-inner">
                            <div class="media-image"><a href="blog-details.html" class="image"><img
                                        src="{{ asset('/') }}frontend-assets/images/blog/blog01.jpg"
                                        alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">How to open interior shop?</a></h3>
                                <ul class="meta">
                                    <li><i class="dlicon ui-2_time"></i> <a href="#">April 11, 2019</a></li>
                                    <li>By <a href="#">admin</a></li>
                                    <li><i class="dlicon shopping_tag"></i> <a href="#">Furniture</a></li>
                                </ul>
                                <div class="blog-btn">
                                    <a href="blog-details.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog col-lg-6 col-sm-6 col-12 mb-30">
                        <div class="blog-inner">
                            <div class="media-image"><a href="blog-details.html" class="image"><img
                                        src="{{ asset('/') }}frontend-assets/images/blog/blog02.jpg"
                                        alt=""></a></div>
                            <div class="content">
                                <h3 class="title"><a href="blog-details.html">Beautiful Corner</a></h3>
                                <ul class="meta">
                                    <li><i class="dlicon ui-2_time"></i> <a href="#">April 11, 2019</a></li>
                                    <li>By <a href="#">admin</a></li>
                                    <li><i class="dlicon shopping_tag"></i> <a href="#">Real Estate</a></li>
                                </ul>
                                <div class="blog-btn">
                                    <a href="blog-details.html" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Newslatter Section Start -->
        <div
            class="newslatter-section section bg-skyblue pt-85 pt-lg-65 pt-md-60 pt-sm-50 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center before-none mb-30">
                            <h2>Stay With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newsletter-form">
                            <form id="mc-form" class="mc-form">
                                <input type="email" placeholder="Enter Your Email Address Here..."
                                    required="" name="EMAIL">
                                <button type="submit" value="submit">SUBSCRIBE</button>
                            </form>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter Section End -->







        <!-- Instagram Section Start -->
        <div class="instagram-section section">
            <div class="instafeed" data-limit="4" data-resolution="standard_resolution">
                <ul id="instagram-feed"></ul>
            </div>
        </div>
        <!-- Instagram Section End -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                        class="dlicon ui-1_simple-remove"></i></button>
            </div>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-details-tab">
                                    <div class="product-tabs pro-dec-big-img-slider">
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <div class="product-label">
                                                    <span class="sale">-20%</span>
                                                    <span class="new">New</span>
                                                </div>
                                                <a
                                                    href="{{ asset('/') }}frontend-assets/images/product/product-big/product01.jpg">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product-big/product01.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom-popup">
                                                <a
                                                    href="assets/{{ asset('/') }}frontend-assets/images/product/product-big/product02.jpg">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product-big/product02.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a
                                                    href="{{ asset('/') }}frontend-assets/images/product/product-big/product03.jpg">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product-big/product03.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a
                                                    href="{{ asset('/') }}frontend-assets/images/product/product-big/product04.jpg">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product-big/product04.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                            <a class="easyzoom-pop-up img-popup"
                                                href="{{ asset('/') }}frontend-assets/images/product/product-big/product04.jpg"><i
                                                    class="dlicon ui-1_zoom-in"></i></a>
                                        </div>
                                        <div class="easyzoom-style">
                                            <div class="easyzoom easyzoom--overlay">
                                                <a
                                                    href="{{ asset('/') }}frontend-assets/images/product/product-big/product05.jpg">
                                                    <img src="{{ asset('/') }}frontend-assets/images/product/product-big/product05.jpg"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-dec-slider">
                                        <div class="product-dec-small active">
                                            <img src="{{ asset('/') }}frontend-assets/images/product/product-small/product01.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="{{ asset('/') }}frontend-assets/images/product/product-small/product02.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="{{ asset('/') }}frontend-assets/images/product/product-small/product03.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="{{ asset('/') }}frontend-assets/images/product/product-small/product04.jpg"
                                                alt="">
                                        </div>
                                        <div class="product-dec-small">
                                            <img src="{{ asset('/') }}frontend-assets/images/product/product-small/product05.jpg"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Knox Chaise Sofa Gray</h2>
                                    <div class="product-rating-stock">
                                        <div class="product-dec-rating-reviews">
                                            <div class="product-dec-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-dec-reviews">
                                                <a> (3 customer reviews)</a>
                                            </div>
                                        </div>
                                        <div class="pro-stock">
                                            <span><i class="dlicon ui-1_check-circle-08"></i>in stock</span>
                                        </div>
                                    </div>
                                    <p class="product-price product-details-price"><span
                                            class="main-price discounted"><del>£723.00</del></span> <span
                                            class="discounted-price">£672.00</span></p>
                                    <p class="fz-16">Donec nunc nunc, gravida vitae diam vel, varius interdum erat.
                                        Quisque a nunc vel diam auctor commodo. Curabitur blandit ultrices exurabitur ut
                                        magna dignissim, dignissi, Nullam vitae venenatis elit. Proin dui lacus, viverra
                                        at imperdiet non, facilisis eget orci. Vivamus ac elit tellus. Vestibulum nulla
                                        dui, consequat vitae diam eu, pretium finibus libero. Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam
                                        vitae neque tellus.</p>
                                    <div class="pro-details-quality">
                                        <div class="quantity quantity--2">
                                            <input type="text" class="quantity-input" name="qty"
                                                id="qty-4" value="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#">Add To Cart</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="#"><i class="fa fa-files-o"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-sku">
                                        <span>SKU: D-12525</span>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Categories : </span>
                                        <ul>
                                            <li><a href="#">Fruniture,</a></li>
                                            <li><a href="#">Demo 03 - New Arrival,</a></li>
                                            <li><a href="#">Demo 14 - Top Sale,</a></li>
                                            <li><a href="#">Home Fruniture</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>Tag : </span>
                                        <ul>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Fashion</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-html-custom">
                                        <a href="#"><i class="dlicon shopping_delivery-fast"></i>Store
                                            availability</a>
                                        <a href="#"><i class="dlicon location_pin"></i>Delivery and return</a>
                                        <a href="#"><i class="dlicon design_measure-17"></i>Size Guide</a>
                                    </div>
                                    <div class="pro-details-social">
                                        <ul>
                                            <li><a class="facebook" href="#"><i
                                                        class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i
                                                        class="fa fa-twitter"></i></a></li>
                                            <li><a class="google" href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li><a class="pinterest" href="#"><i
                                                        class="fa fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

        <!-- Start Footer Area -->
        <footer
            class="footer-default section bg-black pl-100 pr-100 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
            <!-- Start Footer Top -->
            <div class="footer-top-area pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-10 pb-xs-0">
                <div class="row justify-content-between">
                    <!-- Start Single Widget -->
                    <div
                        class="footer-widget footer-column footer-column__a col-xl-5 col-lg-12 col-md-12 col-sm-6 col-12 text-xl-left mb-40">
                        <div class="inner">
                            <div class="logo text-white fs-2 fw-bold ">
                                {{-- <a href="index.html">
                                    <img src="{{ asset('/') }}frontend-assets/images/logo-white.png"
                                        alt="logo white">
                                </a> --}} Classic Metal
                            </div>
                            <div class="footer-content">
                                <p class="pra"> Donec nunc nunc, gravida vitae diam vel, varius interdum erat.
                                    Quisque a nunc vel diam auctor commodo.</p>
                                <div class="footer-social-icon">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div
                        class="footer-widget footer-column footer-column__b col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 mb-40">
                        <div class="inner">
                            <h4 class="fontWeight400 text-white ft-title">Company</h4>
                            <div class="footer-content">
                                <ul class="quick-link">
                                    <li><a href="#"><span>About Us</span></a></li>
                                    <li><a href="#"><span>Help Center</span></a></li>
                                    <li><a href="#"><span>Licenses</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div
                        class="footer-widget footer-column footer-column__b col-xl-2 col-lg-4 col-md-4 col-sm-6 col-12 mb-40">
                        <div class="inner">
                            <h4 class="fontWeight400 text-white ft-title">Userful</h4>
                            <div class="footer-content">
                                <ul class="quick-link">
                                    <li><a href="#"><span>The Collections</span></a></li>
                                    <li><a href="#"><span>Size Guide</span></a></li>
                                    <li><a href="#"><span>Lookbook</span></a></li>
                                    <li><a href="#"><span>Instagram Shop</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                    <!-- Start Single Widget -->
                    <div
                        class="footer-widget footer-column footer-column__b col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-40">
                        <div class="inner">
                            <h4 class="fontWeight400 text-white ft-title">Contact Us</h4>
                            <div class="footer-content">
                                <div class="address">
                                    <p><span class="list-icon"><i class="dlicon ui-1_email-85"></i></span> <span
                                            class="list-content">info@classicmetal.com</span></p>
                                    <p><span class="list-icon"><i class="dlicon ui-3_phone-call"></i></span> <span
                                            class="list-content">01723459867</span></p>
                                    <p><span class="list-icon"><i class="dlicon ui-2_time-clock"></i></span> <span
                                            class="list-content">9:00am - 19:00pm <br> Sunday - Thrusday</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Widget -->

                </div>
            </div>
            <!-- End Footer Top -->

            <!-- Start Copyright Area -->
            <div class="copyright-area">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="content text-center">
                            <p>© 2023 Classic Metal Store All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </footer>
        <!-- End Footer Area -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="{{ asset('/') }}frontend-assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>


    <script src="{{ asset('/') }}frontend-assets/js/rev/jquery.themepunch.revolution.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/jquery.themepunch.tools.min.js"></script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.layeranimation.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('/') }}frontend-assets/js/rev/revolution.extension.video.min.js"></script>

    <script src="{{ asset('/') }}frontend-assets/js/rev/revoulation.js"></script>

    <script src="{{ asset('/') }}frontend-assets/js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
    <Script>
        if ($('#htmap2').length) {
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 12,

                    scrollwheel: false,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.7286, 90.3854), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [


                        {
                            "featureType": "administrative",
                            "elementType": "all",
                            "stylers": [{
                                "hue": "#ff0000"
                            }]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#888888"
                            }]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "hue": "#ff0000"
                            }]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text",
                            "stylers": [{
                                    "color": "#6e6e6e"
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#6f6b6b"
                            }]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "labels.text",
                            "stylers": [{
                                "color": "#c5c5c5"
                            }]
                        },
                        {
                            "featureType": "landscape.natural",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#cfcfcf"
                            }]
                        },
                        {
                            "featureType": "landscape.natural.landcover",
                            "elementType": "all",
                            "stylers": [{
                                "hue": "#ff0000"
                            }]
                        },
                        {
                            "featureType": "landscape.natural.landcover",
                            "elementType": "geometry",
                            "stylers": [{
                                "hue": "#ff0000"
                            }]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.text",
                            "stylers": [{
                                    "visibility": "off"
                                },
                                {
                                    "color": "#909090"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "poi.medical",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#e5e5e5"
                            }]
                        },
                        {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#e5e5e5"
                            }]
                        },
                        {
                            "featureType": "poi.place_of_worship",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#ff0000"
                            }]
                        },
                        {
                            "featureType": "poi.sports_complex",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f7f7f7"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#ffffff"
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "gamma": 7.18
                            }]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "labels.text",
                            "stylers": [{
                                "visibility": "simplified"
                            }]
                        },
                        {
                            "featureType": "transit.line",
                            "elementType": "geometry",
                            "stylers": [{
                                "gamma": 0.48
                            }]
                        },
                        {
                            "featureType": "transit.station",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [{
                                    "color": "#bcbcbc"
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [{
                                "color": "#ffffff"
                            }]
                        }
                    ]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('htmap2');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var contentString = '<div id="content">' +
                    '<div id="siteNotice">' +
                    '</div>' +
                    '<div id="bodyContent">' +
                    '<p>Barisal Polytechnic Institute, </br>Street Name, </br>Barisal, Bangladesh</p>' +
                    '</div>' +
                    '</div>';
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.7286, 90.3854),
                    map: map,
                    title: 'RAZ',
                    icon: 'assets/images/logo-contact.png',
                    animation: google.maps.Animation.BOUNCE

                });
            }
        }
    </Script>



</body>
</html>
