<?php
/**
 * Title: Large Banner Image and text
 * Slug: red-dragon-portfolio/large-banner-image-and-text
 * Categories: red_dragon_portfolio_portfolio-banners
 */
?>
<!-- wp:group {"metadata":{"name":"Large Banner Image and text","categories":["portfolio-banners-hero-sections"],"patternName":"core/block/377"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/milne-plaza-feature-image-1-1024x683.jpg","dimRatio":60,"overlayColor":"contrast","isUserOverlayColor":true,"contentPosition":"center center","isDark":false,"sizeSlug":"large","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/milne-plaza-feature-image-1-1024x683.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","className":"is-style-default","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center is-style-default has-xx-large-font-size"><?php esc_html_e('Red Dragon', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Future Dietitian passionate about sustainability', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"center"} -->
<ul class="wp-block-social-links aligncenter"><!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"email@example.com","service":"mail"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->