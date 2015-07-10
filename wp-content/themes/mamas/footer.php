<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
</div>
                <!-- End ma-pagecontent  content -->
                <!-- Start ma-footercontent  content -->
                <div id="ma-footercontent">
                    <div  class="container">
                    <div class="row">
<div class="mobile-foot-menu col-sm-12 col-xs-12 hidden-lg hidden-md">
                <select class="form-control" onchange="location = this.options[this.selectedIndex].value;"><option selected disabled value="">Quick Links</option>
                    <option value="http://mamascoralbeach.com/">Home</option>
                    <option value="http://mamascoralbeach.com/rooms-appartment/">Services</option>
                    <option value="http://mamascoralbeach.com/about-us/">About Us</option>
                    <option value="http://mamascoralbeach.com/gallery/">Gallery</option>
                    <option value="http://mamascoralbeach.com/booking/">Booking</option>
                    <option value="http://mamascoralbeach.com/contact-us/">Contact Us</option></select></div>

            <div class="footer-menu col-lg-9 col-md-9 hidden-xs hidden-sm">
<!--                <ul id="menu-main_menu_footer" class="footer_nav"><li  class="menu-item"><a title="Home" href="http://mamascoralbeach.com/">Home</a></li>
<li  class="menu-item "><a title="Services" href="http://mamascoralbeach.com/rooms-appartment/">Services</a></li>
<li  class="menu-item "><a title="About Us" href="http://mamascoralbeach.com/about-us/">About Us</a></li>
<li  class="menu-item "><a title="Gallery" href="http://mamascoralbeach.com/gallery/">Gallery</a></li>
<li  class="menu-item"><a title="Booking" href="http://mamascoralbeach.com/booking/">Booking</a></li>
<li  class="menu-item"><a title="Contact Us" href="http://mamascoralbeach.com/contact-us/">Contact Us</a></li>
</ul>            -->
<?php

/*$mamasnav = array(
   
    'theme_location' => 'mamasfooter_nav'
    
);*/

?>
<?php /*wp_nav_menu($mamasnav); */?>

<?php
            wp_nav_menu( array(
                'menu'              => 'Footer Nav',
                'theme_location'    => 'mamasfooter_nav',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'footer-menu col-lg-9 col-md-9 hidden-xs hidden-sm',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'footer_nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                //Process nav menu using our custom nav walker
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
          
            </div>

                        <div class="col-xs-5 col-sm-4 col-md-3 ma-socialbtn">
                            <div class="row">
                                <a href="#" class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php bloginfo('template_url'); ?>/images/fb_logo.png" alt="" class="img-responsive">
                                </a>
                                <a href="#" class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php bloginfo('template_url'); ?>/images/twitter_logo.png" alt="" class="img-responsive">
                                </a>
                                <a href="#" class="col-xs-4 col-sm-4 col-md-4">
                                    <img src="<?php bloginfo('template_url'); ?>/images/google_logo.png" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="copyright_area col-sm-8 col-xs-7 hidden-lg hidden-md text-right" style="margin-top: 20px;">  
                <p>&copy; 2013 Mamas. All Rights Reserved. Site By : <a href="http://thesanmark.com/">SANMARK</a></p>
            </div>

            <div class="copyright_area col-lg-7 col-md-7 hidden-sm hidden-xs text-left">  
                <p>&copy; <?php echo date('Y');?> <?php bloginfo('name') ?>. All Rights Reserved. Site By : <a href="http://thesanmark.com/">SANMARK</a></p>
            </div>

                    </div>
                    </div>
                </div>
                <!-- End ma-footercontent content -->
            <!-- </div> -->
            <!-- End ma-maincontainer row content -->
        <!-- </div> -->
        <!-- End ma-maincontainer content -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php bloginfo('template_url'); ?>/js/vender/jquery-1.11.3.js" type="text/javascript"></script>
        
    <script src="<?php bloginfo('template_url');?>/js/jquery-ui.js" type="text/javascript"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/js/jquery.dropotron.js" type="text/javascript"></script>
    <script>
        $(function() {
				
				// Note: make sure you call dropotron on the top level <ul>
				$('#main-nav > ul').dropotron({ 
					offsetY: -10 // Nudge up submenus by 10px to account for padding
				});
                                
                                for(var i = 0; i < $(".menu-item").length; i++){
                                    var item = i+1;
                                    if($("#page"+item).length>0){
                                        $("li:nth-child("+item+")").addClass("current-menu-item");
                                        break;
                                    }
                                }
			
			});
    </script>
    <script>
                            $(function() {
                                $("#check_in_date").datepicker();
                            });
                        </script>
                        <script>
                            $(function() {
                                $("#check_out_date").datepicker();
                            });
                        </script>
    <?php wp_footer(); ?>
    </body>
</html>

