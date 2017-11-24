<?php 
    $this->layout=false;
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Mẫu Bất động sản</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Build Estate a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- Default-JavaScript-File -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/mainStyles.css" /><!-- for banner -->

<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/flexslider.css" type="text/css" media="screen" property="" /><!-- for testimonials -->

<!-- Property for sale section css files-->
<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/owl.carousel.css" type="text/css" media="all">
<link href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/owl.theme.css" rel="stylesheet">
<!-- //Property for sale section css files -->

<!-- for team section tabs -->
<link href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- // for team section tabs -->

<!-- default css files -->
	<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>css/web-samples/build_estate_real_estates/font-awesome.min.css" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<!-- Property for sale section Script-->
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
<!-- //Property for sale section Script-->

</head>

<!-- Body -->
<body>

<!-- banner -->
	<div class="banner" id="home">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html"><span>Build</span> Estate</a></h1>
					<i class="fa fa-home" aria-hidden="true"></i>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
						<li><a href="#about" class="scroll"><span data-hover="About">About</span></a></li>
						<li><a href="#services" class="scroll"><span data-hover="Services">Services</span></a></li>
						<li><a href="#team" class="scroll"><span data-hover="Agents">Agents</span></a></li>
						<li><a href="#testimonials" class="scroll"><span data-hover="Testimonials">Testimonials</span></a></li>
						<li><a href="#contact" class="scroll"><span data-hover="Contact Us">Contact Us</span></a></li>
					</ul>
				</nav>
			</div>
					<div class="agileits-social top_content">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
		</nav>
		</div>
<!-- //banner -->	
<!-- slider -->
    <div id="exampleSlider">
        <div>
			<h2>Whatever good things we build <span>end up building us</span></h2>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
		</div>
        <div>
			<h3>Architecture starts when you <span>put two bricks together</span></h3>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
		</div>
        <div>
			<h3>We shape our buildings <span> thereafter they shape us</span></h3>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
		</div>
        <div>
			<h3>My buildings will be my legacy<span>they will speak for me</span></h3>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
		</div>
        <div>
			<h3>If a building becomes architecture<span>then it is art</span></h3>
			<div class="readmore-w3">
				<a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a>
			</div>
		</div>
    </div>
<!-- //slider -->

<!-- Bootstrap modal popup -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<!-- Modal1 -->
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Build Estate</h4>
				<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/b.jpg" alt=" " class="img-responsive">
				<h5>Want to be a successful landlord</h5>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
			</div>
		</div>
	</div>
</div>
<!-- //Modal1 -->
<!-- //Bootstrap modal popup -->

<!-- about -->
<div class="about" id="about">
	<h3 class="heading"><span>Who We Are</span></h3>
	<div class="container">
		<div class="services-grids">
			<div class="col-md-4 services-grids-info sgi">
				<h3>Welcome to our Build Estate</h3>
				<p>“If you can build buildings, why sit on the beach?,We always think of buildings in their settings, but so do other architects.” </p>
				<ul>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">International Office Buildings.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Apartment On Premier House.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Prices are low & parking allowance.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Best design architecture.</a></li>
				</ul>
			</div>
			<div class="col-md-4 services-grids-info">
				<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/about.jpg" alt="">					
			</div>
			<div class="col-md-4 services-grids-info sgi1">
				<h3>We Make Your dream home</h3>
				<p>“For decades engineers have stood accused that their buildings do not have any cultural value. We have attempted to liberate engineering of this accusation.” </p>
				<ul>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Great Engineers ideas.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Planning for future model buildings.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">Modern apartment with large space.</a></li>
					<li><i class="glyphicon glyphicon-arrow-right"> </i><a href="#">New residential complex features.</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->

<!-- services -->
<div class="services" id="services">
		<h3 class="heading"><span>Our Services</span></h3>
	<div class="container">
		<div class="col-md-8 servicesleft">
			<h4>Modern Apartment for your luxuries life</h4>
			<h4>Beautiful Design where you deserve best</h4>
			<div class="serviceslefttop">
				<div class="col-md-4">
				<div class="grid1 clr1">
					<i class="fa fa-home" aria-hidden="true"></i>
					<h4>Home loan</h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="col-md-4">
				<div class="grid1 clr2">
					<i class="fa fa-money" aria-hidden="true"></i>
					<h4>Low cost</h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="col-md-4">
				<div class="grid1 clr3">
					<i class="fa fa-building" aria-hidden="true"></i>
					<h4>Modern design</h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="servicesleftbottom">
				<div class="col-md-4">
				<div class="grid1 clr4">
					<i class="fa fa-home" aria-hidden="true"></i>
					<h4>Luxury home</h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="col-md-4">
				<div class="grid1 clr5">
					<i class="fa fa-bed" aria-hidden="true"></i>
					<h4>Architecture </h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="col-md-4">
				<div class="grid1 clr6">
					<i class="fa fa-building-o" aria-hidden="true"></i>
					<h4>Office value</h4>
					<h4>-Build Estate</h4>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //services -->

