<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;
the_title( '<h1 class="product_title entry-title ">', '</h1>' );
?>
<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>
	
	
<?php 

$online_stock = get_post_meta( $product->id, 'online_stock', true );
$stockquantity = get_post_meta( $product->id, '_stock', true );
$showonline = '';

   

	if($online_stock == '1') {
	$showonline = 'YES';
	}else{
	$showonline = 'NO';	
	}

    if($stockquantity > 0) {
    $showonline = 'YES';
	}


?>


<div class="item-stock">

<?php if ($stockquantity == 0 && $online_stock == '1') { 

?>


<div class="product-stock item-availability buy-features in-stock">
<span>AVAILABLE FOR ONLINE ORDER</span>
</div>

<?php }elseif ($stockquantity > 0) {?>
<div class="product-stock item-availability buy-features in-stock">
<span>IN STOCK</span>
</div>
<?php }else{ ?>
<div class="product-stock item-availability buy-features out-of-stock">
<span>CONTACT US FOR AVAILABILITY</span>
</div>

<?php } ?>

<div class="product-info-img buy-features">
<div class="warranty-box">
<h5 class="availability">Online: <?php echo $showonline; ?></h5>
<span>In-store: <sup><?php 

if($stockquantity < 0) {
echo '0';
}else{
echo number_format($stockquantity,0); } ?></sup></span>
</div>
</div>

</div>
