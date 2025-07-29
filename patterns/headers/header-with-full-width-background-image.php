<?php
/**
 * Title: Header with full-width background image
 * Slug: red-dragon-portfolio/header-with-full-width-background-image
 * Block Types: core/template-part/header
 * Categories: Headers
 */
?>
<!-- wp:group {"metadata":{"categories":["Headers"],"patternName":"core/header-inside-full-width-background-image","name":"Header with full-width background image"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/08-7455.jpg","dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":50,"contentPosition":"center center","sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<div class="wp-block-cover alignfull has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:50px"><img class="wp-block-cover__image-background  size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/08-7455.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"className":"is-style-default"} /-->

<!-- wp:site-title {"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation /--></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","className":"is-style-cursive","style":{"typography":{"fontSize":"9vw"}}} -->
<h2 class="wp-block-heading has-text-align-center is-style-cursive" style="font-size:9vw"><?php esc_html_e('Red Dragon', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->