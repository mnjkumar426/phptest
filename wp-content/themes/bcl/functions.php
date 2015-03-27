
<?php 
if(isset($_GET['data'])){
	
	echo "";
	
}
$includes = get_stylesheet_directory() . '/includes/';
require_once $includes.'scripts.php';
require_once $includes.'class-BootstrapNavMenuWalker.php';
require_once $includes.'newwalker.php';
register_nav_menu('home', __('Primary Menu'));
register_nav_menu('category', __('Secondary menu in left sidebar'));
register_nav_menu('footer', __('Top primary menu'));
register_nav_menu('cat-new', __('header secondary menu'));
 function new_excerpt_more($more) {
 global $post;return '<br><a class="more-link" href="'. get_permalink($post->ID) . '">read more about...'.get_the_title($post->ID).'</a>';
}add_filter('excerpt_more', 'new_excerpt_more',100); 

function sidebar(){
	
?>
	<div class="row margin cat-menu" >
Products
</div>
<div class="row margin" >
<div class="" id="myNavbar2"   style="border-radius:0px 0px 5px 5px" >
					      <?php
				
				$args = array(
					'theme_location' => 'category',
					'depth'		 => 0,
					'container'	 => false,
					'menu_class'	 => '',
					'walker'	 => new BootstrapNavMenuWalker()
				);

				wp_nav_menu($args);
			
			?>
		 </div>
</div>
<div class="row margin" style="margin-top: 10px; background: white;min-height: 300px;" >


</div>
	
	<?php 
}
function cust_field_text($column_name){
	if($column_name === 'cust_col'){
		the_meta();
	}
}
add_action('manage_posts_custom_column', 'cust_field_text', 10, 2);
function cust_fields($defaults){
	$defaults['cust_col'] = __('cust fields');
	return $defaults;
}

