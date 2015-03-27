<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="input-group">
	<input class="form-control" id="search" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="SEARCH" >
      <span class="input-group-btn">
      
   <input type="submit" value="&#xf002;" style="background: #63BFEF;color: white;" class=" btn btn-default fa fa-search search_btn"/>
      </span>
    </div>
	
	
	<input type="hidden" name="post_type" value="product" />
</form>
