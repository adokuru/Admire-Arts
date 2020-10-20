<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>@yield('title') - Admire Arts - Discover &amp; Buy Art</title>
        <meta
            property="og:title"
            content="Admire Arts - Discover &amp; Buy Art"
        />
        <meta
            name="description"
            content="Admire Arts is the world’s largest online art marketplace. Browse over 1 million artworks by iconic and emerging artists from 4000+ galleries and top auction houses."
        />
        <meta
            property="og:description"
            content="Admire Arts is the world’s largest online art marketplace. Browse over 1 million artworks by iconic and emerging artists from 4000+ galleries and top auction houses."
        />
        <meta
            property="twitter:description"
            content="Admire Arts is the world’s largest online art marketplace. Browse over 1 million artworks by iconic and emerging artists from 4000+ galleries and top auction houses."
        />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Admire Arts" />
        <link rel="canonical" href="https://www.AdmireArts.net" />
        <meta property="og:url" content="https://www.AdmireArts.net" />
        <meta property="og:image" content="images/resources/Terah1.png" />
        <meta property="twitter:card" content="summary" />
        <meta name="fragment" content="!" />
        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="stylesheet" href="{{asset('css/aos.css')}}" />
        <link rel="stylesheet" href="{{asset('css/imp.css')}}" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/custom-animate.css')}}" />
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />

        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Favicon -->
        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{asset('images/favicon/apple-touch-icon.png')}}"
        />
        <link
            rel="icon"
            type="image/png"
            href="{{asset('images/favicon/fav-32.png')}}"
            sizes="32x32"
        />
        <link
            rel="icon"
            type="image/png"
            href="{{asset('images/favicon/fav-32.png')}}"
            sizes="16x16"
        />

        <!-- Fixing Internet Explorer-->
        <!--[if lt IE 9]>
            <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="boxed_wrapper">
            <!-- <div class="preloader"></div>  -->

            <!-- main header -->
            <header class="main-header">
                <!--Start header top -->
                <div class="header-top bg-dark">
                    <div class="container">
                        <div class="outer-box clearfix">
                            <!--Top Left-->
                            <div class="header-top-left float-left">
                                <ul>
                                    <li>
                                        <a href="/login" class="text-white"
                                            >Login</a
                                        >
                                    </li>
                                </ul>
                            </div>
                            <!--Top Right-->
                            <div class="header-top-right float-right">
                                <div class="phone-num">
                                    <a href="tel:1309-650-1352"
                                        >Phone:+1 (309) 650-1352</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End header top -->

                <!--Start Header upper -->
                <div class="header-upper">
                    <div class="container clearfix">
                        <div class="outer-box clearfix bg-white">
                            <div class="header-upper-left clearfix float-left">
                                <div class="logo">
                                    <a href="/"
                                        ><img
                                            src="{{asset('images/resources/Terah1.png')}}"
                                            alt="Awesome Logo"
                                            title=""
                                    /></a>
                                </div>
                            </div>
                            <div
                                class="header-upper-right float-right clearfix pt-4"
                            >
                                <div class="nav-outer clearfix">
                                    <!-- Main Menu -->
                                    <nav class="main-menu navbar-expand-lg">
                                        <div class="navbar-header">
                                            <!-- Toggle Button -->
                                            <button
                                                type="button"
                                                class="navbar-toggle"
                                                data-toggle="collapse"
                                                data-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent"
                                                aria-expanded="false"
                                                aria-label="Toggle navigation"
                                            >
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>

                                        <div
                                            class="navbar-collapse collapse clearfix"
                                            id="navbarSupportedContent"
                                        >
                                            <ul class="navigation clearfix">
                                                <li>
                                                    <a href="/our-artists"
                                                        >Artist</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="/artworks"
                                                        >Artworks</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="/auctions"
                                                        >Auctions</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="/view-rooms"
                                                        >Viewing Rooms</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="/Editorial"
                                                        >Editorial</a
                                                    >
                                                </li>

                                                <li class="dropdown">
                                                    <a href="#">More</a>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="/view-rooms"
                                                                >Galleries</a
                                                            >
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="/view-rooms"
                                                                >Museums</a
                                                            >
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                    <!-- Main Menu End-->
                                    <div class="menu-right-content">
                                        <div class="outer-search-box-style1">
                                            <div class="seach-toggle">
                                                <i class="fa fa-search"></i>
                                            </div>
                                            <ul class="search-box">
                                                <li>
                                                    <form
                                                        method="post"
                                                        action="#"
                                                    >
                                                        <div class="form-group">
                                                            <input
                                                                type="search"
                                                                name="search"
                                                                placeholder="Search for Arts"
                                                                required
                                                            />
                                                            <button
                                                                type="submit"
                                                            >
                                                                <i
                                                                    class="fa fa-search"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--End Header Upper-->
            
            @if (Request::path() == '/')
            @include('sections/slider')
            @endif
            @yield('content')
            @include('sections/subscribe')
            <!--Start footer area-->

            <footer class="footer-style2-area chnage-bg-style">
                <div
                    class="layer-outer-bg"
                    style="background-image:url(images/parallax-background/footer-style4-bg.jpg);"
                ></div>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <!--Start single footer widget-->
                            <div
                                class="col-xl-3 col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                            >
                                <div
                                    class="single-footer-widget clr-white marbtm50"
                                >
                                    <div class="footer-logo">
                                        <a href="index-2.html"
                                            ><img
                                                src="{{asset('images/resources/Terah1.png')}}"
                                                alt="Footer Logo"
                                        /></a>
                                    </div>
                                    <div class="text">
                                        Admire Arts is a world’s leading galleries, museum collections, foundations, artist estates, art fairs, and benefit auctions, all in one place. 
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div
                                class="col-xl-2 col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                            >
                                <div
                                    class="single-footer-widget clr-white marbtm50"
                                >
                                    <div class="title">
                                        <h3>Extra :-</h3>
                                    </div>
                                    <ul class="social-links">
                                        <li><a href="http://www.twitter.com/share?url={{Request::url()}}">Twitter</a></li>
                                        <li><a href="#">YouTube</a></li>
                                        <li><a href="#">Instagram</a></li>
                                        <li><a href="#">Snapchat</a></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}">Facebook</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div
                                class="col-xl-3 col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                            >
                                <div class="single-footer-widget clr-white">
                                    <div class="title">
                                        <h3>Contacts :-</h3>
                                    </div>
                                    <div class="contact-us">
                                        <p>
                                            A- 3420 Veteran Dr. #201, Pekin,<br />
                                            Illinois, US 61554
                                        </p>
                                        <div class="phone-num">
                                            <a href="tel:1309-650-1352"
                                                >+1 (309) 650-1352</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div
                                class="col-xl-2 col-lg-8 col-md-8 col-sm-12 wow fadeInUp animated"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                            >
                                <div
                                    class="single-footer-widget clr-white opening-hours-box pdtop50"
                                >
                                    <div class="title">
                                        <h3>Open Hours :-</h3>
                                    </div>
                                    <div class="opening-hours">
                                        <p>
                                            Daily 9.30 am–6.00 pm<br />
                                            Sundays &amp; Holidays: Closed
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="single-footer-widget clr-white follow-sociallinks-widget-box"
                                >
                                    <div class="title">
                                        <h3>Follow Us :-</h3>
                                    </div>
                                    <div class="footer-social-links">
                                        <ul class="social-links-style1">
                                            <li>
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"
                                                    ><i
                                                        class="fa fa-facebook"
                                                        aria-hidden="true"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a href="http://www.twitter.com/share?url={{Request::url()}}"
                                                    ><i
                                                        class="fa fa-twitter"
                                                        aria-hidden="true"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@admireart.com"
                                                    ><i
                                                        class="fa fa-envelope"
                                                        aria-hidden="true"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--End single footer widget-->
                            <!--Start single footer widget-->
                            <div
                                class="col-xl-2 col-lg-4 col-md-4 col-sm-12 wow fadeInUp animated"
                                data-wow-delay="100ms"
                                style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;"
                            >
                                <div
                                    class="single-footer-widget clr-white pdtop50"
                                >
                                    <div class="title">
                                        <h3>Quick Link :-</h3>
                                    </div>
                                    <ul class="quick-links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/artworks">Artworks</a></li>
                                        <li><a href="#">Artist</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us </a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--End single footer widget-->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-style2">
                    <div class="container">
                        <div class="copyright-text text-center">
                            <p>
                                © Copyright 2020 Admire Arts. All Rights
                                Reserved
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End footer area-->
        </div>

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="icon-angle"></span>
        </button>

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/appear.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('js/jquery.countTo.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.enllax.min.js') }}"></script>
        <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.paroller.min.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/validation.js') }}"></script>
        <script src="{{ asset('js/wow.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>

        <script src="{{
                asset(
                    'assets/language-switcher/jquery.polyglot.language.switcher.js'
                )
            }}"></script>
        <script src="{{ asset('assets/timepicker/timePicker.js') }}"></script>
        <script src="{{
                asset('assets/html5lightbox/html5lightbox.js')
            }}"></script>
        <!-- jQuery ui js -->
        <script src="{{
                asset('assets/jquery-ui-1.11.4/jquery-ui.js')
            }}"></script>
        <!--Revolution Slider-->
        <script src="{{
                asset(
                    'plugins/revolution/js/jquery.themepunch.revolution.min.js'
                )
            }}"></script>
        <script src="{{
                asset('plugins/revolution/js/jquery.themepunch.tools.min.js')
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.actions.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.carousel.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.kenburn.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.migration.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.navigation.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.parallax.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.slideanims.min.js'
                )
            }}"></script>
        <script src="{{
                asset(
                    'plugins/revolution/js/extensions/revolution.extension.video.min.js'
                )
            }}"></script>
        <script src="{{ asset('js/main-slider-script.js') }}"></script>

        <!-- thm custom script -->
        <script src="{{ asset('js/custom.js') }}"></script>
        
    </body>
</html>
