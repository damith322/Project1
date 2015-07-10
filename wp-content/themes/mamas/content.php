<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="container">
<div class="row  mamenus_area clearfix">
    <div class="container">
        <h2 class="ma-title">Our Menus</h2>
        
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
        <div class="ma-p-text col-lg-4 col-md-4 col-sm-6 col-xs-12 mamenus_tiles">            
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <?php the_post_thumbnail('post-thumbnail', array( 'class'=> "img-circle")); ?>
                       
                    </div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h4><?php the_title(); ?></h4>
<p><?php the_excerpt(); ?></p>
<a class="btn ma-learn" href="<?php the_permalink(); ?>">Taste</a>
</div>
        </div>           
            <?php
        endforeach;
        wp_reset_postdata();
        ?>
    </div>
</div>
</div>