<!-- team -->
	<div class="team" id="team">
			<h3 class="heading"><span>Meet our agents</span></h3>
		<div class="container">
			<div class="inner_w3l_agile_grids">
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
						<li>
							<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/team1.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/team2.png" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/team3.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/team4.jpg" alt=" " class="img-responsive" />
						</li>
						</ul>
						<div class="resp-tabs-container">
							<div class="tab1">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Chris Adam</h4>
									<span>Build Estate Agent</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
									<p class="phone"><b>Call me</b>  +0(12) 266 399 4567</p>
								<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow me on</li>
											<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
										</ul>
									</div>								
								</div>
								<div class="clearfix"> </div>
							</div>
							
							<div class="tab2">
							<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>William ker</h4>
									<span>Build Estate Agent</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
									<p class="phone"><b>Call me</b>  +0(12) 266 399 4567</p>
								<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow me on</li>
											<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
										</ul>
									</div>									
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab3">
								<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Albert Son</h4>
									<span>Build Estate Agent</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
									<p class="phone"><b>Call me</b>  +0(12) 266 399 4567</p>
							<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow me on</li>
											<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
										</ul>
									</div>								
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="tab4">
							<div class="col-md-6 team-img-w3-agile">
								</div>
								<div class="col-md-6 team-Info-agileits">
									<h4>Mark Smuel</h4>
									<span>Build Estate Agent</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
									<p class="phone"><b>Call me</b>  +0(12) 266 399 4567</p>
									<div class="w3_agileits_social_media team_agile_w3l">
										<ul class="social-icons3">
											<li class="agileinfo_share">Follow me on</li>
											<li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
											<li><a href="#" class="wthree_behance"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
										</ul>
									</div>				
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
				</div>
			</div>
		</div>
</div>
<!-- //team -->

<!--count-->
<div class="count-agileits" id="stats">
	<h3 class="heading"><span>Our fun facts</span></h3>
		<div class="container">
					<div class="count-grids">
					<div class="count-bgcolor-w3ls">
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='210' data-delay='.5' data-increment="1">210</div>
									<span></span>
									<h5>Professional agents</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='700' data-delay='.5' data-increment="1">700</div>
									<span></span>
									<h5>Property for sale</h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='40' data-delay='.5' data-increment="1">40</div>
									<span></span>
									<h5>Property locations </h5>
							</div>
						</div>
						<div class="col-md-3 count-grid">
							<div class="count hvr-bounce-to-bottom">
								<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='490' data-delay='.5' data-increment="1">490</div>
									<h5>Rental Apartments</h5>
								</div>
						</div>
						<div class="clearfix"></div>
						</div>
					</div>
	</div>
</div>
<!--count-->

<!-- property for sale -->
<div class="special" id="offers">
	<h3 class="heading"><span>Properties for sale</span></h3>
		<div class="container">
			<div class="agileits-special-grids">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item">
						<div class="special-info">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<h4>Residential house</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>480 <span>Sqft</span></li>
									<li>5 <span>Rooms</span></li>
									<li>1 <span>Pool</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="special-info special-info1">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
								</div>
								<h4>Luxuries Apartment</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>570 <span>Sqft</span></li>
									<li>6 <span>Rooms</span></li>
									<li>3 <span>Pools</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="special-info special-info2">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<h4>Office Building</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>410 <span>Sqft</span></li>
									<li>4 <span>Rooms</span></li>
									<li>2 <span>pools</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="special-info">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
								</div>
								<h4>Architecture Home</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>480 <span>Sqft</span></li>
									<li>5 <span>Rooms</span></li>
									<li>1 <span>Pool</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>	
					</div>
					<div class="item">
						<div class="special-info special-info1">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<h4>Modern Design</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>570 <span>Sqft</span></li>
									<li>6 <span>Rooms</span></li>
									<li>3 <span>Pools</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="special-info special-info2">
							<div class="special-info-top">
								<div class="special-star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
								</div>
								<h4>Apartment Tower</h4>
							</div>
							<div class="special-info-bottom">
								<ul>
									<li>410 <span>Sqft</span></li>
									<li>4 <span>Rooms</span></li>
									<li>2 <span>pools</span></li>
								</ul>
								<p>Vivamus pulvinar imperdiet lorem vel aliquam. Maecenas nunc tellus, feugiat</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- //property for sale -->

