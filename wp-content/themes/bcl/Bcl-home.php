<?php
   /*
   Template Name:  Home
    
			 */
get_header();
?>


<div class="row margin main-content-home">



<div class="row margin" >
<script type="text/javascript">

(function() {

	$(window).load(function() {

		$('.roundabout').roundabout({
		    autoplay: true,
		    autoplayDuration: 2000,
		    autoplayPauseOnHover: true,
		    btnNext: ".next",
		    responsive:true,
		    
			    });
		$('.next').click(function(e) {

		    e.stopPropagation();
		    e.preventDefault();

		    // this is the action
		    $('.roundabout').roundabout('animateToNextChild');

		    return false;
		});
		$('.prev').click(function(e) {

		    e.stopPropagation();
		    e.preventDefault();

		    // this is the action
		    $('.roundabout').roundabout('animateToPreviousChild');

		    return false;
		});
		
		});


})();
</script>
<div class="row margin ">
<script type="text/javascript">

</script>



<script type="text/javascript">

function test(url){
	//alert("work");
		window.location=url;
	}

</script>
 <!--  <ul class="roundabout">
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/MP3.png" /></li>
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/Cans.png" /></li>
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/Dresses.png" /></li>
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/PowerTool.png" /></li>
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/TV.png" /></li>
<li><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/Watch.png" /></li>

</ul>
-->
<?php 
$args=array(
      'number' => '12',
      'orderby' => 'name',
      'order' => 'ASC',
      
      'hide_empty' => '1',
      'parent' => '0',
      'ids' => ''
 );


echo product_categories_for_car($args)?>
<div   class="dir" style="width: 100% ;"><ul style="list-style: none;margin: auto;position: relative;width: 25%;padding: 0px;"><li style="display: inline;"><a class="next" href="#" style="color: black;" ><i class="fa fa-angle-left fa-3x"></i></a></li><li style="display: inline;"><a class="prev" href="#" style="color: black;"><i class="fa fa-angle-right fa-3x"></i></a></li></ul></div>
</div>

<div class="row margin block-content" style="background-color:#0e4b68">
<h2><strong>WELCOME</strong> TO OUR STORE!</h2>
<div class="col-md-10 col-md-offset-1 block-content3">Business Components Ltd is one of the largest privately owned IT distributors in the UK Supplying other distributors with either BCL or own branded products from the BCL range. Business components is a leader in the educational field with many in house designed products only available for BCL.</div>
</div>
<div class="row margin block-content1" style="color: black;"><h2><strong>FEATURED PRODUCTS</strong></h2></div>

<div class="row margin product-box" style="background: #eceff4">

<?php echo do_shortcode('[product_category category="featured-products"]') ?>
</div>
</div>

</div>
<div class="row margin ">

</div>


<?php get_footer()?>