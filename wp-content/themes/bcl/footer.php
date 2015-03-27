<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

</div>	
<div class="row margin footer" >

<div class="row margin footer2">
<div class="col-md-9" style="padding: 0px">

<div class="" id="myNavbar3"   style="border-radius:0px 0px 5px 5px" >
					      <?php
				
				$args = array(
					'theme_location' => 'footer',
					'depth'		 => 0,
					'container'	 => false,
					'menu_class'	 => '',
					'walker'	 => new BootstrapNavMenuWalker()
				);

				wp_nav_menu($args);
			
			?>
		 </div>
</div>





<?php
if(is_front_page()){
?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/ks_home.js' ?>"></script>

<?php }
?></div>
<div class="row margin footer3" style="">
<div class="col-md-6 col-sm-6">&copy; 2015 Business Components Ltd. </div><div  class="col-md-6 col-sm-6 " ><span class="dev"><a href="http://www.knowledgeshine.com/" style="color: white; font-size: 12px;">Website Designed and Developed by: Knowledge Shine Consultancy</a></span></div>
</div>
</div>

</body >
	
</html>