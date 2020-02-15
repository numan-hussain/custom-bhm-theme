<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
<div class="onlyfor-desktop-custom">
    <div class="top-bar">
    <div class="container">
    <div class="row">
    <div class="col-md-2">

     
 

                 <ul class="element-item element-social-icons header-social-icons item-block-social-icons color-custom align-middle">
                        <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-facebook" rel="nofollow" target="_blank" href="https://www.facebook.com/billyhydemusic/" title="Facebook">
                             <i class="fab fa-facebook-f"></i>
                                        </a>
                                </li>
                            <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-instagram" rel="nofollow" target="_blank" href="https://www.instazu.com/profile/billyhydemusicsuperstore" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                        </a>
                                </li>
                                      </ul>
    </div>
    <div class="col-md-5">
    <nav class="navbar navbar-expand-xl p-0">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
            </div>



            <div class="col-md-5 profile-icon">

                      <?php
                            if ( is_user_logged_in() ) { ?>
                                 

                             
            <div id="element-header-account-desktop" class="element-item element-header-account default-color-style left-position  normal-style  element-align-right link">
            <a class="account-element-link account-url" href="https://billyhydemusic.com.au/my-account/">
            <span class="account-icon"><i class="far fa-user"></i></span>        </a>
                        <div class="wrap-dashboard-form">
                    <nav class="woocommerce-MyAccount-navigation">
                        <ul>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                    <a href="https://billyhydemusic.com.au/my-account/">Dashboard</a>
                                </li>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                    <a href="https://billyhydemusic.com.au/my-account/orders/">Orders</a>
                                </li>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                    <a href="https://billyhydemusic.com.au/my-account/downloads/">Downloads</a>
                                </li>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                    <a href="https://billyhydemusic.com.au/my-account/edit-address/">Addresses</a>
                                </li>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                    <a href="https://billyhydemusic.com.au/my-account/edit-account/">Account details</a>
                                </li>
                                                            <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                    <a href="https://billyhydemusic.com.au/my-account/customer-logout/?_wpnonce=e0d423ea6d">Logout</a>
                                </li>
                                                    </ul>
                    </nav>
                </div>
                </div> <?php } else {  ?>
                                 
 <div id="element-header-account-desktop" class="element-item element-header-account default-color-style left-position  normal-style  element-align-right link">
            <a class="account-element-link account-url" href="https://billyhydemusic.com.au/my-account/">
            <span class="account-icon"><i class="far fa-user"></i></span>        </a>
                        <div class="wrap-dashboard-form">
                    <nav class="woocommerce-MyAccount-navigation">
                        <ul>
                                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                        <a href="https://billyhydemusic.com.au/my-account">Login</a>
                    </li>
                                                <li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                        <a href="https://billyhydemusic.com.au/my-account">Register</a>
                    </li> 
                 
                                        </ul>
                    </nav>
                </div>
                </div>



                          <?php   }
                        ?>
                <?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
                <?php echo do_shortcode('[xoo_wsc_cart]'); ?>


                 
            </div>
    </div>
    </div>
    </div>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container">
            <div class="row">
            <div class="col-md-2">
            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="https://billyhydemusic.com.au/wp-content/uploads/2019/10/thumbnail-1.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
            </div>
            
            <div class="col-md-8">
            <div class="align-middle header-middle-option">
            <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
            </div>
            </div>
            
             <div class="col-md-2">
            <div id="element-header-products-compare-desktop" class="header-middle-option element-item element-header-products-compare top-right">
    <a class="products-compare-link browse-products-compare" href="">
        <span class="products-compare-icon">
                   <i class="fas fa-retweet"></i>
                    </span>
                    <span class="products-compare-title">My compare</span>
            </a>
</div>
            </div>
            
            </div>
        </div>
	</header><!-- #masthead -->
    <div class="menu-wrapper">
        <div class="container">
			<div class="row">
               <?php wp_nav_menu( array( 'theme_location' => 'menu2' ) ); ?>
            </div>
         </div>
 
    </div>


</div><!-- hide from desktop -->
	
<div class="mobile-container-custom">
   <div class="mcc-row">
       <div class="mobile-first-custom">
               <?php wp_nav_menu( array( 'theme_location' => 'menu2' ) ); ?>
       </div>  
       <div class="mobile-second-custom">
           <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="https://billyhydemusic.com.au/wp-content/uploads/2019/10/thumbnail-1.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
       </div>
        <div class="mobile-thrid-custom">
             <!-- will add a feature -->
        </div>
      
   </div><!--/single raw-->

   <div class="mcc-row">
       <div class="search-area-custom-mobile">
           <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
       </div>
   </div>
</div> <!--/mobile container custom-->


                <?php endif; ?>