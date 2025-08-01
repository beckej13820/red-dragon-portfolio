<?php
/**
 * Title: Footer with columns
 * Slug: red-dragon-portfolio/footer-with-columns
 * Block Types: core/template-part/footer
 * Categories: footer
 */
?>
<!-- wp:columns {"metadata":{"name":"Footer with Columns"},"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:site-title /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Contact', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('(555) 456 789', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('redthedragon@gmail.com', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#EAEAEA","iconBackgroundColor":"contrast"} -->
<ul class="wp-block-social-links has-icon-color"><!-- wp:social-link {"url":"red","service":"linkedin"} /-->

<!-- wp:social-link {"url":"red","service":"wordpress"} /-->

<!-- wp:social-link {"service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Useful Links', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sResume%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/resume/' ) . '" data-type="page" data-id="69">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sHome page 2%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/home-page-1/' ) . '" data-type="page" data-id="9">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sHomepage 3%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'http://localhost:8881/homepage-3/' ) . '" data-type="page" data-id="12">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->