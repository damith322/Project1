<?php get_header(); ?>

<?php

//if(have_posts()):
//    while(have_posts()) : the_post(); ?>

<!--<h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>-->

    <?php  //the_content();  ?>

<?php 

// vars
$image = get_field('image');
	
?>
<!--<h1><?php //the_title(); ?></h1>-->

<div class="container">
    <div class="row marow-conainer">
     
    <h2 class="matitle-page"><?php the_title(); ?></h2>   
<div class="ma-p-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <img class="img-circle maimg" src="<?php echo $image['url']; ?>" />
    <p><?php echo the_field('text'); ?></p>
</div>        
<div class="ma-p-text col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <p><?php echo the_field('content'); ?></p>
</div>
    </div>
</div>
<?php

$post = $wp_query->post;

if ( in_category('4') ) {

include(TEMPLATEPATH . '/page-menu-template.php'); } 

elseif ( in_category('6') ) {

include(TEMPLATEPATH . '/page-service-template.php'); }

else {

include(TEMPLATEPATH . '/single-default.php');

}

?>
    <?php include 'menu_footer'; ?>
    <?php // endwhile;
//else:
//    echo "<p>No Content Found Here... this gallery</p>";
//endif;
?>

<?php get_footer(); ?>