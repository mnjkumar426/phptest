

<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<?php
		if ( has_post_thumbnail() ) {

			$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
			$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => $image_title
		
		) );

?>
<div class=" col-sm-3 margin   " <?php post_class( $classes ); ?> style="margin-bottom: 10px;" >
<div class="row margin" style="border: 1px solid #ddd;	text-align: center;margin-right: 10px;">
<div class="row margin image margin">
	

<a href="<?php the_permalink(); ?>"  >

<?php
/**
 * woocommerce_before_shop_loop_item_title hook
*
* @hooked woocommerce_show_product_loop_sale_flash - 10
* @hooked woocommerce_template_loop_product_thumbnail - 10
*/
do_action( 'woocommerce_before_shop_loop_item_title' );
$url = site_url( '/contact-us/');

?>
</a>


</div>
<div class="row margin sku">

<p style="padding-top: 10px;color: black;font-size: 13px;font-weight: 400"><?php echo the_title()?></p>
<?php 
global $product;
if($product->get_sku()){
echo '<p style="padding-top: 0px;color: black;font-size: 13px;font-weight: 400">SKU:&nbsp;'. $product->get_sku().'</p>';} 
else{echo '<p style="padding-top: 0px;color: black;font-size: 13px;font-weight: 400">&nbsp;</p>';}
?>


</div>

<div class="row margin price ">
   

   <a href="<?php echo $url;?>">Call for price</a>

</div>
<?php 
}?>
		
		
		
	
	 
	<?php do_action( 'woocommerce_product_thumbnails' ); ?>
	
</div>
</div>








