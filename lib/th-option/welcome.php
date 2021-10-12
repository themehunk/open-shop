
<!--- tab first -->
<div class="theme_link">
    <h3><?php _e('Setup Home Page','open-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Click button to set theme default home page','open-shop'); ?></p>
     <p>
        <?php
        if($this->_check_homepage_setup()){
            $class = "activated disabled";
            $btn_text = "Default Homepage Activated";
        }else{
            $class = "default-home";
             $btn_text = "Setup Default Homepage";
        }
        ?>
        <button class="button activate-now button-primary <?PHP echo $class; ?>"><?php _e('Set Home Page','open-shop'); ?></button>
         </p>
    <p>
        <a target="_blank" href="https://www.youtube.com/watch?v=JE7o0DkAYeM"><?php _e('Manually Setup','open-shop'); ?></a>
    </p>


    <h3><?php _e('Documentation','open-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Our WordPress Theme is well Documented, you can go with our Documentation and learn to customize Open Shop.','open-shop'); ?></p>
    <p><a target="_blank" href="https://themehunk.com/docs/open-shop/"><?php _e(' Go to docs','open-shop'); ?></a></p>

</div> 

<!--- tab second -->
<div class="theme_link">
    <h3><?php _e('Import Demo Content','open-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('1. Install Hunk companion plugins', 'open-shop');?> </p>




    <?php
/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
 
// check for plugin using plugin name
if ( is_plugin_active( 'hunk-companion/hunk-companion.php' ) ) { ?>

    <button class="button disabled button-primary "><?php _e('Plugin Activated','open-shop'); ?>
</button> <?php 
               }else { ?>

    
    <button data-activated="Plugin Activated" data-msg="Activating Plugin" data-init="hunk-companion/hunk-companion.php" data-slug="hunk-companion" class="button install-now button hunk-companion">Install Now</button>


    
<?php } ?>

    <p><?php _e('2. Install One Click Demo Import plugins', 'open-shop');?> </p>

    <?php
/**
 * Detect plugin. For use on Front End only.
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
 
// check for plugin using plugin name
if ( is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' ) ) { ?>

<button class="button disabled button-primary "><?php _e('Plugin Activated','open-shop'); ?>
</button> <?php 
               }else { ?>

    <button data-activated="Plugin Activated" data-msg="Activating Plugin" data-init="one-click-demo-import/one-click-demo-import.php" data-slug="one-click-demo-import" class="button install-now button one-click-demo-import">Install Now</button>
                    
<?php 
} ?>

    <p><?php _e('3. If above both plugin activated then one click demo importer button.', 'open-shop');?> </p>
     <p>
            <?php
            // Sita Sites - Installed but Inactive.
            // Sita Premium Sites - Inactive.
            if ( file_exists( WP_PLUGIN_DIR . '/one-click-demo-import/one-click-demo-import.php' ) && is_plugin_inactive( 'one-click-demo-import/one-click-demo-import.php' )) {

              $class       = 'button zta-sites-inactive';
              $button_text = __( 'Activate Importer Plugin', 'open-shop' );
              $data_slug   = 'one-click-demo-import';
              $data_init   = '/one-click-demo-import/one-click-demo-import.php';

          } elseif ( ! file_exists( WP_PLUGIN_DIR . '/one-click-demo-import/one-click-demo-import.php' ) ) {

              $class       = 'button zta-sites-notinstalled';
              $button_text = __( 'Install Importer Plugin', 'open-shop' );
              $data_slug   = 'one-click-demo-import';
              $data_init   = '/one-click-demo-import/one-click-demo-import.php';

            }

            else {
              $class       = 'button active';
              $button_text = __( 'Import Demo', 'open-shop' );
              $link        = admin_url( 'themes.php?page=pt-one-click-demo-import' );
            }

            printf(
              '<a class="ztabtn %1$s" %2$s %3$s %4$s> %5$s </a>',
              esc_attr( $class ),
              isset( $link ) ? 'href="' . esc_url( $link ) . '"' : '',
              isset( $data_slug ) ? 'data-slug="' . esc_attr( $data_slug ) . '"' : '',
              isset( $data_init ) ? 'data-init="' . esc_attr( $data_init ) . '"' : '',
              esc_html( $button_text )
            );

        
            ?> </p>



            <p>
            <?php
            // Sita Sites - Installed but Inactive.
            // Sita Premium Sites - Inactive.
            if( file_exists( WP_PLUGIN_DIR . '/hunk-companion/hunk-companion.php' ) && is_plugin_inactive( 'hunk-companion/hunk-companion.php' )) {

              $class       = 'button zta-sites-inactive';
              $button_text = __( 'Activate Hunk Campanion Plugin', 'open-shop' );
              $data_slug   = 'hunk-companion';
              $data_init   = '/hunk-companion/hunk-companion.php';

              // Sita Sites - Not Installed.
              // Sita Premium Sites - Inactive.
            } elseif ( ! file_exists( WP_PLUGIN_DIR . '/hunk-companion/hunk-companion.php' ) ) {

              $class       = 'button zta-sites-notinstalled';
              $button_text = __( 'Install Customizer Plugin', 'open-shop' );
              $data_slug   = 'hunk-companion';
              $data_init   = '/hunk-companion/hunk-companion.php';

            }

            else {
              $class       = 'button active';
              $button_text = __( 'Import Demo', 'open-shop' );
              $link        = admin_url( 'themes.php?page=hunk-companion' );
            }

           /* printf(
              '<a class="ztabtn %1$s" %2$s %3$s %4$s> %5$s </a>',
              esc_attr( $class ),
              isset( $link ) ? 'href="' . esc_url( $link ) . '"' : '',
              isset( $data_slug ) ? 'data-slug="' . esc_attr( $data_slug ) . '"' : '',
              isset( $data_init ) ? 'data-init="' . esc_attr( $data_init ) . '"' : '',
              esc_html( $button_text )
            );*/

        
            ?>

                            </p>
</div>
<!--- tab third -->



<!--- tab second -->
<div class="theme_link">
    <h3><?php _e('Customize Your Website','open-shop'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
    <p><?php _e('Open Shop Lite theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','open-shop'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e('Start Customize','open-shop'); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php _e('Customizer Links','open-shop'); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e('Upload Logo','open-shop'); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[section]=site_color'); ?>" class="components-button is-link"><?php _e('Site Colors','open-shop'); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[section]=global_set'); ?>" class="components-button is-link"><?php _e('Global Options','open-shop'); ?></a>

                </div>


            <div class="col">
                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-shop-main-header'); ?>" class="components-button is-link"><?php _e('Header Options','open-shop'); ?></a>
                <hr>

                <a href="<?php echo admin_url('customize.php?autofocus[section]=open-shop-woo-shop-page'); ?>" class="components-button is-link"><?php _e('Shop Page Options','open-shop'); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=open-shop-section-blog-group'); ?>" class="components-button is-link"><?php _e('Blog Section','open-shop'); ?></a><hr>
            </div>


        </div>
    </div>

</div>
<!--- tab fourth -->

 