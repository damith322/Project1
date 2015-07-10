<?php get_header(); ?>

<?php

if(have_posts()):
    while(have_posts()) : the_post(); ?>

<!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
<?php //get_template_part( 'content', get_post_format() ); ?>
    <?php  //the_content();  ?>

<div class="ma-slider-content">
    <div class="container">
        <?php if ( function_exists( 'get_wp_parallax_content_slider' ) ) { get_wp_parallax_content_slider('[parallaxcontentslider]'); } ?>
    </div>
                    </div>
                    <div class="container">
                        <div class="row ma-midpadspace clearfix" style="clear: both;">
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
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ma-midcontent text-center">
                                    <div class="services_tile services_tile_shadow">
                                    <h4 class="ma-midh3"><?php the_title(); ?></h4>
                                    <span class="tumbnails">
                                    <?php the_post_thumbnail('post-thumbnail', array( 'class'=> "img-responsive ma-midimg")); ?>
                                    </span>
                                    <p><?php the_excerpt(); ?></p>
<!--                                    <div class="ma-learndiv">-->
                                    <a class="ma-learn" href="<?php the_permalink(); ?>">learn more</a>
<!--                                    </div>-->
                                    </div>
            </div>
            <?php
        endforeach;
        wp_reset_postdata();
        ?> 
                    <div class="row ma-bottomcontent">
        
        <?php
        $default_attr = array(
	'src'   => $src,
	'class' => "img-circle",
	'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) )
);
        $args = array('posts_per_page' => 3, 'offset' => 0, 'category' => 4,'orderby' => 'date','order' => 'DESC');

        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post);
            ?>
        <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2 ma-bottom text-center">
                                <div class="ma-menutile">
                        
                        <?php the_post_thumbnail('post-thumbnail', array( 'class'=> "img-circle")); ?>
<h4><?php the_title(); ?></h4>
<p><?php the_excerpt(); ?></p>
<a class="btn ma-learn" href="<?php the_permalink(); ?>">Taste</a>
 </div>
        </div>           
            <?php
        endforeach;
        wp_reset_postdata();
        ?>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 ma-bottomancher">
<!--                            <ul>
                                <li><h3>Wel Come to</h3></li>
                                <li><img class="img-responsive" src="<?php //bloginfo('template_url');?>/images/sub_logo.png" alt=""></li>
                            </ul>
                            <p class="ma-bottompara">
                             Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                             It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                             It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.   
                            </p>-->
<?php if(is_active_sidebar('sidebar-1')): ?>
<?php dynamic_sidebar('sidebar-1'); ?>
<?php endif; ?>
                        </div>
                        </div>
                    </div>
                </div>


    <?php endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;

?>

<?php get_footer(); ?>