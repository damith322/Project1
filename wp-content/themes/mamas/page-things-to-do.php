<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()) : the_post();
        ?>

                                                                                                                                                        <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
        <div class="container">
            <div class="row">
                <div class="matitle-page">
                    <h2>Thinks to do</h2>
                </div>  
                <?php
                $default_attr = array(
                    'src' => $src,
                    'class' => "img-responsive",
                    'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt))
                );
                $args = array('posts_per_page' => 8, 'offset' => 0, 'category' => 7);

                $myposts = get_posts($args);
                $i = 0;
                foreach ($myposts as $post) : setup_postdata($post);
                    if ($i % 2 == 0) {
                        ?>
                        <div class="ma-p-text col-xs-12 col-sm-5 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                            <div class="mathings-to-do-tile">

                                <div class="ma-alignleft col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => "img-circle")); ?> 
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mathings-content">
                                    <h2 class="matitle-sub">
                                        <?php the_title(); ?> 
                                    </h2></br>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            <!--            </div> -->
                        </div>
                        <div style="clear:both"></div>
                        <?php
                    } else {
                        ?>
                        <div class="ma-p-text col-xs-12 col-sm-5 col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1">
                            <div class="mathings-to-do-tile">

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mathings-content">
                                    <h2 class="matitle-sub">
                                        <?php the_title(); ?> 
                                    </h2></br>
                                    <p><?php the_excerpt(); ?></p>                                   
                                </div>
                                <div class="ma-alignleft col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <?php the_post_thumbnail('post-thumbnail', array('class' => "img-circle")); ?> 
                                </div>
                            </div>
                            <!--            </div> -->
                        </div>
                        <div style="clear:both"></div>
                        <?php
                    }
                    $i++;
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="container">
            <div class="row ma-midpadspace clearfix" style="clear: both;">
                <h2 class="ma-title">Our Services</h2>
                <?php
                $default_attr = array(
                    'src' => $src,
                    'class' => "img-responsive ma-midimg",
                    'alt' => trim(strip_tags($wp_postmeta->_wp_attachment_image_alt))
                );
                $args = array('posts_per_page' => 4, 'offset' => 0, 'category' => 6);

                $myposts = get_posts($args);
                foreach ($myposts as $post) : setup_postdata($post);
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ma-midcontent text-center">
                        <div class="services_tile services_tile_shadow">
                            <h4 class="ma-midh3"><?php the_title(); ?></h4>
                            <span class="tumbnails">
                                <?php the_post_thumbnail('post-thumbnail', array('class' => "img-responsive ma-midimg")); ?>
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
            </div>
        </div>

        <?php
    endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;
?>

<?php get_footer(); ?>

