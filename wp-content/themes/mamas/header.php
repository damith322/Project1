<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html <?php language_attributes();  ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <title><?php bloginfo('title') ?></title>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url');?>/css/jquery-ui.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>">-->
    <script src="<?php bloginfo('template_url');?>/js/gen_validatorv4.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/js/modernizr.js" type="text/javascript"></script>
    <?php  wp_head(); ?>
    </head>
    <body id="page" <?php body_class(); ?>>
        <!-- Start ma-maincontainer content -->
            <!-- Start ma-maincontainer row content -->
                <!-- Start ma-headercontent  content -->
                <div id="ma-headercontent" class="ma-header">
                    <nav class="navbar navbar-default navbar-turquoise ma-navbar-header" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand hidden-xs" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="img-responsive" alt="Mamas Logo" /></a>
                        <a class="navbar-brand-min visible-xs" href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo-min.png" class="img-responsive" alt="Mamas Logo" /></a>
                    </div>

                    <div class="hidden-xs" style="height: 80px;"></div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="navbar-ex1-collapse" class="collapse navbar-collapse navbar-ex1-collapse">

<!--                        <ul id="menu-main_menu_header" class="nav navbar-nav navbar-right navbar-collapse">
                            <li class="menu-item active"><a title="Home" href="#">Home</a></li>
                            <li class="menu-item"><a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle">Services <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
    <li class="menu-item"><a title="Rooms &amp; Appartment" href="#">Rooms &#038; Appartment</a></li>
	<li class="menu-item"><a title="Travels &amp; Tours" href="#">Travels &#038; Tours</a></li>
	<li class="menu-item" ><a title="Scuba diving &amp; Snorkeling" href="#">Scuba diving &#038; Snorkeling</a></li>
	<li class="menu-item" ><a title="Glass bottom Boat service" href="#">Glass bottom Boat service</a></li>
	<li class="menu-item"><a title="Taxi Service" href="#">Taxi Service</a></li>
</ul>
</li>
<li class="menu-item"><a title="About Us" href="#">About Us</a></li>
<li class="menu-item"><a title="Menu" href="#" data-toggle="dropdown" class="dropdown-toggle">Menu <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu">
	<li class="menu-item"><a title="Ala&#039; carte" href="#">Ala&#8217; carte</a></li>
	<li class="menu-item"><a title="Beverage" href="#">Beverage</a></li>
	<li class="menu-item"><a title="Seafood" href="#">Seafood</a></li>
</ul>
</li>
<li class="menu-item"><a title="Gallery" href="#">Gallery</a></li>
<li class="menu-item"><a title="Things to Do" href="#">Things to Do</a></li>
<li class="menu-item"><a title="Booking" href="#">Booking</a></li>
<li class="menu-item"><a title="Contact Us" href="#">Contact Us</a></li>
</ul>-->
<?php /*

$mamasnav = array(
   
    'theme_location' => 'mamasheader_nav'
    
);

*/?>
<?php /*wp_nav_menu($mamasnav); */?>


<?php
            wp_nav_menu( array(
                'menu'              => 'Header Nav',
                'theme_location'    => 'mamasheader_nav',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'container_id'      => 'navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav navbar-right navbar-collapse',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                //Process nav menu using our custom nav walker
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
                    </div><!-- /.navbar-collapse -->

                </div>
            </nav>
                </div>
                <!-- End ma-headercontent  content -->
                <!-- Start ma-pagecontent  content -->
                <div id="ma-pagecontent" class="ma-pagecontent-area">

