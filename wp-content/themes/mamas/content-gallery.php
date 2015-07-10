<?php
if(have_posts()):
    while(have_posts()) : the_post(); ?>

<?php   the_content();  ?>


<h2>This is gallery post</h2>

<?php endwhile;
else:
    echo "<p>No Content Found Here... this is gallery</p>";
endif;
?>

