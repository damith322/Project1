<?php get_header(); ?>

<?php

//if(have_posts()):
//    while(have_posts()) : the_post(); ?>

<?php   //the_content();  ?>

<?php // endwhile;
//else:
//    echo "<p>No Content Found Here... this is gallery</p>";
//endif;
?>
    
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
<?php get_footer(); ?>


