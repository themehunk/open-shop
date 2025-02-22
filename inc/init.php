<?php 
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
$plugin_companion_file = 'hunk-companion/hunk-companion.php';
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
//breadcrumbs
get_template_part( 'lib/breadcrumbs/breadcrumbs');
//page-post-meta
get_template_part( 'lib/page-meta-box/open-page-meta-box');
//custom-style
get_template_part( 'inc/open-shop-custom-style');

// customizer
get_template_part('customizer/extend-customizer/class-open-shop-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-open-shop-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-open-shop-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-open-shop-customizer-range-value-control');
get_template_part('customizer/customizer-scroll/class/class-open-shop-customize-control-scroll');
get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');
get_template_part('customizer/sortable/class-open-control-sortable');
get_template_part('customizer/background/class-open-shop-background-image-control');
get_template_part('customizer/customizer-toggle/class-open-shop-toggle-control');
//typography
get_template_part('/customizer/typography/class-open-shop-control-typography');
get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer-constant');
get_template_part('customizer/customizer');
/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');

//Th Option
get_template_part( '/lib/th-option/th-option');

// Probutton
/******************************/
get_template_part('customizer/pro-button/class-customize');

/******************************/
// Plugin Activation
/******************************/
get_template_part( 'lib/notification/notify');
if (is_customize_preview() && !is_plugin_active($plugin_companion_file)) {
get_template_part('lib/notification/customizer-notification/thsm-custom-section');
}