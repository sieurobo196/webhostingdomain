<?php
$this->layout = false;
?>
<html lang="zxx">

    <head>
        <title>Mẫu bất động sản</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Luxury Homes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
            window.scrollTo(0, 1);
            }
        </script>
        <!-- //for-mobile-apps -->
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/luxury_homes_real_estates/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/luxury_homes_real_estates/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/luxury_homes_real_estates/gallery.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/luxury_homes_real_estates/font-awesome.css" rel="stylesheet">
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/luxury_homes_real_estates/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
        <!-- css files -->
        <link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext"
              rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!-- //css files -->
        <style>
            .show-index{
                display: none;
            }
            .show-page{
                display: none;
            }
        </style>
    </head>

    <body>
        <!-- banner -->
        <div class="banner-main">
            <div class="<?php echo "$activeBanner"; ?>" >
                <!--header-->
                <div class="header">
                    <div class="container">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <h1><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates"]); ?>"><span>L</span>uxury <span>H</span>omes</a></h1>
                            </div>
                            <!--navbar-header-->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates"]); ?>" class="<?php echo $activeMenu == 'index' ? 'active' : '';?>">Home</a></li>
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates/about"]); ?>" class="<?php echo $activeMenu == 'about' ? 'active' : '';?>">About</a></li>
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates/gallery"]); ?>" class="<?php echo $activeMenu == 'gallery' ? 'active' : '';?>">Gallery</a></li>
                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates/icons"]); ?>" class="<?php echo $activeMenu == 'icons' ? 'active' : '';?>">Web Icons</a></li>
                                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates/codes"]); ?>" class="<?php echo $activeMenu == 'codes' ? 'active' : '';?>">Short Codes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates/contact"]); ?>" class="<?php echo $activeMenu == 'contact' ? 'active' : '';?>">Mail Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul>
                        <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Click enter after typing...">
                        </form>
                    </div>
                </div>
                <!--//header-->
                <div class="w3_banner_inf <?php echo $activeDivPage?>">
                    <div class="w3_banner_info_grid">
                        <h3 class="test"><span class="char1" style="opacity: 1;">A</span><span class="char2" style="opacity: 1;">t</span><span class="char3" style="opacity: 1;">t</span><span class="char4" style="opacity: 1;">r</span><span class="char5" style="opacity: 1;">a</span><span class="char6" style="opacity: 1;">c</span><span class="char7" style="opacity: 1;">t</span><span class="char8" style="opacity: 1;">i</span><span class="char9" style="opacity: 1;">v</span><span class="char10" style="opacity: 1;">e</span><span class="char11" style="opacity: 1;"> </span><span class="char12" style="opacity: 1;">h</span><span class="char13" style="opacity: 1;">o</span><span class="char14" style="opacity: 1;">m</span><span class="char15" style="opacity: 1;">e</span><span class="char16" style="opacity: 1;"> </span><span class="char17" style="opacity: 1;">p</span><span class="char18" style="opacity: 1;">u</span><span class="char19" style="opacity: 1;">r</span><span class="char20" style="opacity: 1;">c</span><span class="char21" style="opacity: 1;">h</span><span class="char22" style="opacity: 1;">a</span><span class="char23" style="opacity: 1;">s</span><span class="char24" style="opacity: 1;">e</span><span class="char25" style="opacity: 1;"> </span><span class="char26" style="opacity: 1;">o</span><span class="char27" style="opacity: 1;">f</span><span class="char28" style="opacity: 1;">f</span><span class="char29" style="opacity: 1;">e</span><span class="char30" style="opacity: 1;">r</span><span class="char31" style="opacity: 1;">s</span></h3>

                        <p>We deal with different kinds of properties <span>Start browsing now!</span></p>

                    </div>
                    <div class="wthree_banner_grids">
                        <div class="col-xs-3 wthree_banner_grid">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <h4>Rentals</h4>
                        </div>
                        <div class="col-xs-3 wthree_banner_grid">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <h4>Mortgage</h4>
                        </div>
                        <div class="col-xs-3 wthree_banner_grid">
                            <i class="fa fa-building-o" aria-hidden="true"></i>
                            <h4>Office spaces</h4>
                        </div>
                        <div class="col-xs-3 wthree_banner_grid">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <h4>Loans</h4>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="w3ls_banner_info_grids <?php echo $activeDivPage?>">
                <div class="container">
                    <div class="col-xs-3 w3ls_banner_info_grid">
                        <div class="w3l_banner_info_grid">
                            <div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
                                <i class="hi-icon hi-icon-archive fa fa-home"> </i>
                            </div>
                            <h4>Home Inspections</h4>
                        </div>
                    </div>
                    <div class="col-xs-3 w3ls_banner_info_grid">
                        <div class="w3l_banner_info_grid">
                            <div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
                                <i class="hi-icon hi-icon-archive fa fa-bullhorn"> </i>
                            </div>
                            <h4>Property Insurance</h4>
                        </div>
                    </div>
                    <div class="col-xs-3 w3ls_banner_info_grid">
                        <div class="w3l_banner_info_grid">
                            <div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
                                <i class="hi-icon hi-icon-archive fa fa-map-marker"> </i>
                            </div>
                            <h4>Best Locations</h4>
                        </div>
                    </div>
                    <div class="col-xs-3 w3ls_banner_info_grid">
                        <div class="w3l_banner_info_grid">
                            <div class="w3_banner_info_grid hi-icon-effect-4 hi-icon-effect-4b">
                                <i class="hi-icon hi-icon-archive fa fa-clone"> </i>
                            </div>
                            <h4>Lots & Land</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <div class="services-breadcrumb <?php echo $activeDivIndex?>">
            <div class="agile_inner_breadcrumb">
                <ul class="w3_short">
                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "luxury_homes_real_estates"]); ?>">Home</a><i>>></i></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- //banner -->


        <!-- js-scripts -->
        <!-- js -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/bootstrap.js"></script>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->
        <!-- //js -->
        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        <!--search jQuery-->
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/main.js"></script>
        <!--//search jQuery-->
        <!-- tabs -->
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/easy-responsive-tabs.js"></script>
        <script>
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
                $('#verticalTab').easyResponsiveTabs({
                    type: 'vertical',
                    width: 'auto',
                    fit: true
                });
            });
        </script>
        <!-- //tabs -->
        <!-- stats -->
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/waypoints.min.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/counterup.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1000
                });
            });
        </script>
        <!-- stats -->
        <!-- flexisel -->
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: false,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/jquery.flexisel.js"></script>
        <!-- flexisel -->
        <!-- smooth scrolling -->
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/SmoothScroll.min.js"></script>
        <!-- //smooth scrolling -->
        <!-- text-effect -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/jquery.transit.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/luxury_homes_real_estates/jquery.textFx.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.test').textFx({
                    type: 'fadeIn',
                    iChar: 100,
                    iAnim: 1000
                });
            });
        </script>
        <!-- //text-effect -->
        <!-- js-scripts -->
        