<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()) : the_post();
        ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>
        </div>
        </div>
        <!--<div class="row  mamenus_area">
                        <div class="row">
                    <h2 class="ma-title">Our Menus</h2>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mamenus_tiles">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <img width="150" height="150" src="http://mamascoralbeach.com/wp-content/uploads/2013/09/seafood-150x150.png" class="img-circle wp-post-image" alt="seafood" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h4>Seafood</h4><p>We're specialized in sea food - find out why!</p><a class="btn ma-learn" href="http://mamascoralbeach.com/seafood/">Taste</a></div></div>    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mamenus_tiles">
                        <div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img width="150" height="150" src="http://mamascoralbeach.com/wp-content/uploads/2013/09/beverage-150x150.png" class="img-circle wp-post-image" alt="beverage" /></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><h4>Beverage</h4><p>Enjoy the taste of a drink.</p><a class="btn ma-learn" href="http://mamascoralbeach.com/beverage/">Taste</a></div></div>    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mamenus_tiles">
                        <div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img width="150" height="150" src="http://mamascoralbeach.com/wp-content/uploads/2013/09/alacart-150x150.png" class="img-circle wp-post-image" alt="alacart" /></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><h4>Ala&#8217; carte</h4><p>Choose anything and everything you fancy.</p><a class="btn ma-learn" href="http://mamascoralbeach.com/alacart/">Taste</a></div></div>    </div>
                </div>
        </div>-->
<?php include 'menu_footer'; ?>
        </div>
        </div>
        </div>


        <?php
    endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;
?>

<?php get_footer(); ?>