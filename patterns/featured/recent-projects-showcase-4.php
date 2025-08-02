<?php
/**
 * Title: Recent Projects Showcase 4
 * Slug: red-dragon-portfolio/recent-projects-showcase-4
 * Categories: red_dragon_portfolio_recent-project-showcase
 */
?>
<!-- wp:group {"align":"full","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-3" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Recent Projects Showcase', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Explore some of my latest work.', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":36,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom center","style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"elements":{"heading":{"color":{"text":"#ffffff"}},"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center has-base-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"dimensions":{"minHeight":"35vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:35vh"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":25} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
<p class="has-text-align-right has-medium-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMore Projects%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/posts/' ) . '" data-type="page" data-id="254">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->