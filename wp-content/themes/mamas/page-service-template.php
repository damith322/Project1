<?php

/* 
  Template Name: Our Services
 */
?>
<?php get_header(); ?>

<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

<!--<h2><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2>-->

    <?php  //the_content();  ?>
<div class="container">
<div class="row  ma-midpadspace">
        <h2 class="ma-title">Our Services</h2>

        <?php
        $default_attr = array(
	'src'   => $src,
	'class' => "img-responsive ma-midimg",
	'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
);
        $args = array('posts_per_page' => 4, 'offset' => 0, 'category' => 6);

        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post);
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ma-midcontent">
                                    <div class="services_tile services_tile_shadow">
                                    <h4 class="ma-midh3"><?php the_title(); ?></h4>
                                    <span class="tumbnails">
                                    <?php the_post_thumbnail('post-thumbnail', array( 'class'=> "img-responsive ma-midimg")); ?>
                                    </span>
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="ma-learn" href="<?php the_permalink(); ?>">learn more</a>
                                    </div>
            </div>
            <?php
        endforeach;
        wp_reset_postdata();
        ?>
</div>
</div>
 </div>   
</div>  
    <?php endwhile;
else:
    echo "<p>No Content Found Here... This is gallery</p>";
endif;
?>

<?php get_footer(); ?>

