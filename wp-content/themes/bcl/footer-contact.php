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
<div class="container">
<div class="col-md-3">
<h2>About Us</h2>
<p><?php 
$page = get_page_by_path('about-us');
//var_dump($page);
//$content = apply_filters('the_content', $page->post_content); 
//echo $content;
 
//var_dump(get_post_custom_values('about_footer',$page->ID));
$about=get_post_custom_values('about_footer',$page->ID);
echo$about[0]; 
?> </p>
</div>
<div class="col-md-3" style="">
<h2>Infomation</h2>
<ul>
<li><a href="">Legal</a></li>
<li><a href="">Terms of use</a></li>
<li><a href="">Privacy Pocicy</a></li>
<li><a href="">Help</a></li>
<li><a href="">Sitemap</a></li>
<li><a href="">About</a></li>
</ul>
</div>
<div class="col-md-3">



</div>
<div class="col-md-3" style="padding-top: 100px">
<img src="<?php echo get_stylesheet_directory_uri();?>/images/footer_logos.png">
</div>

</div>

<?php
if(is_front_page()){
?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/ks_home.js' ?>"></script>

<?php }
?>
</div>
</body >
	
</html>