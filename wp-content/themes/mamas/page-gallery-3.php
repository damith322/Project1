<?php get_header(); ?>

<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

<h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>

<?php //get_template_part( 'content', get_post_format('gallery') ); ?>
<div class="container">
    <div class="row">
    <?php  the_content();  ?>
</div>   
    <?php endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;
?>

<?php get_footer(); ?>

