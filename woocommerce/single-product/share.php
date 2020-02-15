<?php
/**
 * Single Product Share
 *
 * Sharing plugins can hook into here or you can add your own code directly.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/share.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_share' ); // Sharing plugins can hook into here.

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
?>

<div class="zoo-woo-share">
    <span class="label-share"><?php esc_html_e('Share:','ciao');?></span>
        <ul class="social-icons">
            <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"
                                    class="post_share_facebook icon-around" onclick="javascript:window.open(this.href,
                          '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=220,width=600');return false;"
                                    title="<?php echo esc_attr__('Share to facebook', 'ciao') ?>"><i class="fab fa-facebook-f"></i> </a></li>
            <li class="twitter"><a href="https://twitter.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
                          '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=260,width=600');return false;"
                                   title="<?php echo esc_attr__('Share to twitter', 'ciao') ?>"
                                   class="product_share_twitter icon-around"><i class="fab fa-twitter"></i></a></li>
            <li class="pinterest"><a
                        href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php if (function_exists('the_post_thumbnail')) echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php the_title_attribute(); ?>"
                        class="product_share_email icon-around"
                        title="<?php echo esc_attr__('Share to pinterest', 'ciao') ?>"><i class="fab fa-pinterest"></i></a></li>
            <li class="mail"><a
                        href="mailto:?subject=<?php the_title_attribute(); ?>&body=<?php echo strip_tags(get_the_excerpt()); ?> <?php the_permalink(); ?>"
                        class="product_share_email icon-around"
                        title="<?php echo esc_attr__('Sent to mail', 'ciao') ?>"><i class="far fa-envelope"></i></a>
            </li>
        </ul>
</div>