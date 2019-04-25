<!-- footer -->
<div class="w3-agile-footer">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
                <div class="foot-top-w3">
                    <div class="footer-grid-heading">
                        <h4>Get In Touch</h4>
                    </div>
                    <div class="footer-grid-info">
                        <p>Eiusmod Tempor inc
                            <span>St Dolore Place,Kingsport 56777.</span>
                        </p>
                        <p class="phone">Phone : +1 123 456 789
                            <span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
                            <span>FAX : <a href="mailto:example@email.com">123 456 7890</a></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <div class="foot-top-w3">
                    <div class="footer-grid-heading">
                        <h4>Newsletter</h4>
                    </div>
                    <div class="footer-grid-info">
                        <p>AND ALWAYS STAY INFORMED OF THE LATEST COMPANY NEWS AND EVENTS!</p>
                    </div>
                    <div class="w3-agileits-subscribe-form">
                        <form action="#" method="post">
                            <input type="text" placeholder="Email" name="email" required="">
                            <button class="btn1">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-grid">
                <div class="foot-top-w3">
                    <div class="footer-grid-heading">
                        <h4>Follow Us</h4>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //footer -->

<!-- copy rights start here -->
<div class="copy-w3right">
    <div class="container">  
        <p>© 2017 Prefab. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
</div>
<!-- //copy right end here -->  
<!-- bootstrap-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                Prefab
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <section>
                <div class="modal-body">
                    <img src="<?php echo $this->request->webroot; ?>img/web-samples/prefab_real_estates/g3.jpg" alt=" " class="img-responsive" />
                    <p>Ut enim ad minima veniam, quis nostrum 
                        exercitationem ullam corporis suscipit laboriosam, 
                        nisi ut aliquid ex ea commodi consequatur? Quis autem 
                        vel eum iure reprehenderit qui in ea voluptate velit 
                        esse quam nihil molestiae consequatur, vel illum qui 
                        dolorem eum fugiat quo voluptas nulla pariatur.
                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
                            esse quam nihil molestiae consequatur.</i></p>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- //bootstrap-pop-up -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/jquery-2.1.4.min.js"></script>
<!-- js --> 
<!-- FlexSlider --> 
<script defer src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/jquery.flexslider.js"></script>
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
<!-- End-slider-script -->
<script src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/SmoothScroll.min.js"></script> 
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/move-top.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/easing.js"></script>	
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
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $this->request->webroot; ?>js/web-samples/prefab_real_estates/bootstrap.js"></script>
</body>
</html>