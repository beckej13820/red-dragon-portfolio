<?php
/**
 * Title: Recent Projects Showcase 5
 * Slug: red-dragon-portfolio/recent-projects-showcase-5
 * Categories: featured, red_dragon_portfolio/recent-project-showcase
 */
?>
<!-- wp:group {"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Recent Projects Showcase', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Explore some of my latest work.', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":16,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-medium-posts","name":"Image at left"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.67%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.67%"><!-- wp:post-terms {"term":"category","className":"is-style-post-terms-1","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"right","fontSize":"medium"} -->
<p class="has-text-align-right has-medium-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sMore Projects%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/posts/' ) . '" data-type="page" data-id="254">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->