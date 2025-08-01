<?php
/**
 * Title: Footer with contact and social media
 * Slug: red-dragon-portfolio/footer-with-contact-and-social-media
 * Block Types: core/template-part/footer
 * Categories: footer
 */
?>
<!-- wp:group {"metadata":{"categories":["contact"],"patternName":"twentytwentyfive/contact-info-locations","name":"Footer with contact with social media and navigation menu"},"align":"full","className":"is-style-section-5","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-section-5" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"textAlign":"left","align":"wide","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large","fontFamily":"fira-code"} -->
<h2 class="wp-block-heading alignwide has-text-align-left has-fira-code-font-family has-x-large-font-size" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sHow to get in touch with Me%2$s', 'red-dragon-portfolio' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"},"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|20","bottom":"0"}},"border":{"top":{"color":"var:preset|color|accent-4","width":"1px"}}},"layout":{"type":"grid","minimumColumnWidth":null,"columnCount":2}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--accent-4);border-top-width:1px;margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:group {"style":{"layout":{"rowSpan":1,"columnSpan":1},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Social Media', 'red-dragon-portfolio');?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#FFFFFF","iconBackgroundColor":"base","iconBackgroundColorValue":"#131313","openInNewTab":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|20"},"margin":{"top":"5px","bottom":"5px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:5px;margin-bottom:5px"><!-- wp:social-link {"url":"example","service":"instagram"} /-->

<!-- wp:social-link {"url":"example","service":"facebook"} /-->

<!-- wp:social-link {"url":"example","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Email', 'red-dragon-portfolio');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('example@example.com', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"columnSpan":1,"rowSpan":1}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Useful Links', 'red-dragon-portfolio');?></h3>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":78,"fontSize":"medium","layout":{"type":"flex","orientation":"vertical"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->