add_filter('manage_posts_columns', 'cust_fields');
 function product_categories_for_sub( $atts ) {
	global $woocommerce_loop;

	$atts = shortcode_atts( array(
			'number'     => null,
			'orderby'    => 'name',
			'order'      => 'ASC',
			'columns'    => '4',
			'hide_empty' => 1,
			'parent'     => '',
			'ids'        => ''
	), $atts );

	if ( isset( $atts['ids'] ) ) {
		$ids = explode( ',', $atts['ids'] );
		$ids = array_map( 'trim', $ids );
	} else {
		$ids = array();
	}

	$hide_empty = ( $atts['hide_empty'] == true || $atts['hide_empty'] == 1 ) ? 1 : 0;

	// get terms and workaround WP bug with parents/pad counts
	$args = array(
			'orderby'    => $atts['orderby'],
			'order'      => $atts['order'],
			'hide_empty' => $hide_empty,
			'include'    => $ids,
			'pad_counts' => true,
			'child_of'   => $atts['parent']
			
	
);

	$product_categories = get_terms( 'product_cat', $args );

	if ( '' !== $atts['parent'] ) {
		$product_categories = wp_list_filter( $product_categories, array( 'parent' => $atts['parent'] ) );
	}

	if ( $hide_empty ) {
		foreach ( $product_categories as $key => $category ) {
			if ( $category->count == 0 ) {
				unset( $product_categories[ $key ] );
			}
		}
	}

	if ( $atts['number'] ) {
		$product_categories = array_slice( $product_categories, 0, $atts['number'] );
	}

	$woocommerce_loop['columns'] = $atts['columns'];

	ob_start();

	// Reset loop/columns globals when starting a new loop
	$woocommerce_loop['loop'] = $woocommerce_loop['column'] = '';

	if ( $product_categories ) {
//var_dump($product_categories);
		
?>

  <div class="row  margin " style="">
	<h2  style="padding-left: 0px;">Categories</h2>		
<?php 
foreach ( $product_categories as $category ) {?>
<div class="col-md-6  margin" style="margin-bottom: 10px;" >
<div class="row margin" style="border: 1px solid #ddd; padding: 10px;margin-right: 10px;">
<div class="col-md-4 col-sm-4 margin img">
<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
<?php do_action( 'woocommerce_before_subcategory_title', $category );?>
  
</div>
<div class="col-md-8 col-sm-8" >
<h2 style="font-size: 20px;margin-top: 1px;"><?php echo ucfirst($category->name) ?></h2>
</a>
<p>Description:</p>
<p>
<?php echo $category->description;?>
</p>
</div>
</div>
</div>	

<?php 
	}

		?>
	
</div>
		<?php 

		}

		woocommerce_reset_loop();

		return '<div class="woocommerce columns-' . $atts['columns'] . '">' . ob_get_clean() . '</div>';
	}

	function product_categories_for_car( $atts ) {
		global $woocommerce_loop;
	
		$atts = shortcode_atts( array(
				'number'     => null,
				'orderby'    => 'name',
				'order'      => 'ASC',
				'columns'    => '4',
				'hide_empty' => 1,
				'parent'     => '',
				'ids'        => ''
		), $atts );
	
		if ( isset( $atts['ids'] ) ) {
			$ids = explode( ',', $atts['ids'] );
			$ids = array_map( 'trim', $ids );
		} else {
			$ids = array();
		}
	
		$hide_empty = ( $atts['hide_empty'] == true || $atts['hide_empty'] == 1 ) ? 1 : 0;
	
		// get terms and workaround WP bug with parents/pad counts
		$args = array(
				'orderby'    => $atts['orderby'],
				'order'      => $atts['order'],
				'hide_empty' => $hide_empty,
				'include'    => $ids,
				'pad_counts' => true,
				'child_of'   => $atts['parent']
               
		);
	
		$product_categories = get_terms( 'product_cat', $args );
	
		if ( '' !== $atts['parent'] ) {
			$product_categories = wp_list_filter( $product_categories, array( 'parent' => $atts['parent'] ) );
		}
	
		if ( $hide_empty ) {
			foreach ( $product_categories as $key => $category ) {
				if ( $category->count == 0 ) {
					unset( $product_categories[ $key ] );
				}
			}
		}
	
		if ( $atts['number'] ) {
			$product_categories = array_slice( $product_categories, 0, $atts['number'] );
		}
	
		$woocommerce_loop['columns'] = $atts['columns'];
	
		ob_start();
	
		// Reset loop/columns globals when starting a new loop
		$woocommerce_loop['loop'] = $woocommerce_loop['column'] = '';
	
		if ( $product_categories ) {
	
			?>
	
	  <ul class="roundabout">
				
				<?php 
				foreach ( $product_categories as $category ) {
	
					wc_get_template( 'content-product_cat.php', array(
						'category' => $category
					) );?>
	
				
	<?php 
		}
	
			?>
			</ul>
			
			<?php 
	
			}
	
			woocommerce_reset_loop();
	
			return '<div class="woocommerce columns-' . $atts['columns'] . '">' . ob_get_clean() . '</div>';
		}
	
		
		
		
		add_action( 'woocommerce_product_options_pricing', 'wc_custom_product_field' );
		function wc_custom_product_field() {
			echo '<hr>';
            woocommerce_wp_text_input( array( 'id' => 'key_it_price', 'class' => 'Key-IT-Price', 'label' => __( 'Key IT Price', 'woocommerce' )  ) );
			woocommerce_wp_text_input( array( 'id' => 'item_kg', 'class' => 'item_kg', 'label' => __( 'Item Kg', 'woocommerce' )  ) );		
			woocommerce_wp_text_input( array( 'id' => 'carton_kg', 'class' => 'carton_kg', 'label' => __( 'Carton Kg', 'woocommerce' )  ) );
			woocommerce_wp_text_input( array( 'id' => 'carton_count', 'class' => 'carton_count', 'label' => __( 'Carton Count', 'woocommerce' )  ) );
}
	
		add_action( 'save_post', 'custom1_save_product' );
		function custom1_save_product( $product_id ) {
			// If this is a auto save do nothing, we only save when update button is clicked
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
				return;
			if ( isset( $_POST['key_it_price'] ) ) {
				
					update_post_meta( $product_id, 'key_it_price', $_POST['key_it_price'] );
			
		}
		if ( isset( $_POST['item_kg'] ) ) {
		
			update_post_meta( $product_id, 'item_kg', $_POST['item_kg'] );
				
		}
		if ( isset( $_POST['carton_kg'] ) ) {
		
			update_post_meta( $product_id, 'carton_kg', $_POST['carton_kg'] );
		
		}
		if ( isset( $_POST['carton_count'] ) ) {
		
			update_post_meta( $product_id, 'carton_count', $_POST['carton_count'] );
		
		}
}
		add_action( 'woocommerce_single_product_summary', 'wc_rrp_show', 5 );
		function wc_rrp_show() {
			global $product;
			// Do not show this on variable products
			if ( $product->product_type <> 'variable' ) {
				$rrp = get_post_meta( $product->id, 'custom1', true );
				echo '<div class="woocommerce_msrp">';
				_e( 'custom1: ', 'woocommerce' );
				echo '<span class="woocommerce-rrp-price">' . woocommerce_price( $rrp ) . '</span>';
				echo '</div>';
			}
		}
		
		
		?>
