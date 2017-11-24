<?php
    $this->layout=false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mẫu Bất động sản</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grand Villa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/smoothbox.css" type='text/css' media="all" /> 
<link href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/flexslider.css" type="text/css" media="screen" />
<link href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo $this->request->webroot; ?>css/web-samples/grand_villa_real_estates/font-awesome.css" rel="stylesheet">  <!-- font-awesome icons --> 
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/jquery-2.2.3.min.js"></script>   
<!-- //js -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
<!-- //web-fonts --> 
</head>
<body>
<!-- header-top -->
	<div class="header-top">
		<!-- container -->
		<div class="container">
			<div class="navbar-header">
				<h1><a href="index.html">Grand<span>villa</span></a></h1>
			</div>
			<div class="nav-top-right">
				<div class="w3layouts-details">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:@example.com">info@example.com</a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1) 000 123 456789</li>
					</ul>
				</div>
				<div class="social w3-agileitsicons"> 
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a class="twt" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
					</ul>  
				</div>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //header-top -->
	<!-- header start here --> 
	<div class="header w3l w3header">  
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>			              
				</div> 
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
					<ul class="nav navbar-nav ">
						<li><a href="index.html" class="active">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li> 
						<li><a href="#gallery" class="scroll">Gallery</a></li>
						<li><a href="#pricing" class="scroll">Pricing</a></li>
						<li><a href="#agents" class="scroll">Agents</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
					    <li><a href="#contact" class="scroll">Contact Us</a></li>
					</ul> 
					<div class="nav-more">
						<a href="#myModal2" data-toggle="modal">post property</a>
					</div>
					<div class="clearfix"> </div>	
				</div>  
			</nav> 
		</div>
		<div class="clearfix"> </div> 
	</div>
	<!-- header end here -->  
	<!-- banner-text -->
			<div class="jarallax banner">
				<div class="banner-text">
					<div class="container">	 
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow1
							  $("#slider1").responsiveSlides({
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
						<!--//End-slider-script-->
						<div  id="top1" class="callbacks_container">
							<ul class="rslides" id="slider1">
								<li>
									<h3>caring for all your property needs</h3> 
								</li>
								<li>
									<h3>Design your dream home!</h3> 
								</li>
								
								<li>
									<h3>get the most when selling your home</h3> 
								</li>
							</ul>
							<div class="clearfix"> </div> 
						</div>
					</div>
				</div>
			</div>	
				<!-- //banner-text -->
		<!-- banner-bottom --> 
	<div class="serach-w3agile">
		<div class="container"> 
			<div class="place-grids">
				<form action="#" method="post">
					<div class="col-md-3 col-xs-3 place-grid">
						<h5>Select City</h5>
						<select class="sel" required="">
							<option value="">city1</option>
							<option value="">city2</option>
							<option value="">city3</option>
							<option value="">city4</option> 
							<option value="">city5</option>
							<option value="">city6</option> 
						</select>
					</div>
					<div class="col-md-3 col-xs-3 place-grid">
						<h5>Property type</h5>
						<select class="sel" required="">
							<option value="">Select</option>
							<option value="">Apartment</option>
							<option value="">Independent house</option>
							<option value="">villa</option>
							<option value="">Pent House</option>
						</select>
					</div>
					<div class="col-md-3 col-xs-3 place-grid">
						<h5>Type</h5>
						<select class="sel" required="">
							<option value="">BHK</option>
							<option value="">1BHK</option>
							<option value="">2BHK</option>
							<option value="">3BHK</option>
							<option value="">4BHK</option>
							<option value="">5BHK</option>
						</select>
					</div>
					<div class="col-md-3 col-xs-3 place-grid"> 
						<input type="submit" value="Search"> 
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>	
	<!-- //banner-bottom --> 	
	<script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/responsiveslides.min.js"></script> 
	<!-- about --> 
	<div class="jarallax w3ls-section w3-about text-center" id="about">
		<div class="container">  
			<div class="w3ls-title"> 
				<h3 class="agileits-title"><span>A</span>bout us</h3>
			</div>
			<h4>Welcome to Grand villa</h4>
			<h5>Aenean pulvinar ac enimeta</h5>
			<p>Pellentesque accumsan cursus dui, sodales blandit urna sodales vitaePellentesque accumsan cursus dui, sodales blandit urna urna sodales vitaePellentesque accumsan cursus dui, sodales blan urna sodales vitaePellentesque accumsan cursus dui, sodales blan sodales vitae. Maecenas placerat eget mi vitae euismod. Duis aliquam efficitur mi, et eleifend velit.. Maecenas placerat eget mi vitae euismod. Duis aliquam efficitur mi, et eleifend velit.</p>
			<div class="agileinfo-about-grid">	
				<div class="col-md-4 col-xs-6 w3ls-about-grid">
					<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
					<h6>service1</h6>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias</p> 
				</div>
				<div class="col-md-4 col-xs-6 w3ls-about-grid about-2">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<h6>service2</h6>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias</p> 
				</div>
				<div class="col-md-4 col-xs-6 w3ls-about-grid">
					<span class="fa fa-cogs" aria-hidden="true"></span>
					<h6>service2</h6>
					<p>Itaque earum rerum hic tenetur a sapiente delectus 
						reiciendis maiores alias</p> 
		        </div>
				<div class="clearfix"></div>
			</div>
			<div class="about-agile">	
				<a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal" data-target="#myModal">Read More</a>
			</div>
		</div>	
		<!-- about bottom -->
		<div class="about-bottom-agile">
			<div class="about-bottom-agile">
				<div class="col-md-6 services-grids w3layouts-grids">
					<h4  class="about-bottom-title">searching for property? we can help you</h4>
					<a href="#contact">contact us now!</a>
				</div>
				<div class="col-md-6 about-bottom-g1">
					<div class="about-bottom-right">
						<div class="aboutagile-grid">	
							<span class="hi-icon hi-icon-archive glyphicon glyphicon-check"> </span>
						</div>
						<div  class="w3ls-about-bottom">
							<h4>apiente</h4>
							<p>que earum rerum hic tenetur a sapiente </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-bottom-right">
						<div class="aboutagile-grid">	
							<span class="hi-icon hi-icon-archive  glyphicon glyphicon-stats"> </span>
						</div>
						<div  class="w3ls-about-bottom">
							<h4>maiores </h4>
							<p>que earum rerum hic tenetur a sapiente </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="aboutagile-grid">	
							<span class="hi-icon hi-icon-archive glyphicon glyphicon-picture"> </span>
						</div>
						<div  class="w3ls-about-bottom">
							<h4>earumr</h4>
							<p>que earum rerum hic tenetur a sapiente </p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class=" about-bottom-right">
						<div class="aboutagile-grid">	
							<span class="hi-icon hi-icon-archive glyphicon glyphicon-briefcase"> </span>
						</div>
						<div  class="w3ls-about-bottom">
							<h4>tenture</h4>
							<p>que earum rerum hic tenetur a sapiente</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>	
	<!-- //about -->
	<!-- gallery -->
	<div class="jarallax w3ls-section gallery" id="gallery">
		<div class="container">  
			<div class="w3ls-title"> 
				<h3 class="agileits-title"><span>G</span>allery</h3>
			</div>
			<div class="w3ls_gallery_grids">	
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g1.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g2.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g2.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g3.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g3.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g7.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g7.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g8.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g8.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div> 
				</div>
				<div class="col-xs-4 agileits_w3layouts_gallery_grid">	
					<div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g4.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g4.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g5.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g5.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
					<div class="agileits_w3layouts_gallery_grid1 hover14 column">
						<div class="w3_agile_gallery_effect">
							<a href="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g6.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
								<figure>
									<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g6.jpg" alt=" " class="img-responsive" />
								</figure>
							</a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/smoothbox.jquery2.js"></script>
			</div>
		</div>
	</div>
	<!-- //gallery -->  
	<!-- pricing -->
	<div class="jarallax w3ls-section wthree-pricing" id="pricing">	
		<div class="container">
			<div class="w3ls-title"> 
				<h3 class="agileits-title"><span>P</span>ricing</h3>
			</div>
			<div class="pricing-grids-info">
				<section class="slider grid">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="pricing-grid grid-one">
									<div class="w3ls-top">
										<h3>Row Houses</h3>
										<h4> 300<span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Uulvinar ac enime</li>
											<li>13 projects</li>
											<li>24/7 Support</li>
											<li>1*Month Free resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-two">
									<div class="w3ls-top">
										<h3>Villaments</h3>
										<h4> 500 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Uulvinar ac enime</li>
											<li>21 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-three">
									<div class="w3ls-top">
										<h3>Smart Homes</h3>
										<h4> 700 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Uulvinar ac enime</li>
											<li>1000 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="zb pricing-grid grid-four">
									<div class="w3ls-top">
										<h3>Villaments</h3>
										<h4> 900 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Villament</li>
											<li>15 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="clearfix"> </div> 
							</li>
							<li>
								<div class="zb pricing-grid grid-four">
									<div class="w3ls-top">
										<h3>Pre launch</h3>
										<h4> 900 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Featured</li>
											<li>130 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-two">
									<div class="w3ls-top">
										<h3>Villaments</h3>
										<h4> 500 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Residency</li>
											<li>73 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-three">
									<div class="w3ls-top">
										<h3>Smart Homes</h3>
										<h4> 700 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Felicity</li>
											<li>37 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="pricing-grid grid-one">
									<div class="w3ls-top">
										<h3>Residency</h3>
										<h4> 300 <span class="sup">$</span> </h4> 
										<div class="clearfix"> </div>
									</div>
									<div class="w3ls-bottom">
										<ul class="count">
											<li>Uulvinar ac enime</li>
											<li>38 projects</li>
											<li>24/7 Support</li>
											<li>1*Month resources</li>
										</ul>
										<div class="more">
											<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Sign Up</a>				
										</div>
									</div>
								</div>
								<div class="clearfix"> </div> 
							</li> 
						</ul>
					</div>
				</section>
				<!--FlexSlider-->
				<script defer src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "pagination",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
				<!--End-slider-script-->
			</div>
			<div class="pop-up"> 
				<div id="small-dialog" class="mfp-hide book-form">
					<h2>Sign Up Form </h2>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required=""/>
						<input type="email" name="Email" class="email" placeholder="Email" required=""/>
						<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
						<div class="check-box">
							<input name="chekbox" type="checkbox" id="brand" value="">
							<label for="brand"><span></span>Remember Me.</label>
						</div>
						<input type="submit" value="Sign Up">
					</form>
				</div>
				<!-- pop-up-box -->
				<script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/jquery.magnific-popup.js" type="text/javascript"></script>
				<!--//pop-up-box -->
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
			</div>
		</div>	
	</div>	
	<!--//pricing-->
	<!-- agents -->  
	<div class="jarallax w3ls-section agile-agents" id="agents">
		<div class="container">  
			<div class="w3ls-title"> 
				<h3 class="agileits-title"><span>A</span>gents</h3>
			</div>
			<div id="team" class="team">
			<div class="team-info">
				<div class="col-md-4 team-grids">
					<img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/ag1.png" alt="">
					<div class="agileits-captn"> 
						<div class="social-icons"> 
							<ul>
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>  
						</div>
					</div>
					<h4>pulvinar</h4>
					<p>Aenean pulvinar ac enimet</p>
				</div>	
				<div class="col-md-4 team-grids">
					<img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/ag7.png" alt="">
					<div class="agileits-captn"> 
						<div class="social-icons"> 
							<ul>
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>  
						</div>
					</div>
					<h4>Enimet</h4>
					<p>Aenean pulvinar ac enimet</p>
				</div>
				<div class="col-md-4 team-grids">
					<img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/ag9.png" alt="">
					<div class="agileits-captn"> 
						<div class="social-icons"> 
							<ul>
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>  
						</div>
					</div>
					<h4>Tincidun</h4>
					<p>Aenean pulvinar ac enimet</p>
				</div>
				<div class="col-md-4 team-grids">
					<img class="img-responsive" src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/ag10.png" alt="">
					<div class="agileits-captn"> 
						<div class="social-icons"> 
							<ul>
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>  
						</div>
					</div>
					<h4>Inaren</h4>
					<p>Aenean pulvinar ac enimet</p>
				</div>
			<div class="clearfix"></div>
		</div>	
	 </div>
	</div>
	</div>
	<!-- //agents -->  
	<!-- services -->
	<div class="jarallax w3ls-section services" id="services">
		<div class="w3ls-title"> 
			<h3 class="agileits-title"><span>S</span>ervices</h3>
		</div>
			<div class="services-agileinfo">
				<div class="services1 col-md-10">
					<div class="col-sm-2 col-xs-6 services-agile-grids">
						<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
						<h4>service1</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="col-sm-2 col-xs-6 services-agile-grids">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<h4>service2</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="col-sm-2 col-xs-6 services-agile-grids">
						<span class="fa fa-cogs" aria-hidden="true"></span>
						<h4>service3</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="col-sm-2 col-xs-6 services-agile-grids">
						<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
						<h4>service4</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="col-sm-2 col-xs-6 services-agile-grids service5">
						<span class="glyphicon glyphicon-check" aria-hidden="true"></span>
						<h4>service5</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="col-sm-2 col-xs-6 services-agile-grids">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
						<h4>service6</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
					</div>
					<div class="clearfix"> </div>
			    </div>
				<div class="col-md-2 services-agile-grids last">
					<span class="fa fa-list-alt" aria-hidden="true"></span>
						<h4>service7</h4>
						<p>Itaque earum rerum hic tenetur a sapiente delectus.</p> 
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>	
	<!-- //services -->
	 <!-- testimonials -->
	<div class="jarallax w3ls-section testimonials" id="testimonials">	
		<div class="container">
			<div class="w3ls-title"> 
				<h3 class="agileits-title"><span>T</span>estimonials</h3>
			</div>
			<div class="testi-w3agileinfo"> 
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#testi" aria-controls="testi" role="tab" data-toggle="tab"><img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/t2.jpg" alt=""/></a></li>
					<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/t1.jpg" alt=""/></a></li>
					<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/t3.jpg" alt=""/></a></li>
				</ul> 
				<!-- Tab panes -->
				<div class="tab-content w3layouts">
					<div role="tabpanel" class="tab-pane active" id="testi">
						<p>Donec libero dui, scelerisque ac augue id, tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
						<label>Ricarda Reade</label>
					</div>
					<div role="tabpanel" class="tab-pane" id="profile">
						<p>Scelerisque ac augue id Donec libero dui, , tristique ullamcorper elit. Nam ultrices, lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapien diam ac nibh convallis.</p>
						<label>Dania Deskins</label>  
					</div>
					<div role="tabpanel" class="tab-pane" id="messages"> 
						<p>Nam ultrices lacus vitae adipiscing aliquet, metus ipsum imperdiet libero, vitae dignissim sapientristique Donec libero dui, scelerisque ac augue id,  ullamcorper elit,diam ac nibh.</p>
						<label>Patria Plowden</label>  
					</div>
				</div> 
			</div>
		</div>
	</div>
	
	<!-- //testimonials -->
	<!-- contact -->
	<div class="jarallax w3_agileits-contact w3ls-section text-center" id="contact">
		<div class="container">
			<div class="wthree-contact-top">
				<h3 class="agileits-title"><span>C</span>ontact us</h3>
				<p>vitae dignissim sapientristique Donec libero dui</p>
				<div class="w3_agile-address">
					<h5>Address</h5>
					<span>1124 Winding Way ,70 Pine St. Newyork,NY 10270.</span>
					<span>4446 Berkley Street,Philadelphia,Pennsylvania.</span>
					<h5>Get in touch</h5>
					<span>Tel:121 2348 2134 </span>
					<a href="mailto:grandvilla@info.com">grandvilla@info.com</a>
				</div>	
				<div class="contact-right-w3l">
					<form action="#" method="post">
						<input type="text" class="name" name="name" placeholder="Your Name" required="">
						<input type="email" class="name" name="name" placeholder="Email" required="">
						<textarea placeholder="Your Message" required=""></textarea>
						<input type="submit" value="SEND MESSAGE">
					</form>
				</div>
			</div>	
	 </div>
</div>	
<!-- //contact -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="social-icons"> 
				<ul>
					<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
					<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
				</ul>  
			</div>
			<p>© 2017 Grand Villa. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->
	<!-- order form -->
	<div class="modal bnr-modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h3>Post Your Property</h3>
				</div> 
				<div class="modal-body modal-spa">
					<div class="agileits_reservation">
						<form action="#" method="post">
							<div class="cuisine"> 
								<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<input type="text" name="Location" placeholder="Your Location" required="">
							</div>
							<div class="phone_email"> 
								<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<input type="text" name="Phone" placeholder="Phone" required=""> 
							</div>
							<div class="phone_email1"> 
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<input type="email" name="Email" placeholder="Email" required="">
							</div>
							<div class="clearfix"> </div>
							<div class="agileits_reservation_grid">
								<div  class="phone_email book_date"> 
									<span class="fa fa-fire" aria-hidden="true"></span> 
									<input type="text" name="quantity" placeholder="property type">
								</div> 
								<div class="phone_email1 section_room">
									<!-- start_section_room --> 
									<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
									<select id="country1" class="frm-field sect" required>
										<option value="">Locality</option>
										<option value="1">Name1</option>
										<option value="2">Name2</option>         
										<option value="3">Name3</option>
									</select> 
								</div>  
								<div class="clearfix"></div>
							</div>
							<div class="date_btn"> 
								<input type="submit" value="post" /> 
							</div> 
						</form>
					</div> 
				</div> 
			</div>
		</div>
	</div>
	<!-- //order form --> 
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body modal-spa">
					<img src="<?php echo $this->request->webroot; ?>img/web-samples/grand_villa_real_estates/g2.jpg" class="img-responsive" alt=""/>
					<h4>Consectetur adipiscing elit</h4>
					<p>Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in.<br> Fusce lacus purus, pulvinar ut lacinia id, sagittis eu mi. Vestibulum eleifend massa sem, eget dapibus turpis efficitur at. Aliquam viverra quis leo et efficitur. Nullam arcu risus, scelerisque quis interdum eget, fermentum viverra turpis. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut At vero eos </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal-about -->  

<!-- //menu-js -->
	<!-- jarallax -->
	<script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/SmoothScroll.min.js"></script> 
	<script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>  
	<!-- //jarallax --> 
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/easing.js"></script>	
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
	<!-- //smooth-scrolling-of-move-up -->  		
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->request->webroot; ?>js/web-samples/grand_villa_real_estates/bootstrap.js"></script>
  </body>
 </html> 
  
