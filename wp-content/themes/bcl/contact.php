<?php
/*
 Template Name:  contact

*/

get_header();
 
?>
<style>
.form-control{border-radius:0px;}
</style>
<div class="row margin main-content" style="background: #eceff4;padding-bottom: 100px;">
 <div class="container">

 <div class="col-md-9">
 <div class="row margin">
 <?php 
if (have_posts()) : while (have_posts()) : the_post();?>
<h2>
<?php the_title()?>

</h2>
<?php 
 the_content(); ?>
<?php endwhile; endif; ?>
 </div>
<div class="row margin ">
 <div class="col-md-6">
 <?php echo do_shortcode("[CONTACT_FORM_TO_EMAIL id=3]")?>
 
 </div>

</div>
 </div>
</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
//alert('ok');
	$('.dfield input,.dfield textarea').addClass('form-control');
	
});
</script>
<div class="row margin">

<?php get_footer()?>

</div>
