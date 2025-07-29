<?php
/**
 * Title: Name and Circle Portrait with links
 * Slug: red-dragon-portfolio/name-and-circle-portrait-with-links
 * Categories: red_dragon_portfolio_portfolio-banners
 */
?>
<!-- wp:group {"metadata":{"name":"Name and Circle Portrait with links","categories":["portfolio-banners-hero-sections"],"patternName":"core/block/373"},"align":"full","className":"is-style-section-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-4"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-default" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size"><?php esc_html_e('Red Dragon', 'red-dragon-portfolio');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Class of 2029%1$sFuture Educator', 'red-dragon-portfolio' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Resume', 'red-dragon-portfolio');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Projects', 'red-dragon-portfolio');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"320px","height":"auto","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/NY-SUNYO-Red-dragon-portrait15-A29157-X2.jpg" alt="" class="" style="aspect-ratio:1;object-fit:cover;width:320px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:social-links {"align":"center"} -->
<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"x.com","service":"x"} /-->

<!-- wp:social-link {"url":"email@example.com","service":"mail"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->