<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<div class="input-group">
	<input class="form-control a-test" id="search" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="SEARCH"  style="border-radius:0px;" autocomplete="off">
      <span class="input-group-btn">
      
   <input type="submit" value="&#xf002;" style="background: #1d8cc0;color: white;min-height: 49px;font-size: 27px;border-radius:0px;padding: 10px 30px 11px;border: 0px;" class=" btn btn-default fa fa-search search_btn"/>
      </span>
    </div>
	
	
	<input type="hidden" name="post_type" value="product" />
    <span class="spin" style="margin-top: 10px;margin-left:40%;color: #35c3d9;display: none;z-index: 10000000;position: absolute;background-color: #ddd"><i class="fa fa-spinner fa-pulse fa-3x " ></i></span>
	<div class="row margin a-search-box " style="z-index: 10000;position: absolute;width: 100%;" >
   
   </div>
	</form>
