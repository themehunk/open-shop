<div class="wrap theme_info_wrapper">
    <div class="header">

<!-- themehunkhemes-badge wp-badge
 --><div class="th-option-area">
        <div class="th-option-top-hdr">
            <div class="col-1">
                <div class="logo-img">
                <a target="_blank" href="<?php echo $theme_header['theme_brand_url']; ?>/?wp=openshop" class=""> <span><img src="http://localhost/wp572/wp-content/themes/open-shop/lib/th-option/assets/images/icon.png"/><?php echo $theme_header['theme_brand']; ?></span></a>
            </div>
            </div>
            <div class="col-2">
                <div class="th-option-heading">
                    <h2><?php  echo $theme_header['welcome']; ?></h2>
                    <span><?php echo $theme_header['welcome_desc']; ?></span>
                </div>
                <span class="version"><?php echo $theme_header['v']; ?></span>
                <span><?php echo _e("FREE THEME"); ?></span>
            </div>
        </div>
        <div class="th-option-bottom-hdr">
            <a class="tablinks active" onclick="openTab(event, 'Welcome')"><?php _e('Welcome','open-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Import-Demo-Content')"><?php _e('Import Demo Content','open-shop');?> </a>
            <a class="tablinks" onclick="openTab(event, 'Recommanded-Plugin')"><?php _e('Recommanded Plugin','open-shop');?> </a>
            <a class="tablinks" onclick="openTab(event, 'Free-Vs-Pro')"><?php _e('Free Vs Pro','open-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Help')"><?php _e('Help','open-shop');?></a>
            <a class="tablinks" onclick="openTab(event, 'Child-Theme')"><?php _e('Chid Theme','open-shop');?></a>

        </div>
    </div>

    </div> <!-- /header -->
</div>
<div class="content-wrap">
    <div class="main">

<div class="tab-left" >

       

        <!-- Tab content -->
        <div id="Welcome" class="tabcontent active">
            <div class="rp-two-column">
        <?php include('welcome.php' ); ?>

            </div> <!-- close twocolumn -->
        </div>

        <div id="Import-Demo-Content" class="tabcontent">

            <div class="rp-two-column">

                <div class="rcp theme_link th-row">
                
                <div class="title-plugin">
                <h3><?php _e('Click Here To import Demo Content','top-store'); ?></h3>
                <p> <?php _e("You need to Install required plugins like- Hunk Companion, WooCommerce and One click demo import plugin. After installing required plugins Import Butoon will activate."); ?></p>
              <a class="button disabled importdemo"><?php _e( 'Import Demo', 'open-shop' ); ?></a>
             </div>

             </div>
             
                  
                <?php echo $this->import_demo_content_setup_api(); ?>
            
            </div>

        
        </div>


        <div id="Recommanded-Plugin" class="tabcontent">
            <div class="rp-two-column">
            <?php echo $this->plugin_setup_api(); ?>
            </div>
        </div>


            <div id="Free-Vs-Pro" class="tabcontent">
                <div class="rp-two-column">
                    <?php include('free-pro.php' ); ?>

                </div>
            </div>

    <div id="Help" class="tabcontent">
        <div class="rp-two-column">
                    <?php include('need-help.php' ); ?>

        </div>
    </div>


    <div id="Child-Theme" class="tabcontent">
        <div class="rp-two-column">
                    <?php include('child-theme.php' ); ?>

        </div>
    </div>


</div> <!-- tab div close -->



<div class="sidebar-wrap">
    <div class="sidebar">
    <?php include('sidebar.php' ); ?>
    </div>
</div>


</div>