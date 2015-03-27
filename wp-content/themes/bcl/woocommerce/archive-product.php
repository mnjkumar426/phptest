<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


get_header(); ?>

<div class="row margin main-content" >


	
	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		//do_action( 'woocommerce_before_main_content' );
	
	// for bread_crumb
	$defaults = apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => ' &gt; ',
			'wrap_before' => '<nav style="padding-top:20px; " class="woocommerce-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
	) );
	
	$args = wp_parse_args( $args, $defaults );
	
	wc_get_template( 'global/breadcrumb.php', $args );
	?>

	<?php 
	
	$category = get_queried_object();
	 $p_id=$category->term_id;
	
	$argc=array(
      'number' => '12',
      'orderby' => 'name',
      'order' => 'ASC',
      'columns' => '4',
      'hide_empty' => '1',
      'parent' => $p_id
      
 );
	 ?>
	<div class="row margin" >
	
	 <?php 

	 echo product_categories_for_sub($argc);?>
	
	
	</div>
	<hr style="border-color: #ddd;">
	<div class="row margin"  style="background: #eceff4">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

	<h2 class="" ><?php ucfirst( woocommerce_page_title()); ?></h2>

		<?php endif; ?>

		<?php //do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
		//do_action( 'woocommerce_before_shop_loop' );
			?>

		<?php woocommerce_product_loop_start(); ?>

	<?php woocommerce_product_subcategories(); ?>
<div class="row margin" style="padding-bottom: 20px ;">
		<?php while ( have_posts() ) : the_post(); ?>

				
		<?php wc_get_template_part( 'content', 'product' ); ?>

		<?php endwhile; // end of the loop. ?>

		<?php  woocommerce_product_loop_end(); ?>
</div>
		<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				//do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		//do_action( 'woocommerce_after_main_content' );
	?>
</div>
	
	

</div>
<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
	//do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer(  ); ?>