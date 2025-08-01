<?php
/**
 * Title: Footer with logo and socials
 * Slug: red-dragon-portfolio/footer-with-logo-and-socials
 * Block Types: core/template-part/footer
 * Categories: footer
 */
?>
<!-- wp:group {"metadata":{"categories":["footer","wireframe"],"patternName":"core/centered-footer-with-social-links","name":"Simple Footer with logo and socials"},"align":"full","className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"40vh"}},"textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull is-style-default has-contrast-color has-text-color" style="min-height:40vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:site-logo {"align":"center","className":"is-style-rounded","style":{"spacing":{"margin":{"bottom":"6px"}}}} /-->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Proudly powered by %1$sWordPress%2$s', 'red-dragon-portfolio' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#3B3B3B","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"12px","left":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->