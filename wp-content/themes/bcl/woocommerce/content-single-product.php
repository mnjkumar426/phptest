<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>
<div class="row margin">
<div class="col-md-6" itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
    </div>
	<div class=" col-md-6 summary entry-summary">
    <h2> <?php the_title();?></h2>
     
     <p>Description</p>
     <p><?php the_content()?></p>
	<?php 
global $product;
if($product->get_sku()){
echo '<p style="padding-top: 0px;color: black;font-size: 13px;font-weight: 400">SKU:&nbsp;'. $product->get_sku().'</p>';} 

?>
	</div>
</div>
	

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

<!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
