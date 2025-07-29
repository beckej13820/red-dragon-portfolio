<?php
/**
 * Title: Recent Projects Showcase 1
 * Slug: red-dragon-portfolio/recent-projects-showcase-1
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Recent Projects Showcase', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Explore some of my latest work.', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":36,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","align":"wide","style":{"border":{"radius":"10px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}}}} /-->

<!-- wp:post-terms {"term":"category","className":"is-style-post-terms-1","style":{"spacing":{"padding":{"top":"0"}},"typography":{"textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","fontSize":"medium","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-medium-font-size"><!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMore Projects%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/posts/' ) . '" data-type="page" data-id="254">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->