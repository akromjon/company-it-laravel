<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    @yield('title')
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#101010">
    <!--website-favicon-->
    <link href="images/favicon.png" rel="icon">
    <!--plugin-css-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/plugin.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body class="dg-bg--1 dark-main active-dark">
    <!--Start Preloader -->
    <div class="onloadpage" id="page_loader">
        <div class="pre-content">
            <div class="logo-pre"><img src="#"  class="img-fluid" /></div>
            <div class="pre-text-"><span>Yuklanmoqda...</span></div>
        </div>
    </div>
    <!--End Preloader -->
    <!--Start Header -->
    <header class="nav-bg-b main-header navfix fixed-top menu-white header-pr">
        <div class="container-fluid m-pad">
            <div class="menu-header">
                <div class="dsk-logo"><a class="nav-brand" href="digital-agency.html">
                        <img src="images/white-logo.png" alt="Logo" class="mega-white-logo" />
                        <img src="images/logo.png" alt="Logo" class="mega-darks-logo" />
                    </a></div>
                <div class="custom-nav" role="navigation">
                    <ul class="nav-list">
                        <li class="sbmenu"><a href="#" class="menu-links">Bosh Saxifa</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Xizmatlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Narxlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Blog</a>
                        </li>
                        <li class="contact-show"><a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
                            <div class="contact-inquiry">
                                <div class="contact-info-">
                                    <div class="contct-heading">Bizning Bilan Aloqa</div>
                                    <div class="inquiry-card-nn hrbg">
                                        <ul>
                                            <li class="mb0"><i class="fas fa-phone-alt" aria-hidden="true"></i> <a href="tel:990005303">99 000 53 03</a></li>
                                            <li><i class="fab fa-telegram"></i><a href="https://t.me/akrom_numonov">Telegram</a></li>
                                            <li><i class="fab fa-instagram"></i><a href="https://instagram.com/akrom_numonov">Instagram</a></li>
                                            <li><i class="fas fa-envelope"></i><a href="mailto:akyprog@gmail.com">akyprog@gmail.com</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!--
                74 226 69 77
                93 447 47 74
                tibiyot birlashmasi
                74 228 25 67
                 -->
                <div class="mobile-menu2">
                    <ul class="mob-nav2">
                        <li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1" data-toggle="modal" data-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
                        <li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
                    </ul>
                </div>
            </div>
            <!--Mobile Menu-->
            <nav id="main-nav">
                
            <ul class="footer-address-list link-hover">
                        <li class="sbmenu"><a href="#" class="menu-links">Bosh Saxifa</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Xizmatlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Narxlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Blog</a>
                        </li>
                    </ul>
                <ul class="bottom-nav">
                    <li class="prb">
                        <a href="tel:+11111111111">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                <path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" />
                            </svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="mailto:somewebmedia@gmail.com">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                                <path d="M0 0h24v24H0z" fill="none" /></svg>
                        </a>
                    </li>
                    <li class="prb">
                        <a href="skype:niwax.company?call">
                            <svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z" /></svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <!--Start Footer-->
    <footer class="dark-footer dg-bg--1 pt60 nshape dark-footer-1">
        <div class="container">
            <div class="row justify-content-between">
                
                <div class="col-lg-3 col-sm-6">
                    <h5 class="mb30 mt30">Biz Bilan Bog'lanish</h5>
                    <ul class="footer-address-list ftr-details">
                        <li><i class="fab fa-telegram"></i><a href="https://t.me/akrom_numonov">Telegram</a></li>
                        <li><i class="fab fa-instagram"></i><a href="https://instagram.com/akrom_numonov">Instagram</a></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:akyprog@gmail.com">akyprog@gmail.com</a></li>

                        <p><i class="fas fa-map-marker-alt"></i> Mirzo Ulugbek, Toshkent shaxri, O'zbekiston</p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5 class="mb30 mt30">Saxifalar</h5>
                    <ul class="footer-address-list link-hover">
                        <li class="sbmenu"><a href="#" class="menu-links">Bosh Saxifa</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Xizmatlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Narxlar</a>
                        </li>
                        <li class="sbmenu"><a href="#" class="menu-links">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer-blog-">
                    <h5 class="mb30 mt30">Instagram</h5>
                    <div class="instagram-post">
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-1.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-2.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-3.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-4.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-5.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                        <div class="thumb hover-scale">
                            <a href="#">
                                <img src="images/portfolio/image-6.jpg" alt="instagram images" class="w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row end-footer-">
                <div class="col-lg-6">
                    <div class="footer-copyrights-">
                        <p>Copyright © 2020
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--scroll to top-->
    <a id="scrollUp" href="#top"></a>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/plugin.min.js')}}"></script>
    <script src="{{asset('js/preloader.js')}}"></script>
    <!--common script file-->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>