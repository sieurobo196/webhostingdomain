<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mẫu Bất động sản</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Prefab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Custom Theme files -->
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/prefab_real_estates/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/prefab_real_estates/style.css" type="text/css" rel="stylesheet" media="all">
        <link href="<?php echo $this->request->webroot; ?>css/web-samples/prefab_real_estates/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/prefab_real_estates/flexslider.css" type="text/css" media="screen" /> 
        <!-- //Custom Theme files -->  
        <!-- font -->
        <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700&amp;subset=latin-ext" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- //font -->
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
        <!-- navigation -->
        <div class="top-nav w3-agiletop">
            <div class="container">
                <div class="navbar-header w3llogo">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        Menu
                    </button>
                    <h1><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates"]); ?>">Prefab</a></h1> 
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="w3menu navbar-left">
                        <ul class="nav navbar">
                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates"]); ?>" class="<?php echo $activeMenu == 'index' ? 'active' : '';?>">Home</a></li>
                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates/about"]); ?>" class="<?php echo $activeMenu == 'about' ? 'active' : '';?>">About</a></li> 
                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates/gallery"]); ?>" class="<?php echo $activeMenu == 'gallery' ? 'active' : '';?>">Gallery</a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-letters="Pages">Pages</span><span class="caret"></span></a>
                                <ul class="dropdown-menu"> 
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates/icons"]); ?>">Icons</a></li>
                                    <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates/typo"]); ?>">Typography</a></li>
                                </ul>
                            </li>  
                            <li><a href="<?php echo $this->Url->build(["controller" => "webSamples", "action" => "prefab_real_estates/contact"]); ?>" class="<?php echo $activeMenu == 'contact' ? 'active' : '';?>">Contact</a></li>
                        </ul>
                    </div>
                    <div class="w3ls-bnr-icons social-icon navbar-right">
                        <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
                        <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
                        <a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a> 
                    </div> 
                    <div class="clearfix"> </div>  
                </div>
            </div>	
        </div>	
        <!-- //navigation -->

        <!-- banner -->
        <div class="w3ls-banner <?php echo $activeDivPage?>">
            <!-- banner-text -->
            <div class="banner-text"> 
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <h2>Finding Your House is Much Easier now!</h2>
                            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
                        </li>
                        <li>
                            <h3>The Best Way To Find Your Home</h3>
                            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
                        </li>
                        <li>
                            <h3>Finding Your House is Much Easier now!</h3>
                            <h5>We help you to find the best property match to you need in just a few simple steps.</h5>
                        </li>
                    </ul>
                </div>    
            </div> 
            <!-- //banner-text -->  
        </div>	
        <div class="w3ls-banner-1 <?php echo $activeDivIndex?>"> 
        </div>	
        <!-- //banner -->