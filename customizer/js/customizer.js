jQuery(document).ready(function(){
//redirect
//above-header
jQuery( '.focus-customizer-menu-redirect-col1,.focus-customizer-menu-redirect-col2,.focus-customizer-menu-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel('nav_menus').focus();
} );
jQuery( '.focus-customizer-widget-redirect-col1,.focus-customizer-widget-redirect-col2,.focus-customizer-widget-redirect-col3,.focus-customizer-widget-redirect' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.panel( 'widgets' ).focus();
} );
jQuery( '.focus-customizer-social_media-redirect-col1,.focus-customizer-social_media-redirect-col2,.focus-customizer-social_media-redirect-col3' ).on( 'click', function (e){
            e.preventDefault();
            wp.customize.section( 'open-shop-social-icon' ).focus();
} ); 

/* === Checkbox Multiple Control === */
    jQuery( '.customize-control-checkbox-multiple input[type="checkbox"]' ).on(
        'change',
        function() {
   // alert('');
            checkbox_values = jQuery( this ).parents( '.customize-control' ).find( 'input[type="checkbox"]:checked' ).map(
                function() {
                    return this.value;
                }
            ).get().join( ',' );

            jQuery( this ).parents( '.customize-control' ).find( 'input[type="hidden"]' ).val( checkbox_values ).trigger( 'change' );
        }
    );

// section sorting
      jQuery( "#sortable" ).sortable({
        placeholder: "ui-sortable-placeholder", 
        cursor: 'move',
        opacity: 0.65,
        stop: function ( event, ui){
        var data = jQuery(this).sortable('toArray');
            //  console.log(data); // This should print array of IDs, but returns empty string/array      
            jQuery( this ).parents( '.customize-control').find( 'input[type="hidden"]' ).val( data ).trigger( 'change' );
        }
    });
//Disable Hrader Layout
jQuery('input[id=open_shop_main_header_layout-mhdrone], input[id=open_shop_main_header_layout-mhdrtwo], input[id=open_shop_main_header_layout-mhdrthree], input[id=open_shop_top_slide_layout-slide-layout-2], input[id=open_shop_top_slide_layout-slide-layout-3], input[id=open_shop_top_slide_layout-slide-layout-4], input[id=open_shop_cat_slide_layout-cat-layout-2], input[id=open_shop_cat_slide_layout-cat-layout-3],input[id=open_shop_banner_layout-bnr-two],input[id=open_shop_banner_layout-bnr-four],input[id=open_shop_banner_layout-bnr-five],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-one],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-two],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-three],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-five],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-six],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-seven],input[id=open_shop_bottom_footer_widget_layout-ft-wgt-eight]').attr("disabled",true);
//Disable select option
jQuery('#_customize-input-open_shop_category_optn option[value="featured"],#_customize-input-open_shop_category_optn option[value="random"],#_customize-input-open_shop_woo_product_animation option[value="swap"],#_customize-input-open_shop_pagination option[value="scroll"],#_customize-input-open_shop_pagination option[value="click"],#_customize-input-open_shop_main_header_option option[value="button"],#_customize-input-open_shop_main_header_option option[value="widget"], #_customize-input-open_shop_blog_post_pagination option[value="click"], #_customize-input-open_shop_blog_post_pagination option[value="scroll"],#_customize-input-open_shop_blog_post_content option[value="full"],#_customize-input-open_shop_blog_post_content option[value="nocontent"]').attr("disabled", true);
jQuery('#customize-control-open_shop_blog_read_more_txt input, #customize-control-open_shop_blog_expt_length input,#customize-control-open_shop_disable_top_slider_sec input').attr("disabled",true);


jQuery('#customize-control-open_shop_above_header_layout,#customize-control-open_shop_above_footer_layout').addClass("lite");   
jQuery('#_customize-input-open_shop_above_header_col1_set option[value="none"],#_customize-input-open_shop_above_header_col1_set option[value="menu"],#_customize-input-open_shop_above_header_col1_set option[value="widget"],#_customize-input-open_shop_above_header_col1_set option[value="social"],#_customize-input-open_shop_above_header_col2_set option[value="none"],#_customize-input-open_shop_above_header_col2_set option[value="text"],#_customize-input-open_shop_above_header_col2_set option[value="menu"],#_customize-input-open_shop_above_header_col2_set option[value="widget"]').attr("disabled",true);
jQuery('#customize-control-open_shop_above_mobile_disable input,#customize-control-open_shop_rtl input').attr("disabled",true);
jQuery('input[id=open_shop_above_header_layout-abv-none],input[id=open_shop_above_header_layout-abv-one],input[id=open_shop_above_header_layout-abv-three],#customize-control-open_shop_shadow_header input,#customize-control-open_shop_sticky_header input,#customize-control-open_shop_whislist_mobile_disable input,#customize-control-open_shop_account_mobile_disable input,#customize-control-open_shop_cart_mobile_disable input,input[id=open_shop_above_footer_layout-ft-abv-none],input[id=open_shop_above_footer_layout-ft-abv-one],input[id=open_shop_above_footer_layout-ft-abv-three]').attr("disabled",true);

jQuery('#customize-control-open_shop_top_slide_content .button.add_field').remove();
jQuery('#customize-control-open_shop_top_slide_content').append("<h4>(To Add More Slides Feature Available In Pro Version)</h4>");
});


