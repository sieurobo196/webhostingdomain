<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Custom-Stylesheet-Links -->
<link rel="stylesheet" href="<?php echo $this->request->webroot;?>css/web-samples/veg/style.css" type="text/css" media="all" /> <!-- Index-Page-Styling -->
<link rel="stylesheet" href="<?php echo $this->request->webroot;?>css/web-samples/veg/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link rel="stylesheet" href="<?php echo $this->request->webroot;?>css/web-samples/veg/popuo-box.css" type="text/css" media="all"/> <!-- Popup-Box-CSS -->
<!-- //Custom-Stylesheet-Links -->
<!-- Web-Fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- //Web-Fonts -->
<!-- Header -->
<div class="w3layouts-header">
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Veg Mores</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hover-effect active"><a href="index.html">Home</a></li>
                    <li class="hover-effect"><a href="#about" class="scroll">About</a></li>
                    <li class="hover-effect"><a href="#features" class="scroll">Features</a></li>
                    <li class="hover-effect"><a href="#specials" class="scroll">Specials</a></li>
                    <li class="hover-effect"><a href="#team" class="scroll">Team</a></li>
                    <li class="hover-effect"><a href="#contact" class="scroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //Navbar -->
    <!-- Slider -->
    <div class="slider">
        <ul class="rslides" id="slider">
            <li>
                <img src="<?php echo $this->request->webroot.'img/web-samples/veg/';?>1.jpg" alt="Veg Mores">
            </li>
            <li>
                <img src="<?php echo $this->request->webroot.'img/web-samples/veg/';?>2.jpg" alt="Veg Mores">
            </li>
        </ul>
    </div>
    <!-- //Slider -->
</div>
<!-- //Header -->
<!-- Custom-JavaScript-File-Links -->
<!-- Banner-Slider-JavaScript -->
<script src="<?php echo $this->request->webroot;?>js/web-samples/veg/responsiveslides.min.js"></script>
<script src="<?php echo $this->request->webroot;?>js/jquery.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 800,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Banner-Slider-JavaScript -->
<!-- Owl-Carousel-JavaScript -->
<script src="<?php echo $this->request->webroot;?>js/web-samples/veg/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel ({
            items : 4,
            lazyLoad : true,
            autoPlay : true,
            pagination : false,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->

<!-- Magnific-Popup-Display-JavaScript -->
<script src="<?php echo $this->request->webroot;?>js/web-samples/veg/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    });
</script>
<!-- //Magnific-Popup-Display-JavaScript -->

<!-- Progressive-Effects-Animation-JavaScript -->
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/wow.min.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/mousescroll.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/main.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/numscroller-1.0.js"></script>
<!-- //Progressive-Effects-Animation-JavaScript -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/move-top.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot;?>js/web-samples/veg/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>