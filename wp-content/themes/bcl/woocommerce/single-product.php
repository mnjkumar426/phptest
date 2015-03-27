<?php get_header();
$defaults = apply_filters( 'woocommerce_breadcrumb_defaults', array(
		'delimiter'   => ' &gt; ',
		'wrap_before' => '<nav style="" class="woocommerce-breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
) );
$args='';
$args = wp_parse_args( $args, $defaults );
?>

<div class="row margin main-content" style="padding-top: 20px;">
<div class="row margin" style="padding-left: 20px;font-size: 14px;padding-bottom: 20px;">
<?php wc_get_template( 'global/breadcrumb.php', $args );?>
</div>
<div class="row margin" style="">
	
	<?php while ( have_posts() ) : the_post(); 
	
	 wc_get_template_part( 'content', 'single-product' ); 
		  endwhile;?>
	</div>




</div>
	<?php get_footer();?>