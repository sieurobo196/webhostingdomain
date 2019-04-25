<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mẫu bất động sản</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Apartment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/apartment_real_estates/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/apartment_real_estates/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/apartment_real_estates/jquery-2.1.4.min.js"></script>
        <!--FlexSlider-->
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/apartment_real_estates/flexslider.css" type="text/css" media="screen" />
        <script defer src="<?php echo $this->request->webroot; ?>js/web-samples/apartment_real_estates/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!--End-slider-script-->
        <!-- //js -->
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/apartment_real_estates/font-awesome.min.css" />
        <!-- //font-awesome icons -->
        <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    </head>	
    <body>

        <!-- banner -->
        <div class="banner">
            <!-- header -->
            <div class="w3_navigation">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="cl-effect-5" id="cl-effect-5">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
                                    <li><a href="about.html"><span data-hover="About Us">About Us</span></a></li>
                                    <li><a href="gallery.html"><span data-hover="Gallery">Gallery</span></a></li>
                                    <li><a href="icons.html"><span data-hover="Icons">Icons</span></a></li>
                                    <li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>	
                    <div class="w3_navigation_pos">
                        <h1><a href="index.html">Apartment</a></h1>
                    </div>
                </div>
            </div>
            <!-- //header -->
            <div class="banner-info">
                <div class="container">
                    <div class="flexslider-info">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="w3l-info">
                                            <h3>Apartments <br>on Sydney City</br></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="w3l-info">
                                            <h3>Apartments <br>on Melbourne City</br></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="w3l-info">
                                            <h3>Apartments <br>on Perth City</br></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="w3l-info">
                                            <h3>Apartments <br>on Sydney City</br></h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="w3l-info">
                                            <h3>Apartments <br>on Melbourne City</br></h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="wthree-ban">
                        <div class="w3l-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="agileinfo-news-button">
                            <a href="#" class="hvr-shutter-in-horizontal" data-toggle="modal" data-target="#myModal"> Read More</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //banner -->