<!-- testimonials -->		
	<div class="testimonials" id="testimonials">
		<div class="w3layouts_event_right">
			<h3 class="heading"><span>what people says</span></h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Williamson</h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>jennifer lopez</h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t3.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Selena Gomez</h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</li>
						<li>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t4.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Catherine Mark</h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t5.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Victoria demi </h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="col-md-4 w3_event_right_grid">
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/t6.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Kate perry</h4>
										<p><i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i></p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi turpis.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //testimonials -->	

<!-- contact -->
<div class="contact" id="contact">
	<h3 class="heading"><span>Get In Touch With Us</span></h3>
	<div class="col-md-3 mail">
		<h4>Contact Us</h4>
		<p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+0(12) 000 123 3120</p>
		<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></p>
	</div>
	<div class="col-md-3 social">
		<h4>Connect us</h4>
		<ul>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-rss"></i></a></li>
			<li><a href="#"><i class="fa fa-vk"></i></a></li>
		</ul>
	</div>
	<div class="col-md-3 address">
		<h4>Address</h4>
		<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>1680 Richmond St, Corner in, ON N58 3d7, USA</p>
	</div>
	<div class="col-md-3 contactimg">
		<img src="<?php echo $this->request->webroot; ?>img/web-samples/build_estate_real_estates/contact.png" alt="" />
	</div>
	<div class="clearfix"></div>
</div>
<!-- //contact -->

<!-- map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84038702346!2d-74.25819125880415!3d40.70583158896605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1491973492375" style="border:0" allowfullscreen=""></iframe><!-- //map -->
<!-- //map -->

<!-- contact form -->
<div class="contact-form">
	<h3 class="heading"><span>Mail Us</span></h3>
	<div class="container">
		<form action="#" method="post">
			<input type="text" placeholder="Name" required="">
			<input type="email" placeholder="Email" required="">
			<input type="text" placeholder="Telephone" required="">
			<textarea placeholder="Message" required=""></textarea>
			<button class="btn1">Submit</button>
		</form>
	</div>
</div>
<!-- //contact form -->

<!-- footer -->
<div class="footer">
	<div class="col-md-6 subscribe">
		<form action="#" method="post">
			<h3>Subscribe us</h3>
			<input type="text" placeholder="Subscribe" name="Subscribe" required="">
			<button class="btn1">Subscribe</button>
		</form>
	</div>
	<div class="col-md-6 copyright">
		<ul>
			<li><a href="#home" class="scroll">Home</a></li>
			<li><a href="#about" class="scroll">About</a></li> 
			<li><a href="#services" class="scroll">Services</a></li> 
			<li><a href="#stats" class="scroll">Stats</a></li> 
			<li><a href="#team" class="scroll">Agents</a></li> 
			<li><a href="#testimonials" class="scroll">Testimonials</a></li>
		</ul>
		<p>© 2017 Build Estate. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //footer -->
 
	
<!--<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/numscroller-1.0.js"></script> numscroller js file -->

<!-- property for sale js file-->
<script src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/owl.carousel.js"></script>
<!-- //property for sale js file-->
	
<!-- flexSlider --><!-- testimonials -->
<script defer src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider --><!-- //testimonials -->
 
<!-- banner slider js files -->
<script src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/mainScript.js"></script>
<script src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/rgbSlide.min.js"></script>
<!-- // banner slider js files -->

<!--tabs--><!-- for team -->
	<script src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/easy-responsive-tabs.js"></script>
	<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
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
<!--//tabs--><!-- //for team -->

<!-- Here stars scrolling -->
	<script src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/move-top.js"></script>
	<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/build_estate_real_estates/easing.js"></script>
	<!-- here stars scrolling icon -->
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
	<!-- //here ends scrolling icon -->
<!-- Here ends scrolling -->

</body>
<!-- //Body -->
</html>