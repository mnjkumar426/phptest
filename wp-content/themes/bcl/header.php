<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<!-- <meta name="viewport" content="width=device-width"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/images/icons/favi.png" />
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
<?php wp_footer(); ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".a-test").keyup(function(){
			$('.spin').show();
            $('.a-search-box').css('opacity','.4');
			   var data=$(this).val();
				jQuery.get(
						'<?php echo get_stylesheet_directory_uri(); ?>/test.php?data='+data, 
					    
					    function(response){
							$('.spin').hide();
							 $('.a-search-box').css('opacity','1');
						    $(".a-search-box").html(response);
					    }
					);

				});
//$('#catagory-menu a').click(function(){
//$('.dropdown-menu').toggle();
	
//});
$('.image img').hover(function(){
//alert('mouse in');
   $(this).toggleClass('animated pulse');
   
	
});


	});
		</script>
	

</head>
<body >

<div class="row margin">
<div class="row margin header">
<div class="row margin">
<div class="row margin header-up" style="" >
<div class="col-md-4  col-sm-3 logo col-md-push-4 col-sm-push-4 margin" ><a href="<?php echo site_url()?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.png"></a>
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background: #777;;padding-top:2px;padding-bottom: 2px;margin-left: 10px">
        <span class="sr-only">Toggle navigation</span>
       <i class="fa fa-bars fa-2x" style="color:white"></i>
      </button>
      
</div>
<div class="col-md-4  col-sm-5 margin col-md-push-4 col-sm-push-4" style="padding-top: 10px;padding-right:10px;text-align: ce">
  <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
 <div class="home-menu " id="myNavba" >
					      <?php
				
				$args = array(
					'theme_location' => 'home',
					'depth'		 => 0,
					'container'	 => false,
					'menu_class'	 => 'nav navbar-nav navbar-right menu-padding',
					'walker'	 => new BootstrapNavMenuWalker()
				);

				wp_nav_menu($args);
			
			?>
		 </div>

</div>
</div>

<div class="col-md-4  col-sm-4 col-md-pull-8 col-sm-pull-8 tag margin" style="color: white;">
<ul style="" class="margin" >
<li class=""><i class="fa fa-star" style="color:#FFFF00">&nbsp;</i>  All Brand Original No Duplicate</li>
<li ><i class="fa fa-thumbs-up" style="color: #FF9933">&nbsp; </i> 100% Quality Check Before Dispatch</li>
<li> <i class="fa fa-user" style="color: #906C67">&nbsp;&nbsp;</i>24 * 7 Customer Supports</li>
</ul>
</div>


</div>
<div class="row margin header-cat" >
<nav class="navbar navbar-default" style="border: none;margin: 0px;background-color:inherit;">
  <div class="row margin" >
    

    <!-- Collect the nav links, forms, and other content for toggling -->
    
     
      <div class="col-md-3  col-sm-4 col-xs-12 margin catagory-menu " id="catagory-menu" >

 <ul ><li><a  href="#" >Products <span class="caret"></span></a></li></ul>
<div class="row margin dropdown-menu " style="" >
  <?php $items = wp_get_nav_menu_items( 'cat-new'); 
var_dump($items);
 foreach ($items as $item){
$m_parent=$item->menu_item_parent;
$url=$item->url;
$title=$item->title;

if($m_parent!='0' && $m_parent=='104'){?>


<?php 
	$i=1;
	if(i<=2){
	?>
<div class="col-md-6 col-sm-6 margin">
<div class="menu-div">
<a href="<?php echo $url;?>" > <?php echo $title?></a>
</div>
</div>

<?php }}}?>
	</div>	
    </div><!-- /.navbar-collapse -->
 
 
 <div class="col-xs-12  col-sm-4 col-md-6 margin" id="" style="padding-top: 10px;">
 <?php echo get_product_search_form(); ?>
 </div>
 <div class="col-xs-12 col-sm-4 col-md-3 phone-no" style="">
 <i class="fa fa-phone-square" style="color: white"> &nbsp; <?php 
$page = get_page_by_path('contact-us');

$about=get_post_custom_values('phone_no',$page->ID);
echo$about[0]; 
?></i>
 
 </div> 
  </div><!-- /.container-fluid -->
</nav>

 </div>
</div>

</div>
<div class="row margin height-cal"></div>
