<?php
/**
 * Title: LinkedIn inspired page
 * Slug: red-dragon-portfolio/linkedin-inspired-page
 * Categories: red_dragon_portfolio_page
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 650
 * Description: A LinkedIn inspired page.
 */
?>
<!-- wp:group {"metadata":{"name":"LinkedIn clone"},"align":"full","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/5180059-1024x683.jpg","dimRatio":50,"overlayColor":"accent-1","isUserOverlayColor":true,"minHeight":128,"minHeightUnit":"px","isDark":false,"sizeSlug":"large","align":"wide","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light" style="border-top-left-radius:10px;border-top-right-radius:10px;min-height:128px"><img class="wp-block-cover__image-background  size-large" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/5180059-1024x683.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-accent-1-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"#383838"}},"heading":{"color":{"text":"#383838"}}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}},"color":{"background":"#ffffff","text":"#383838"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-text-color has-background has-link-color" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;color:#383838;background-color:#ffffff;padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"overlap-image is-style-rounded","style":{"border":{"width":"5px"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full is-resized has-custom-border overlap-image is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/NY-SUNYO-Red-dragon-portrait15-A29157-X2.jpg" alt="" class="has-border-color has-base-border-color " style="border-width:5px;object-fit:cover;width:150px;height:150px"/></figure>
<!-- /wp:image -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Red Dragon', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-text-subtitle"} -->
<p class="is-style-text-subtitle"><?php esc_html_e('Mascot', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default"><?php esc_html_e('Oneonta, NY', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/SUNY-Oneonta-Logo-Primary-Black-and-Red.png" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default"><?php esc_html_e('Class of 2029', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('About  Me', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui quam, volutpat quis faucibus ut, aliquam eu dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Experience', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sTitle%2$s, Employer', 'red-dragon-portfolio' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Date Range', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna libero, ultricies quis placerat nec, ultricies quis diam. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Ut ultricies et dui et tristique. Cras ac orci vitae eros semper fermentum non eu nibh. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Phasellus mollis sapien vitae aliquet pellentesque. Nullam commodo ut mi ut venenatis. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sTitle%2$s, Employer', 'red-dragon-portfolio' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Date Range', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin urna libero, ultricies quis placerat nec, ultricies quis diam. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Ut ultricies et dui et tristique. Cras ac orci vitae eros semper fermentum non eu nibh. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Phasellus mollis sapien vitae aliquet pellentesque. Nullam commodo ut mi ut venenatis. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Licenses and Certifications', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Consectetur adipiscing elit, aliquam sed nascetur ridiculus.', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Sed dui quam, volutpat quis faucibus ut, aliquam eu dui. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Skills', 'red-dragon-portfolio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Lorem ipsum dolor sit amet: ', 'red-dragon-portfolio');?></p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li><?php esc_html_e('Consectetur adipiscing elit, aliquam sed nascetur ridiculus. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Sed dui quam, volutpat quis faucibus ut, aliquam eu dui. ', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e('Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'red-dragon-portfolio');?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->