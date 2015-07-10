<?php

/*
Plugin Name: Remove Woofeaturedimg
Plugin URI: http://sanmark.lk/
Description: Remove woocormerce Product Featured Image
Author: Sanmark Team
Version: 1.6
Author URI: http://sanmark.lk/
*/

    add_filter('woocommerce_single_product_image_thumbnail_html', 'remove_featured_image', 10,4);
    function remove_featured_image($html, $attachment_id, $post_id) {
    $featured_image = get_post_thumbnail_id($post_id);
    if ($attachment_id != $featured_image) {
        return $html;
    }
    return '';
}


function remove_gallery_and_product_images() {
    if (is_product()) {
      
  remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
  


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>
<div class="images">

	<?php
		if ( has_post_thumbnail() ) {
                    
                     $attachment_ids = $product->get_gallery_attachment_ids();
                     $attachment_id= $attachment_ids[0];
                   $image_title1 = esc_attr( get_the_title( $attachment_id ) );
                    //$image_caption1 	= get_post( $attachment_ids[0] )->post_excerpt;
                    $image_link1 = wp_get_attachment_url( $attachment_id );

                   $image1       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_thumbnail_size', 'shop_thumbnail' ) );
                     $image_class1 = esc_attr( implode( ' ', $classes ) );
        $image_title1 = esc_attr( get_the_title( $attachment_id ) );
                    

			$image_title 	= esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_caption 	= get_post( get_post_thumbnail_id() )->post_excerpt;
			$image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
			$image       	= get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title'	=> $image_title,
				'alt'	=> $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}


			//echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' . $gallery . '">%s</a>', $image_link, $image_caption, $image ), $post->ID );
			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image1" class="woocommerce-main-image zoom" title="%s" data-rel="prettyPhoto' .$gallery . '">%s</a>',$image_link1, $image_caption1, $image1 ), $post->ID );
            //echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image"  title="%s"  >%s</a>', $image_link1, $image_title1, $image1 ), $post->ID );
		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="%s" />', wc_placeholder_img_src(), __( 'Placeholder', 'yit' ) ), $post->ID );

		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>



</div>
<script>
	$('.thumbnails .zoom').click(function(e){
      e.preventDefault();

      var photo_fullsize =  $(this).find('img').attr('src');

      $('.woocommerce-main-image img').attr('src', photo_fullsize);

    });
</script>
<?php
    }
}

add_action('woocommerce_before_single_product_summary', 'remove_gallery_and_product_images');





