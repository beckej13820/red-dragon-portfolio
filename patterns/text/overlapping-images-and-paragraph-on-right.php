<?php
/**
 * Title: Overlapping Images and paragraph on right
 * Slug: red-dragon-portfolio/overlapping-images-and-paragraph-on-right
 * Categories: text
 */
?>
<!-- wp:group {"align":"full","className":"is-style-section-2","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-2" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);flex-basis:45%"><!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/red-hibiscus-closeup.webp" alt="<?php esc_attr_e('Photography close up of a red flower.', 'red-dragon-portfolio');?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"-12vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:-12vw"><!-- wp:image {"width":"202px","sizeSlug":"full","align":"right","className":"is-resized","style":{"spacing":{"margin":{"right":"-5vw","left":"-5vw"}}}} -->
<figure class="wp-block-image alignright size-full is-resized" style="margin-right:-5vw;margin-left:-5vw"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/grid-flower-2.webp" alt="<?php esc_attr_e('Black and white photography close up of a flower.', 'red-dragon-portfolio');?>" style="width:202px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-left:0;flex-basis:50%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Heading', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et leo et libero vehicula euismod. Nulla scelerisque ac arcu in aliquam. Vestibulum accumsan cursus urna, sit amet interdum ex vulputate in. Fusce dignissim dolor mi, sit amet fermentum diam molestie sit amet. Sed egestas sodales mauris, dignissim tempor est feugiat ac. %1$s', 'red-dragon-portfolio' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->