<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mẫu Bất động sản</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Templates web bất động sản, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/bootstrap.js"></script>
        <!-- stylesheet -->
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/real_states_serenity/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/real_states_serenity/effects.min.css" rel="stylesheet">
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/real_states_serenity/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //stylesheet -->
        <!-- online fonts -->
        <link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,400,400i,600,600i,700,700i,900" rel="stylesheet">
        <!-- //online fonts -->
        <!-- font-awesome-icons -->
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/real_states_serenity/font-awesome.css" type="text/css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
    </head>
    <body>
        <div class="main" id="home">
            <!-- banner -->
            <div class="header-bottom">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <h1><a class="navbar-brand" href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "realStatesSerenity"]); ?>"> <i class="fa fa-home" aria-hidden="true"></i> Serenity</a></h1>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a class="scroll" href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "realStatesSerenity"]); ?>">Trang chủ</a></li>
                                <li><a href="#about" class="scroll hvr-bounce-to-bottom">Giới thiệu</a></li>
                                <li><a href="#services" class="scroll hvr-bounce-to-bottom">Dịch vụ</a></li>
                                <li><a href="#team" class="scroll hvr-bounce-to-bottom">danh sách tư vấn viên</a></li>
                                <li><a href="#testimonials" class="scroll hvr-bounce-to-bottom">Danh hiệu</a></li>
                                <li><a href="#contact" class="scroll hvr-bounce-to-bottom">Liên hệ với chúng tôi</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <div class="header_address_mail">
                <div class="agileits_w3layouts_header_address_grid ">
                    <ul class="list-right w3l">
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="fa fa-phone list-icon" aria-hidden="true"></i> <span>0123 456 789 </span></li>	
                    </ul>
                </div>
            </div>
            <div class="w3layouts-banner-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="jarallax agileits-banner-info">
                                    <div class="caption"><h3>Tìm kiếm căn hộ của bạn</h3>
                                        <button class="btn btn-primary text-center button_w3layouts" data-toggle="modal" data-target="#myModal">READ MORE</button>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="jarallax agileits-banner-info agileits-banner-info1">
                                    <div class="caption"><h3>Tìm kiếm căn hộ của bạn</h3>
                                        <button class="btn btn-primary text-center button_w3layouts" data-toggle="modal" data-target="#myModal">READ MORE</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="agileinfo-social-grids">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <script src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!--banner Slider starts Here-->

        </div>
        <!-- Tooltip -->
        <div class="tooltip-content">
            <div class="modal fade features-modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title text-center">serenity</h4>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/3.jpg" class="img-responsive" alt="image">
                            <p>Hãy đến với chúng tôi để tìm thấy những căn nhà đẹp nhất</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //Tooltip -->	
        <!-- About -->	
        <div class="agileits-about-main" id="about">
            <div class="container">
                <h3 class="w3-title text-center">Giới thiệu</h3>
                <div class="agileits-about">
                    <div class="col-md-6 col-sm-12 col-xs-12 w3l-about-content1">
                        <div class="agile-about-text">
                            <h4 class="w3-title">"Chúng tôi sẽ mang mái ấm đến với bạn"</h4>
                            <p>Tìm một ngôi nhà cho gia định bạn là vinh dự của chúng tôi. Hãy liên hệ với chúng tôi để chọn những thiên đường phù hợp với bạn</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 w3l-about-content2">
                        <video class="agile-media" width="600" controls>
                            <source src="<?php echo $this->request->webroot; ?>videos/web-samples/real_states_serenity/1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- //About -->	
        <!-- services -->
        <div class="jarallax agileits-services-main" id="services">
            <div class="container">
                <h3 class="w3-title text-center">Dịch vụ</h3>
                <div class="agileits-services">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/s1.jpg" alt="">
                            <div class="overlay">
                                <h4>Xem mẫu nhà</h4>
                                <p>Khách hàng sẽ được xem trước các hình ảnh mẫu nhà hiện đang có</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/s2.jpg" alt="">
                            <div class="overlay">
                                <h4>Báo giá</h4>
                                <p>Thông báo cho khách hàng mức giá của ngôi nhà. Tư vấn các ngôi nhà phù hợp giá </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/s3.jpg" alt="">
                            <div class="overlay">
                                <h4>Khuyến mãi</h4>
                                <p>Cung cấp các thông tin ưu đãi và khuyến mãi cho khách hàng</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/14.jpg" alt="">
                            <div class="overlay">
                                <h4>Nhà đất</h4>
                                <p>Cung cấp các thông tin đât đai cho khách hàng.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/s4.jpg" alt="">
                            <div class="overlay">
                                <h4>Cho thuê</h4>
                                <p>Cung cấp các thông tin cho thuê căn hộ.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 w3ls-service">
                        <div class="hover ehover11">
                            <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/10.jpg" alt="">
                            <div class="overlay">
                                <h4>Các đơn vị vay vốn</h4>
                                <p>Cung cấp các đơn vị hỗ trợ vay vốn mua thuê nhà đất.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>	
            </div>
        </div>	
        <!-- service -->
        <!--newsletter-->
        <div class="agileits-newletter">
            <div class="container">
                <div class="newsletter text-center">
                    <h2>Đăng kí email cho chúng tôi để nhận những thông tin và ưu đãi lớn</h2>
                    <form action="#" method="post" class="agile-form">
                        <input type="email" name="email" size="30" required="" placeholder="Your email" />
                        <input type="submit" value="Subscribe"/>
                    </form>
                    <p>Kết nối với chúng tôi để thêm những thông tin và ưu đãi sớm nhất</p>
                </div>
            </div>
        </div>	
        <!--//newsletter-->
        <!-- team -->
        <div class="agileits-team" id="team">
            <div class="container">
                <h3 class="w3-title text-center">Đội ngũ nhân sự</h3>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/17.jpg" alt="">
                        <div class="overlay">
                            <h5>Haywood</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/18.jpg" alt="">
                        <div class="overlay">
                            <h5>Bryan</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/19.jpg" alt="">
                        <div class="overlay">
                            <h5>Adrian</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/20.jpg" alt="">
                        <div class="overlay">
                            <h5>Paul</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/21.jpg" alt="">
                        <div class="overlay">
                            <h5>Sheeran</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/22.jpg" alt="">
                        <div class="overlay">
                            <h5>Lorraine</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/23.jpg" alt="">
                        <div class="overlay">
                            <h5>Rebecca</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wthree-team">
                    <div class="hovereffect">
                        <img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/24.jpg" alt="">
                        <div class="overlay">
                            <h5>Kathleen</h5>
                            <p>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //team -->
        <!-- blog -->
        <div class="agileits-blog" id="blog">
            <div class="container">
                <h3 class="w3-title text-center">Blog</h3>
                <div class="grid-1 col-md-4 col-sm-4 col-xs-4">
                    <div class="col-md-4 col-sm-4 col-xs-4 w3l_blog_grid">
                        <div class="w3ls_blog_grid agileits_blog_grid4">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img1" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/b.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub agileits_w3layouts_ser_sub2">10.2.2017</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos2">Lorem</p>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 w3l_blog_grid">
                        <div class="ww3ls_blog_grid agileits_blog_grid3">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img1" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/c.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub agileits_sub2">01.03.2017</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos2">ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="grid-1 col-md-4 col-sm-4 col-xs-4">
                    <div class="col-md-6 col-sm-4 col-xs-12 w3l_blog_grid">
                        <div class="w3ls_blog_grid agileits_blog_grid3">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img2" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/12.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub agileits_sub2">10.12.2016</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos1">Lorem</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-4 w3l_blog_grid">
                        <div class="w3ls_blog_grid agileits_blog_grid3">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img2" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/9.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub">10.12.2016</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos1">ipsum</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-xs-4 w3l_blog_grid">
                        <div class="w3ls_blog_grid agileits_blog_grid3 w3-grid3">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img2" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/11.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub agileits_sub2">10.12.2016</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos1">Lorem</p>
                        </div>
                    </div>	
                </div>
                <div class="grid-1 col-md-4 col-sm-4 col-xs-4">
                    <div class="w3l_blog_grid">
                        <div class="w3ls_blog_grid  agileits_blog_grid5">
                            <a data-toggle="modal" data-target="#myModal">
                                <img class="img-responsive blog-agile img3" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/a.jpg" alt="">
                            </a>
                            <p class="agile_blog_grid1_sub agileits_w3layouts_ser_sub3">10.12.2016</p>
                            <p class="agileinfo_blog_grid_pos agile_blog_grid_pos3">ipsum</p>
                        </div>
                    </div>	
                </div>	
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //blog -->	
        <!-- testimonials -->	
        <div class="agileits-testimonials" id="testimonials">
            <div class="container">
                <h3 class="w3-title text-center">Top nhân viên</h3>
                <div class="col-md-12 col-xs-12" data-wow-delay="0.2s">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/17.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/24.jpg" alt="">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/real_states_serenity/18.jpg" alt="">
                            </li>
                        </ol>

                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center">

                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">

                                            <p>Mang đến những ngôi đẹp và thông minh đến với khách hàng và niềm vinh dự của tôi !</p>
                                            <h5>Jordan</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">

                                            <p>Mang đến những ngôi đẹp và thông minh đến với khách hàng và niềm vinh dự của tôi </p>
                                            <h5>Kennedy</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-2">

                                            <p>Mang đến những ngôi đẹp và thông minh đến với khách hàng và niềm vinh dự của tôi</p>
                                            <h5>James</h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonials -->					
        <!-- contact -->
        <div class="agileits_w3layouts-contact">
            <div class="agileits-contact" id="contact">
                <div class="container">
                    <h3 class="w3-title text-center">Liên hệ</h3>
                    <div class="col-md-5 col-sm-5 col-xs-6 w3_agileits-contact-left">
                        <div class="wthree-address">
                            <div class="col-md-1 col-sm-1 col-xs-1 agile-icon">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-11 col-sm-11 col-xs-11 w3_agile-contact-text">
                                <h5>địa chỉ</h5>
                                <p>159 Cộng hòa, P.13,Q. Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>	
                        <div class="wthree-address">
                            <div class="col-md-1 col-sm-1 col-xs-1 agile-icon">
                                <span class="fa fa-mobile" aria-hidden="true"></span>
                            </div>	
                            <div class="col-md-11 col-sm-11 col-xs-11 w3_agile-contact-text">
                                <h5>điện thoại</h5>
                                <p>0123 456 789</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="wthree-address">
                            <div class="col-md-1 col-sm-1 col-xs-1 agile-icon">
                                <span class="fa fa-envelope" aria-hidden="true"></span>
                            </div>	
                            <div class="col-md-11 col-sm-11 col-xs-11  w3_agile-contact-text">
                                <h5>Email</h5>
                                <a href="mailto:info@example.com">info@example.com</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>		
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-6 contact-right-w3l">
                        <form action="#" method="post">
                            <input type="text" class="name" name="name" placeholder="First Name" required="">
                            <input type="text" class="name" name="name" placeholder="Last Name" required="">
                            <input type="email" class="name" name="name" placeholder="Email" required="">
                            <input type="text" class="name" name="name" placeholder="Subject" required="">
                            <textarea placeholder="Your Message" required=""></textarea>
                            <input type="submit" value="SEND MESSAGE">
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>	
        <!-- //contact -->
        <!--map-->
        <div class="agileits_w3layouts-map">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3206999.9229094028!2d-94.68036438842559!3d38.28329754183497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0e6d54822e37d%3A0xb55bc4590466bd72!2sMissouri%2C+USA!5e0!3m2!1sen!2sin!4v1488516820426" style="border:0" allowfullscreen></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501726.4604515759!2d106.41503346363761!3d10.754666398524794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1511411555762" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!--map-->
        <!--footer-->
        <div class="agileits_w3layouts-footer">
            <div class="col-md-6 col-sm-4 col-xs-5 agileinfo-logo">
                <h6 class="w3-header"><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "realStatesSerenity"]); ?>"><i class="fa fa-home" aria-hidden="true"></i> Serenity</a></h6>
            </div>
            <div class="col-md-6 col-sm-8 col-xs-7 agileinfo-copyright">
                <p>© 2017</p>
            </div>	
        </div>
        <!-- //footer -->


        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/easing.js"></script>	
        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $(".scroll").click(function (event) {
                                    event.preventDefault();

                                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                                });
                            });
        </script>
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/jarallax.js"></script>
        <script src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/SmoothScroll.min.js"></script>
        <script type="text/javascript">
                            /* init Jarallax */
                            $('.jarallax').jarallax({
                                speed: 0.5,
                                imgWidth: 1366,
                                imgHeight: 768
                            })
        </script>
        <!-- start-smooth-scrolling --> 
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/move-top.js"></script>
        <script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/real_states_serenity/easing.js"></script>	
        <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $(".scroll").click(function (event) {
                            event.preventDefault();

                            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                        });
                    });
        </script>
        <!-- //end-smooth-scrolling -->	 
        <!-- smooth-scrolling-of-move-up -->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <!-- //smooth-scrolling-of-move-up --> 


    </body>
</html>