<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>






	
<div id="top-footer" class="footer-row footer-top full-width-contained footer-preset-">
    <div class="container">
        <div class="wrap-builder-items">
            <div class="row">
                <div class="col-md-12 builder-item builder-block-footer-widget-6">
                    <div class="builder-widget-element widget-area">
                        <section id="custom_html-6" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 p-3">
                                            <h2 style="text-align:center; color:white">
            SIGN UP FOR OUR EMAIL
        </h2>
                                            <h6 style="text-align:center; color:white">
            GET THE BEST DEALS, SALES AND OFFERS!
        </h6>
                                        </div>

                                        <div class="col-md-7 m-auto">
                                            <?php echo do_shortcode('[mc4wp_form id="582"]'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div id="main-footer" class="footer-row footer-main full-width-contained footer-preset-"><div class="container"><div class="wrap-builder-items"><div class="row"><div class="col-md-3 col-12 builder-item builder-block-footer-widget-4"><div class="builder-widget-element widget-area"><section id="zoo_imghover_widget-3" class="widget zoo_imghover_widget">        <div class="zoo-image-hover footer-logo" style="text-align:left">
                            <a href="https://billyhydemusic.com.au/">
                    <img src="https://billyhydemusic.com.au/wp-content/uploads/2019/08/logo.png" alt="">
                                    </a>
                                
        </div>
        </section><section id="zoo_imghover_widget-4" class="widget zoo_imghover_widget">        <div class="zoo-image-hover footer-logo" style="text-align:left">
                            <a href="#">
                    <img src="https://billyhydemusic.com.au/wp-content/uploads/2019/10/thumbnail-1.png" alt="">
                                    </a>
                                
        </div>
        </section><section id="text-7" class="widget widget_text">			<div class="textwidget"><p><strong> Address: </strong>242 Whitehorse Road, Nunawading VIC 3131</p>
<p><strong>Phone:</strong> 1300 245 594 (BILLYH)</p>
</div>
		</section><section id="zoosocialwidget-3" class="widget ZooSocialWidget">
			<ul class="footer-social-custom element-item element-social-icons header-social-icons item-block-social-icons color-custom align-middle">
                        <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-facebook" rel="nofollow" target="_blank" href="https://www.facebook.com/billyhydemusic/" title="Facebook">
                             <i class="fab fa-facebook-f"></i>
                                        </a>
                                </li>
                            <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-twitter" rel="nofollow" target="_blank" href="#" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                        </a>
                                </li>
                            <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-youtube-1" rel="nofollow" target="_blank" href="#" title="Youtube">
                                    <i class="fab fa-youtube"></i>
                                        </a>
                                </li>
                            <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-instagram" rel="nofollow" target="_blank" href="#" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                        </a>
                                </li>
                            <li class="social-icon-item">
                                    <a class="social-icon  shape-circle  icon-pinterest" rel="nofollow" target="_blank" href="#" title="Pinterest">
                                    <i class="fab fa-pinterest"></i>
                                        </a>
                                </li>
            </ul>

		</section>
		
		</div></div><div class="col-md-3 col-12 builder-item builder-block-footer-widget-1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
		<div class="col-md-3 col-12 builder-item builder-block-footer-widget-2"><?php dynamic_sidebar( 'footer-2' ); ?></div>
		<div class="col-md-3 col-12 builder-item builder-block-footer-widget-3">
		<?php dynamic_sidebar( 'footer-3' ); ?>
		
		</div></div></div></div></div>
	<footer id="colophon" class="footer-bottom" role="contentinfo">
		<div class="container text-center">
            <div class="site-info">
                Copyright © 2019 Dale Cleves Music Pty Ltd All Rights Reserved
                

            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<script>
     jQuery(".attachment-woocommerce_thumbnail").wrap("<div class='wrap-product-image-custom'></div>");
</script>


<?php wp_footer(); ?>
</body>
</html>